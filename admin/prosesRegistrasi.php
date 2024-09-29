<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $tgl_lahir = $_POST['tgl_lahir'];

   $query_mysql= mysqli_query($connect, " INSERT INTO admin(username, password,email, tgl_lahir) VALUES('$username', '$password','$email','tgl_lahir')");

   if(mysqli_affected_rows($connect) > 0){
    header("Location: login.php");
    exit;
   }else{
    echo "Login Gagal";
   }
?>