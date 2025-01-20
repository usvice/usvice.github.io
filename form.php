<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form dan menghindari SQL Injection
    $nama_lengkap = $conn->real_escape_string($_POST['nama_lengkap']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $pesanan = $conn->real_escape_string($_POST['pesanan']);

    // Menyimpan data ke dalam tabel
    $sql = "INSERT INTO pesan (nama_lengkap, email, subject, Pesanan) VALUES ('$nama_lengkap', '$email', '$subject', '$pesanan')";

    if ($conn->query($sql) === TRUE) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
