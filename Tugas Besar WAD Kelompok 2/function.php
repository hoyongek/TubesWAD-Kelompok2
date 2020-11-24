<?php
function koneksi()
{
  return mysqli_connect('localhost:3307', 'root', '', 'findtech');
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
  $conn = koneksi();
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $password = htmlspecialchars($data['password']);

  $querry = "INSERT INTO user VALUES
						(null, '$nama', '$email', '$password', null, null, null, 'User')";

  mysqli_query($conn, $querry) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function addTeknisi($data)
{
  $conn = koneksi();
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $password = htmlspecialchars($data['password']);

  $querry = "INSERT INTO technician VALUES
						(null, '$nama', '$email', '$password', null, null, null, 'Technician', null)";

  mysqli_query($conn, $querry) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
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

function userLogin($data)
{
  $conn = koneksi();

  $email = htmlspecialchars($data['email']);
  $password = htmlspecialchars($data['password']);

  $s = "SELECT * FROM user where email = '$email' && password = '$password'";

  $result = mysqli_query($conn, $s);

  $isi = mysqli_fetch_assoc($result);
  $num = mysqli_num_rows($result);

  if ($num == 1) {
    $_SESSION['userLogin'] = true;
    $_SESSION['nama'] = $isi['nama'];
    $_SESSION['id'] = $isi['id'];
    header('location: index.php');
  } else {
    return ['error' => true, 'pesan' => 'Username/Password Salah!'];
  }
}

function teknisiLogin($data)
{
  $conn = koneksi();

  $email = htmlspecialchars($data['email']);
  $password = htmlspecialchars($data['password']);

  $s = "SELECT * FROM technician where email = '$email' && password = '$password'";

  $result = mysqli_query($conn, $s);

  $isi = mysqli_fetch_assoc($result);
  $num = mysqli_num_rows($result);

  if ($num == 1) {
    $_SESSION['teknisiLogin'] = true;
    $_SESSION['nama'] = $isi['nama'];
    $_SESSION['id'] = $isi['id'];
    header('location: index.php');
  } else {
    return ['error' => true, 'pesan' => 'Username/Password Salah!'];
  }
}

function adminLogin($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  $s = "SELECT * FROM admin where username = '$username' && password = '$password'";

  $result = mysqli_query($conn, $s);
  $num = mysqli_num_rows($result);

  if ($num == 1) {
    $_SESSION['adminLogin'] = true;
    header('location: admin.php');
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