<?php

include '../koneksi.php';


if (empty($_GET['id_kategori']) || empty($_POST['nama_kategori_berita'])) {
    echo "ID Kategori atau Nama Kategori tidak ditemukan.";
    exit;
}

$id_kategori = mysqli_real_escape_string($connect, $_GET['id_kategori']);
$nama_kategori_berita = mysqli_real_escape_string($connect, $_POST['nama_kategori_berita']);
$query = "UPDATE kategori_berita SET nama_kategori_berita = ? WHERE id_kategori = ?";
if ($query_mysql = mysqli_prepare($connect, $query)) {
    mysqli_stmt_bind_param($query_mysql, "si", $nama_kategori_berita, $id_kategori);
    
    if (mysqli_stmt_execute($query_mysql)) {
        $_SESSION['pesan'] = "Kategori berhasil diperbarui!";
        header("Location: tampil_kategori.php");
        exit;
    }
    
    
    $_SESSION['pesan'] = "Gagal memperbarui kategori.";
    header("Location: edit_kategori.php?id_kategori=$id_kategori");
    exit;
}

echo "Error pada query: " . mysqli_error($connect);
?>
