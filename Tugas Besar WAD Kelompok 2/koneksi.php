<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "db_technisian";

$kon = mysqli_connect($host, $user, $password, $db);
if (!$kon) {
	die("Koneksi gagal:" . mysqli_connect_error());
}

$result = mysqli_query($kon, $query);

function koneksi() {
	return mysqli_connect('localhost', 'root', '', 'db_technisian');
}

function query($query)
{
	$kon = koneksi();
	$result = mysqli_query($kon, $query);

	if (mysqli_num_rows($result) == 1) {
		return mysqli_fetch_assoc($result);
	}

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
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