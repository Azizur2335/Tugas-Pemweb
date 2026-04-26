<?php
require 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama          = $_POST['nama'];
    $email         = $_POST['email'];
    $password      = $_POST['password'];
    $no_hp         = $_POST['telepon'];
    $pesan         = $_POST['pesan'];

    if (!$nama || !$email || !$password || !$no_hp || !$pesan) {
        echo "<script>alert('Semua field harus diisi.'); window.location.href='index.php';</script>";
        exit();
    }
    $stmt = $koneksi->prepare("INSERT INTO contact (nama, email, password, no_hp, pesan) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nama, $email, $password, $no_hp, $pesan);

    if ($stmt->execute()){
        echo "<script>alert('Data berhasil disimpan.'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data, seilahkan coba lagi: " . $stmt->error . "'); window.location.href='index.php';</script>";
    }

    $stmt->close();
} else {
    header("Location: index.php");
    exit();
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>