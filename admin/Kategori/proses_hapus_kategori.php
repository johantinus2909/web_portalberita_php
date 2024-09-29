<?php

include "../koneksi.php";

if (!isset($_GET['id_kategori']) || empty($_GET['id_kategori'])) {
    echo "ID Berita tidak ditemukan.";
    exit;
}

$id_kategori = mysqli_real_escape_string($connect, $_GET['id_kategori']);
$query = "SELECT * FROM kategori_berita WHERE id_kategori='$id_kategori'";
$query_mysql = mysqli_query($connect, $query);
if (!$query_mysql) {
    echo "Query Error: " . mysqli_error($connect);
    exit;
}
if (mysqli_num_rows($query_mysql) == 0) {
    echo "Data berita dengan ID $id_kategori tidak ditemukan.";
    exit;
}

$query = "DELETE FROM kategori_berita WHERE id_kategori='$id_kategori'";
$query_mysql = mysqli_query($connect, $query);
if ($query_mysql) {
    
    header("Location: tampil_kategori.php?");
    exit;
} else {
   
    echo "Maaf, Terjadi kesalahan saat mencoba menghapus data dari database " ;
    echo "<br><a href='tampil_kategori.php'>Kembali Ke Halaman Utama</a>";
}

