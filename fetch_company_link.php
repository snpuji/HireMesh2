<?php
// fetch_company_link.php
// expects GET param: url (encoded remotive job url)
// returns JSON: { "company_url": "...", "source": "remotive" }

// Basic validation
if (!isset($_GET['url'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing url param']);
    exit;
}

$jobUrl = filter_var($_GET['url'], FILTER_SANITIZE_URL);

if (!filter_var($jobUrl, FILTER_VALIDATE_URL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid url']);
    exit;
}

// Simple caching to avoid frequent fetches (file cache)
$cacheDir = __DIR__ . '/cache_joblinks';
if (!is_dir($cacheDir)) {
    mkdir($cacheDir, 0755, true);
}

$cacheKey = md5($jobUrl);
$cacheFile = "$cacheDir/$cacheKey.json";
$cacheTtl = 60 * 60 * 6; // 6 hours

if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheTtl)) {
    header('Content-Type: application/json');
    echo file_get_contents($cacheFile);
    exit;
}

// fetch remote HTML
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $jobUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
// Set a realistic User-Agent
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');
curl_setopt($ch, CURLOPT_TIMEOUT, 15);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true); // Enable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

$html = curl_exec($ch);
$err = curl_error($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($html === false || $httpCode >= 400) {
    http_response_code(502);
    echo json_encode(['error' => 'Failed to fetch job page', 'http_code' => $httpCode, 'curl_error' => $err]);
    exit;
}

// parse HTML and find external links
libxml_use_internal_errors(true); // Suppress HTML5 parsing warnings
$doc = new DOMDocument();
$doc->loadHTML($html);
libxml_clear_errors();

$anchors = $doc->getElementsByTagName('a');
$companyLink = null;
$remotiveHost = parse_url('https://remotive.com', PHP_URL_HOST);

foreach ($anchors as $a) {
    // === FIX 1 ===
    // Tambahkan cek ini untuk memastikan $a adalah elemen sebelum memanggil getAttribute
    if (!($a instanceof DOMElement)) {
        continue;
    }
    // Baris 70 (asli) sekarang aman
    $href = $a->getAttribute('href');
    if (!$href) continue;

    // normalize relative URLs
    $href = html_entity_decode($href);
    $href = trim($href);

    // skip javascript:, mailto:, tel:, etc.
    if (preg_match('/^(javascript|mailto|tel|#)/i', $href)) {
        continue;
    }

    // make absolute if needed
    $parsed = parse_url($href);
    if (!isset($parsed['host'])) {
        // relative link: build absolute by using jobUrl base
        $base = rtrim($jobUrl, '/');
        if (substr($href, 0, 1) === '/') {
            $u = parse_url($jobUrl);
            $href = $u['scheme'] . '://' . $u['host'] . $href;
        } else {
            $href = $base . '/' . ltrim($href, '/');
        }
    }

    $host = parse_url($href, PHP_URL_HOST);
    if (!$host) continue;

    // pick the first link not on remotive.com
    // and also not common social media links unless it's the only option
    if (stripos($host, $remotiveHost) === false && !preg_match('/(linkedin\.com|twitter\.com|facebook\.com|instagram\.com)/i', $host)) {
        $companyLink = $href;
        break; // Found a good link
    }
}

// fallback: try to find element with class or rel that looks like apply link
if (!$companyLink) {
    foreach ($anchors as $a) {
        // === FIX 2 ===
        // Tambahkan cek yang sama di sini
        if (!($a instanceof DOMElement)) {
            continue;
        }
        $text = strtolower(trim($a->textContent));
        // Baris 110 (asli) sekarang aman
        $rel = $a->getAttribute('rel');

        // Check for common apply keywords or 'nofollow' (often used for external links)
        if (strpos($text, 'apply') !== false || strpos($text, 'company website') !== false || strpos($text, 'via') !== false || $rel === 'nofollow') {
            // Baris 114 (asli) sekarang aman
            $href = $a->getAttribute('href');
            if (!$href || preg_match('/^(javascript|mailto|tel|#)/i', $href)) continue;

            // Ensure it's absolute
            if (!parse_url($href, PHP_URL_HOST)) {
                $u = parse_url($jobUrl);
                $href = $u['scheme'].'://'.$u['host'] . '/' . ltrim($href, '/');
            }
            
            $host = parse_url($href, PHP_URL_HOST);
            // Check again it's not remotive
            if ($host && stripos($host, $remotiveHost) === false) {
                 $companyLink = $href;
                 break;
            }
        }
    }
}

$result = ['company_url' => $companyLink ?: null, 'source' => 'remotive_scrape', 'job_url' => $jobUrl];
$json = json_encode($result);

// save cache
file_put_contents($cacheFile, $json);

header('Content-Type: application/json');
echo $json;
?>