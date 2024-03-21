<?php
//tangkap input form registrasi
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skills = $_POST['skills'] ?? null;
$domisili = $_POST['domisili'];
$email = $_POST['email'];

// Nilai untuk masing-masing skill
$nilai_skills = [
    'HTML' => 10,
    'CSS' => 10,
    'Javaw3Script' => 20,
    'RWD Bootstrap' => 20,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50,
];

if ($skills == null) { 
    $skills = [];
}

// Menghitung total skor skill
$skor_skill = 0;
foreach ($skills as $value) {
    $skor_skill += $nilai_skills[$value];
}

// Kategorisasi skill berdasarkan total skor

if ($skor_skill > 0 && $skor_skill <= 40) {
    $kategori_skills = "Kurang";
} 
elseif ($skor_skill > 40 && $skor_skill <= 60) {
    $kategori_skills = "Cukup";
} 
elseif ($skor_skill > 60 && $skor_skill <= 100) {
    $kategori_skills = "Baik";
} 
elseif ($skor_skill > 100 && $skor_skill <= 150) {
    $kategori_skills = "Sangat Baik";
}
else {
    $kategori_skills = "Tidak Memadai";
}

echo "Nim: $nim";
echo "<br>Nama Lengkap: $nama";
echo "<br>Jenis Kelamin: $jk";
echo "<br>Program Studi: $prodi";
echo "<br>Skill: " . join(', ', $skills);
echo "<br>Domisili: $domisili";
echo "<br>Email: $email";
echo "<br>Skor Skill: $skor_skill";
echo "<br>Kategori Skill: $kategori_skills";