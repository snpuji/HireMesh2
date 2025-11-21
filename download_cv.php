<?php
// FILE: download_cv.php
// (Pastikan file 'fpdf.php' ada di folder yang sama)

session_start();
require 'db.php';     // 1. Koneksi Database
require 'fpdf.php'; // 2. Panggil Library FPDF

if (!isset($_SESSION['user_id'])) {
    die("Error: Anda harus login untuk men-download CV.");
}
if (!isset($pdo)) {
    die("Error: Koneksi database (pdo) tidak ditemukan.");
}

$user_id = $_SESSION['user_id'];

// Fungsi untuk membersihkan teks untuk PDF (FPDF tidak suka UTF-8)
function clean_text($text) {
    if (empty($text)) return '';
    // Konversi karakter UTF-8 (seperti 'é' atau 'à') ke versi Latin1 (ISO-8859-1)
    return iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $text);
}


// [PROSES 2: MENGAMBIL SEMUA DATA USER (Sama seperti di editprofile.php)]
try {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$user_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$user) {
        die("User tidak ditemukan.");
    }

    $educations = $pdo->prepare("SELECT * FROM user_education WHERE user_id = ? ORDER BY id");
    $educations->execute([$user_id]);
    $educations = $educations->fetchAll(PDO::FETCH_ASSOC);

    $experiences = $pdo->prepare("SELECT * FROM user_experience WHERE user_id = ? ORDER BY start_date DESC");
    $experiences->execute([$user_id]);
    $experiences = $experiences->fetchAll(PDO::FETCH_ASSOC);
    
    $skills = $pdo->prepare("SELECT * FROM user_skills WHERE user_id = ? ORDER BY skill_type, skill_name");
    $skills->execute([$user_id]);
    $skills = $skills->fetchAll(PDO::FETCH_ASSOC);
    
    $certifications = $pdo->prepare("SELECT * FROM user_certifications WHERE user_id = ? ORDER BY cert_year DESC");
    $certifications->execute([$user_id]);
    $certifications = $certifications->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Error mengambil data user: " . $e->getMessage());
}

// ==========================================================
// MULAI MEMBUAT PDF
// ==========================================================

class PDF extends FPDF
{
    // Fungsi helper untuk membuat Judul Bagian
    function SectionTitle($title)
    {
        $this->SetFont('Arial', 'B', 14);
        $this->SetFillColor(230, 230, 230); // Warna abu-abu muda
        $this->Cell(0, 10, clean_text(strtoupper($title)), 0, 1, 'L', true);
        $this->Ln(4); // Jarak
    }

    // Fungsi helper untuk isi teks
    function SectionBody($text)
    {
        $this->SetFont('Arial', '', 11);
        $this->MultiCell(0, 6, clean_text($text));
        $this->Ln(4); // Jarak
    }
}

// 1. Inisialisasi PDF
$pdf = new PDF();
$pdf->AddPage();

// 2. Judul (Nama User)
$pdf->SetFont('Arial', 'B', 24);
$pdf->Cell(0, 15, clean_text($user['name']), 0, 1, 'C');

// 3. Info Kontak
$pdf->SetFont('Arial', '', 11);
$kontak = [];
if (!empty($user['email'])) $kontak[] = clean_text($user['email']);
if (!empty($user['phone_number'])) $kontak[] = clean_text($user['phone_number']);
if (!empty($user['location'])) $kontak[] = clean_text($user['location']);
$pdf->Cell(0, 7, implode(' | ', $kontak), 0, 1, 'C');
if (!empty($user['portfolio_link'])) {
    $pdf->SetTextColor(0, 0, 238); // Biru
    $pdf->Cell(0, 7, clean_text($user['portfolio_link']), 0, 1, 'C', false, $user['portfolio_link']);
    $pdf->SetTextColor(0); // Reset warna
}
$pdf->Ln(8); // Jarak besar

// 4. Profile Summary
if (!empty($user['profile_summary'])) {
    $pdf->SectionTitle('Profile Summary');
    $pdf->SectionBody($user['profile_summary']);
}

// 5. Work Experience (Looping)
if (!empty($experiences)) {
    $pdf->SectionTitle('Work Experience');
    foreach ($experiences as $exp) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 7, clean_text($exp['job_title']), 0, 1);
        
        $pdf->SetFont('Arial', 'I', 11);
        $date_end = $exp['is_current'] ? 'Present' : clean_text($exp['end_date']);
        $pdf->Cell(0, 6, clean_text($exp['company_name']) . ' | ' . clean_text($exp['start_date']) . ' - ' . $date_end, 0, 1);
        
        $pdf->SectionBody($exp['job_description']);
    }
}

// 6. Education (Looping)
if (!empty($educations)) {
    $pdf->SectionTitle('Education');
    foreach ($educations as $edu) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 7, clean_text($edu['institution_name']), 0, 1);
        
        $pdf->SetFont('Arial', 'I', 11);
        $pdf->Cell(0, 6, 'Entry: ' . clean_text($edu['year_entry']) . ' | Graduation: ' . clean_text($edu['graduation']), 0, 1);
        $pdf->Ln(4);
    }
}

// 7. Skills (Looping)
if (!empty($skills)) {
    $pdf->SectionTitle('Skills');
    $hard_skills = [];
    $soft_skills = [];
    foreach ($skills as $skill) {
        if ($skill['skill_type'] == 'hard') {
            $hard_skills[] = clean_text($skill['skill_name']);
        } else {
            $soft_skills[] = clean_text($skill['skill_name']);
        }
    }
    
    if (!empty($hard_skills)) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 7, 'Hard Skills:', 0, 1);
        $pdf->SectionBody(implode(', ', $hard_skills));
    }
    if (!empty($soft_skills)) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 7, 'Soft Skills:', 0, 1);
        $pdf->SectionBody(implode(', ', $soft_skills));
    }
}

// 8. Certifications (Looping)
if (!empty($certifications)) {
    $pdf->SectionTitle('Certifications');
    foreach ($certifications as $cert) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 7, clean_text($cert['cert_name']), 0, 1);
        
        $pdf->SetFont('Arial', 'I', 11);
        $pdf->Cell(0, 6, clean_text($cert['cert_organization']) . ' (' . clean_text($cert['cert_year']) . ')', 0, 1);
        $pdf->Ln(4);
    }
}

// ==========================================================
// SELESAI: KELUARKAN PDF KE BROWSER
// ==========================================================
// 'D' = Force Download
$pdf->Output('D', 'CV - ' . clean_text($user['name']) . '.pdf');
exit;

?>