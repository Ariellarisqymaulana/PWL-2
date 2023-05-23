<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $myDB ="toko_buah";
    $conn = new mysqli($servername,$username,$password,$myDB);
    if($conn->connect_error)
    {
        die("Koneksi ke server gagal ". $conn->connect_error);
    }
?>