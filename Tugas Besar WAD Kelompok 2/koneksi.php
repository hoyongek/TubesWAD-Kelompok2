<?php
<<<<<<< HEAD
$host = "localhost";
$user = "root";
$password = "";
$db = "db_technisian";

$kon = mysqli_connect($host, $user, $password, $db);
if (!$kon) {
	die("Koneksi gagal:" . mysqli_connect_error());
}

//$result = mysqli_query($kon, $query);

function koneksi()
{
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
=======
$host="localhost:3307";
$user="root";
$password="";
$db="db_technisian";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
>>>>>>> 7b2caae278d85f7a8c77fa0ccbcee26831827f0f
}

function tambah_tech($data)
{
	$kon = koneksi();
	$username = htmlspecialchars($data['username']);
	$password = htmlspecialchars($data['password']);
	$name = htmlspecialchars($data['name']);
	$email = htmlspecialchars($data['email']);
	$contNum = htmlspecialchars($data['contNum']);
	$address = htmlspecialchars($data['address']);
	$desc = htmlspecialchars($data['desc']);

	$querry = "INSERT INTO tech VALUES
						(rand(), '3', '$username', '$password', '$name', '$email', '$contNum', '$address', '$desc')";

	mysqli_query($kon, $querry);
	return mysqli_affected_rows($kon);
}

function login($data)
{
	$kon = koneksi();
	$username = htmlspecialchars($data['username']);
	$password = htmlspecialchars($data['password']);

	if ($user = query("SELECT * FROM user WHERE username= 'username'")) {
		if (password_verify($password, $user['password'])) {
			$_SESSION['login'] = true;
			header("Location: index.php");
			exit;
		}
	}
	return ['error' => true, 'pesan' => 'Username / Password Salah!'];
}

function registrasi($data)
{
	$kon = koneksi();
	$username = htmlspecialchars(strtolower($data['username']));
	$password1 = mysqli_real_escape_string($kon, $data['password']);
	$password2 = mysqli_real_escape_string($kon, $data['password']);

	if (empty($username) || empty($password1) || empty($password2)) {
		echo "<script>
						alert('username / password tidak boleh kosong!');
						document.location.href = 'registrasi.php';
		</script>";
		return false;
	}

	if (query("SELECT * FROM user WHERE username = '$username'")) {
		echo "<script>
						alert('Username sudah dipakai!');
						document.location.href = 'registrasi.php';
		</script>";
		return false;
	}

	if ($password1 != $password2) {
		echo "<script>
						alert('Konfirmasi password tidak sesuai!');
						document.location.href = 'registrasi.php';
		</script>";
		return false;
	}

	if (strlen($password1) < 5) {
		echo "<script>
						alert('Password minimal 5 karakter!');
						document.location.href = 'registrasi.php';
		</script>";
		return false;
	}

	if (strlen($password2) < 5) {
		echo "<script>
						alert('Password minimal 5 karakter!');
						document.location.href = 'registrasi.php';
		</script>";
		return false;
	}

	if (strlen($username) < 4) {
		echo "<script>
						alert('Username minimal 4 Karakter!');
						document.location.href = 'registrasi.php';
		</script>";
		return false;
	}

	$password_baru = password_hash($password1, PASSWORD_DEFAULT);

	$query = "INSERT INTO user VALUES
						(rand(), '$username', '$password_baru')";
	mysqli_query($kon, $query) or die(mysqli_error($kon));
	return mysqli_affected_rows($kon);
}
