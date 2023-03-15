<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "123200126_db";

    $koneksi = new mysqli($hostname, $username, $password, $database);

    if($koneksi->connect_error) {
        die("Connection Lost!! ");
    }
?>