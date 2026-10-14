<?php
    $host = "localhost";
    $username = "root";
    $password = "akuneroR14";
    $database = "db_modul2_2504";
    
    $conn = new mysqli($host, $username, $password, $database);

    if ($conn -> connect_error){
        die ("Koneksi ke Database Gagal!!" .$conn -> connect_error);
    }

    $conn -> set_charset("utf8mb4")

?>