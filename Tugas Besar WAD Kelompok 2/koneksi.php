<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "db_technisian";

$kon = mysqli_connect($host, $user, $password, $db) or die("Koneksi gagal:" . mysqli_connect_error());
