<?php
// Informasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yohanes dio";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Periksa apakah data dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Siapkan pernyataan SQL
    $stmt = $conn->prepare("INSERT INTO contacts (nama, email, pesan) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nama, $email, $pesan);

    // Jalankan pernyataan dan periksa hasilnya
    if ($stmt->execute()) {
        echo "<script>alert('Pesan Anda berhasil dikirim!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan. Silakan coba lagi.'); window.location.href='index.php';</script>";
    }

    $stmt->close();
} else {
    echo "<script>alert('Metode pengiriman tidak valid.'); window.location.href='index.php';</script>";
}

// Tutup koneksi
$conn->close();
?>