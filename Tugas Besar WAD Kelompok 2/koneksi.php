<?php
$host="localhost:3307";
$user="root";
$password="";
$db="db_technisian";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}

function tambah_tech($data) {
	$kon = koneksi();
	$username = $data['username'];
	$password = $data['password'];
	$name = $data['name'];
	$email = $data['email'];
	$contNum = $data['contNum'];
	$address = $data['address'];
	$desc = $data['desc'];

	$querry = "INSERT INTO tech VALUES
						(rand(), '3', '$username', '$password', '$name', '$email', '$contNum', '$address', '$desc')";
	mysqli_query($kon, $querry)
}