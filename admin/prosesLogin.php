<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

   $query_mysql= mysqli_query($connect, "SELECT *FROM admin WHERE username = '$username' AND password = '$password'");

   if(mysqli_affected_rows($connect) > 0){
    session_start();
    $_SESSION["isLogin"]= true ;
    $_SESSION["admin"]= $username ;
    header("Location: index.php");
    exit;
   }else{
    echo "Login Gagal";
   }
?>

