<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "db_technisian";

$kon = mysqli_connect($host, $user, $password, $db);
if (!$kon) {
	die("Koneksi gagal:" . mysqli_connect_error());
}

function query($query)
{
	$kon = mysqli_connect($host, $user, $password, $db);
	$result = mysqli_query($kon, $query);

	if (mysqli_num_rows($result) == 1) {
		return mysqli_fetch_assoc($result);
	}

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
}
$result = mysqli_query($kon, $query);
