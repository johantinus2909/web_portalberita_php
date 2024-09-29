<?php
include "../koneksi.php";


    $nama_kategori_berita = mysqli_real_escape_string($connect, $_POST['nama_kategori_berita']);

    if (!empty($nama_kategori_berita)) {
        
        $query = "INSERT INTO kategori_berita (nama_kategori_berita) VALUES ('$nama_kategori_berita')";

       
        if (mysqli_query($connect, $query)) {
            
           
            header("Location: tampil_kategori.php");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($connect);
        }
    } else {
        echo "Nama kategori tidak boleh kosong!";
    }



?>
