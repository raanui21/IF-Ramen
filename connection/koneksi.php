<?php
$host = 'localhost';
$db = 'restoran';
$usr = 'root';
$pwd = '';

// parameter
$conn = mysqli_connect($host, $usr, $pwd, $db); //true|false
mysqli_select_db($conn, $db);

//mengecet apakah terhubung atau tidak
if (!$conn) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
