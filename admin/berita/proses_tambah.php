<?php
include "../koneksi.php";


$judul_berita = mysqli_real_escape_string($connect, $_POST['judul_berita']);
$isi_berita = mysqli_real_escape_string($connect, $_POST['isi_berita']);
$id_kategori = mysqli_real_escape_string($connect, $_POST['kategori_berita']);
$tgl_berita = mysqli_real_escape_string($connect, $_POST['tanggal']);
$slug = strtolower(str_replace(' ', '-', $judul_berita));


if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
    $foto = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    
    $fotobaru = date('dmYHis') . $foto;

   
    $path = "../images/" . $fotobaru;

    
    if (move_uploaded_file($tmp, $path)) {
       
        $query = "INSERT INTO berita (id_kategori, judul_berita, isi_berita, gambar_berita, tgl_berita, slug)
                  VALUES ('$id_kategori', '$judul_berita', '$isi_berita', '$fotobaru', '$tgl_berita', '$slug')";
        $sql = mysqli_query($connect, $query);

        if ($sql) {
           
            header("Location: tampil_berita.php");
            exit();
        } else {
            
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br>MySQL Error: " . mysqli_error($connect);
            echo "<br><a href='tambah_berita.php'>Kembali Ke Form</a>";
        }
    } else {
        
        echo "Maaf, Gambar gagal untuk diupload.";
        echo "<br><a href='tambah_berita.php'>Kembali Ke Form</a>";
    }
} else {
    
    echo "Maaf, tidak ada gambar yang diunggah atau terjadi kesalahan saat upload.";
    echo "<br><a href='tambah_berita.php'>Kembali Ke Form</a>";
}
?>
