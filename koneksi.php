<?php
$host ="localhost";
$user ="root";
$pass = "";
$db = "db_ToyStoree";
$koneksi = mysqli_connect('localhost', 'root', '', 'db_ToyStoree');
$db_koneksi = mysqli_select_db($koneksi, $db);
?>