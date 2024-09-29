<?php

include "../koneksi.php";

// Pastikan 'id_berita' ada di URL dan tidak kosong
if (!isset($_GET['id_berita']) || empty($_GET['id_berita'])) {
    echo "ID Berita tidak ditemukan.";
    exit;
}

$id_berita = mysqli_real_escape_string($connect, $_GET['id_berita']);

// Ambil Data yang Dikirim dari Form
$judul_berita = mysqli_real_escape_string($connect, $_POST['judul_berita']);
$isi_berita = mysqli_real_escape_string($connect, $_POST['isi_berita']);
$id_kategori = mysqli_real_escape_string($connect, $_POST['kategori_berita']);
$tgl_berita = mysqli_real_escape_string($connect, $_POST['tanggal']); // Pastikan tanggal valid

// Cek apakah user ingin mengubah gambar atau tidak
if (isset($_POST['ubah_gambar']) && $_POST['ubah_gambar'] === 'true') {
    // Periksa apakah file gambar diunggah
    if (isset($_FILES['gambar_berita']) && $_FILES['gambar_berita']['error'] === UPLOAD_ERR_OK) {
        $foto = $_FILES['gambar_berita']['name'];
        $query_mysql = $_FILES['gambar_berita']['tmp_name'];

        // Rename nama fotonya dengan menambahkan tanggal dan jam upload
        $fotobaru = date('dmYHis') . $foto;

        // Set path folder tempat menyimpan fotonya
        $path = "../images/" . $fotobaru;

        // Proses upload
        if (move_uploaded_file($query_mysql, $path)) {
            // Query untuk menampilkan data berita berdasarkan ID yang dikirim
            $query = "SELECT * FROM berita WHERE id_berita='$id_berita'";
            $query_mysql = mysqli_query($connect, $query);

            if (!$query_mysql) {
                echo "Query Error: " . mysqli_error($connect);
                exit;
            }

            $data = mysqli_fetch_array($query_mysql);

            // Cek apakah file gambar sebelumnya ada di folder images
            if (is_file("../images/" . $data['gambar_berita']) && $data['gambar_berita'] !== '') {
                unlink("../images/" . $data['gambar_berita']); // Hapus file gambar sebelumnya
            }

            // Proses ubah data ke Database
            $query = "UPDATE berita SET judul_berita='$judul_berita', isi_berita='$isi_berita', id_kategori='$id_kategori', gambar_berita='$fotobaru', tgl_berita='$tgl_berita' WHERE id_berita='$id_berita'";
            $query_mysql = mysqli_query($connect, $query);

            if ($query_mysql) {
                header("Location: tampil_berita.php");
                exit;
            } else {
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                echo "<br><a href='proses_edit.php?id_berita=" . htmlspecialchars($id_berita) . "'>Kembali Ke Form</a>";
            }
        } else {
            echo "Maaf, Gambar gagal untuk diupload.";
            echo "<br><a href='proses_edit.php?id_berita=" . htmlspecialchars($id_berita) . "'>Kembali Ke Form</a>";
        }
    } else {
        echo "Maaf, tidak ada gambar yang diunggah atau terjadi kesalahan saat upload.";
        echo "<br><a href='proses_edit.php?id_berita=" . htmlspecialchars($id_berita) . "'>Kembali Ke Form</a>";
    }
} else {
    // Jika user tidak mengubah gambar
    $query = "UPDATE berita SET judul_berita='$judul_berita', isi_berita='$isi_berita', id_kategori='$id_kategori', tgl_berita='$tgl_berita' WHERE id_berita='$id_berita'";
    $query_mysql = mysqli_query($connect, $query);

    if ($query_mysql) {
        header("Location: tampil_berita.php");
        exit;
    } else {
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='proses_edit.php?id_berita=" . htmlspecialchars($id_berita) . "'>Kembali Ke Form</a>";
    }
}
?>
