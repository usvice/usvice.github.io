<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pesan</title>
</head>
<body>
    <h1>Form Pesan</h1>
    <form action="submit.php" method="post">
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required><br>

        <label for="pesanan">Pesanan:</label>
        <textarea id="pesanan" name="pesanan" required></textarea><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>