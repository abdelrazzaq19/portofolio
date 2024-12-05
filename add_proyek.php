<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

    $gambar = $_FILES['gambar'];
    $gambar_nama = basename($gambar['name']);
    $gambar_path = 'uploads/' . $gambar_nama;

    if (move_uploaded_file($gambar['tmp_name'], $gambar_path)) {
        $query = "INSERT INTO proyek (judul, deskripsi, gambar) VALUES (:judul, :deskripsi, :gambar)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar_nama
        ]);
        header("Location: index.php");
        exit;
    } else {
        echo "Gambar gagal diupload!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proyek</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    <header>
        <h1>Tambah Proyek Baru</h1> 
        <a href="index.php">Kembali ke Portofolio</a>
    </header>

    <main>  
        <form method="POST" action="add_proyek.php" enctype="multipart/form-data">
            <label for="judul">Judul Proyek:</label>
            <input type="text" id="judul" name="judul" required><br><br>

            <label for="deskripsi">Deskripsi:</label>
            <textarea id="deskripsi" name="deskripsi" required></textarea><br><br>

            <label for="gambar">Gambar Proyek:</label>
            <input type="file" id="gambar" name="gambar" required><br><br>

            <input type="submit" value="Tambah Proyek">
        </form>
    </main>
</body>
</html>
