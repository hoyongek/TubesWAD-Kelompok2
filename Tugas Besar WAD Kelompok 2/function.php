<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'db_technisian');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function addUser($data)
{
  $kon = koneksi();
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);
  $no_hp = htmlspecialchars($data['no_hp']);
  $role = 2;

  $querry = "INSERT INTO regist_user VALUES
						('$username', '$role', '$nama', '$password', '$email', '$no_hp', '$password')";

  mysqli_query($kon, $querry) or die(mysqli_error($kon));
  return mysqli_affected_rows($kon);
}

function deleteUser($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM regist_user WHERE username = '$id'") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function editUser($data)
{
  $kon = koneksi();
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);
  $no_hp = htmlspecialchars($data['no_hp']);
  $role = 2;

  $querry = "UPDATE regist_user SET
						username=$username, nama=$nama, psw_repeat=$password, email=$email, no_hp=$no_hp, password=$password
						WHERE username = '$id'";

  mysqli_query($kon, $querry) or die(mysqli_error($kon));
  return mysqli_affected_rows($kon);
}

function login($data)
{
  $kon = koneksi();
  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  if ($username == 'admin' && $password == 'admin') {
    $_SESSION['login'] = true;
    header("Location: index.php");
    exit;
  } else {
    return ['error' => true, 'pesan' => 'Username/Password Salah!'];
  }
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
