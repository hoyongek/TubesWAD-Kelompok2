<?php
$host="localhost:3307";
$user="root";
$password="";
$db="db_technisian";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>