<?php

include "../koneksi.php";


if (!isset($_GET['id_berita']) || empty($_GET['id_berita'])) {
    echo "ID Berita tidak ditemukan.";
    exit;
}

$id_berita = mysqli_real_escape_string($connect, $_GET['id_berita']);
$query = "SELECT * FROM berita WHERE id_berita='$id_berita'";
$query_mysql = mysqli_query($connect, $query);
if (!$query_mysql) {
    echo "Query Error: " . mysqli_error($connect);
    exit;
}
if (mysqli_num_rows($query_mysql) == 0) {
    echo "Data berita dengan ID $id_berita tidak ditemukan.";
    exit;
}

$data = mysqli_fetch_array($query_mysql);
if (is_file("../images/" . $data['gambar_berita']) && $data['gambar_berita'] !== '') {
    unlink("../images/" . $data['gambar_berita']);
}


$query = "DELETE FROM berita WHERE id_berita='$id_berita'";
$query_mysql = mysqli_query($connect, $query);
if ($query_mysql) {
    header("Location: tampil_berita.php");
    exit;
} else {
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menghapus data dari database.";
    echo "<br><a href='index.php'>Kembali Ke Halaman Utama</a>";
}
