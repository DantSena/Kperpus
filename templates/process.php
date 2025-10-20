<?php
include 'db.php';  // Include file koneksi DB-mu

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form (sanitize untuk keamanan dasar)
    $tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $kelas = mysqli_real_escape_string($conn, $_POST['kelas']);
    $keperluan = mysqli_real_escape_string($conn, $_POST['keperluan']);
    
    // Field opsional
    $judul_buku = !empty($_POST['judul-buku']) ? mysqli_real_escape_string($conn, $_POST['judul-buku']) : NULL;
    $nomor_buku = !empty($_POST['nomor-buku']) ? mysqli_real_escape_string($conn, $_POST['nomor-buku']) : NULL;
    $keterangan_lainnya = !empty($_POST['keterangan-lainnya']) ? mysqli_real_escape_string($conn, $_POST['keterangan-lainnya']) : NULL;

    // Query INSERT dengan prepared statement (lebih aman dari SQL injection)
    $sql = "INSERT INTO absensi (tanggal, nama, kelas, keperluan, judul_buku, nomor_buku, keterangan_lainnya) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $tanggal, $nama, $kelas, $keperluan, $judul_buku, $nomor_buku, $keterangan_lainnya);
    
    if ($stmt->execute()) {
        // Sukses! Redirect kembali ke form dengan pesan sukses (atau tampilkan di halaman)
        header("Location: kperpus/static/index.html?status=sukses");  // Ganti index.html dengan nama file form-mu
        exit();
    } else {
        // Error
        header("Location: kperpus/static/index.html?status=error&msg=" . urlencode("Gagal simpan data: " . $conn->error));
        exit();
    }
    
    $stmt->close();
} else {
    // Kalau bukan POST, redirect ke form
    header("Location: kperpus/static/index.html");
    exit();
}

$conn->close();
?>
