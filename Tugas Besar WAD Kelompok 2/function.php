<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'findtech');
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

function uploadGambar()
{
  $nama = $_FILES['gambar']['name'];
  $tipe = $_FILES['gambar']['type'];
  $ukuran = $_FILES['gambar']['size'];
  $tmp = $_FILES['gambar']['tmp_name'];

  $list = array('jpg', 'jpeg', 'png');
  $ext = pathinfo($nama, PATHINFO_EXTENSION);

  if (!in_array($ext, $list)) {
    echo "<script>alert('Only .jpeg .jpg .png')</script>";
    return false;
  }

  if ($tipe != 'image/jpeg' && $tipe != 'image/png') {
    echo "<script>alert('Its not an image')</script>";
    return false;
  }

  if ($ukuran >= 5444444) {
    echo "<script>alert('Image size is to big!')</script>";
    return false;
  }

  $x = rand() . '_' . $nama;
  $conn = koneksi();
  $id = $_POST['id'];
  $gambarLama = $_POST['gambarLama'];

  if ($_POST['roles'] == 'User') {
    move_uploaded_file($tmp, 'gambar/user/' . $x);
    $query = "UPDATE user SET gambar = '$x' where id = '$id'";
    $update = mysqli_query($conn, $query);

    if (!empty($gambarLama)) {
      unlink("gambar/user/$gambarLama");
    }
    echo "<script>alert('Image has been changed!')</script>";
  } else if ($_POST['roles'] == 'Technician') {
    move_uploaded_file($tmp, 'gambar/user/' . $x);
    $query = "UPDATE technician SET gambar = '$x' where id = '$id'";
    $update = mysqli_query($conn, $query);

    if (!empty($gambarLama)) {
      unlink("gambar/user/$gambarLama");
    }
    echo "<script>alert('Image has been changed!')</script>";
  }
}

function editUser($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $password = htmlspecialchars($data['password']);
  $no_hp = htmlspecialchars($data['no_hp']);
  $alamat = htmlspecialchars($data['alamat']);

  $querry = "UPDATE user SET
            nama='$nama', email='$email', password='$password', no_hp='$no_hp', alamat='$alamat' WHERE id = '$id'";
  mysqli_query($conn, $querry) or die(mysqli_error($conn));
  if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
					alert('Data berhasil dirubah');
					document.location.href = 'profile_user.php';
          </script>";
  }
}

function editTeknisi($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $password = htmlspecialchars($data['password']);
  $no_hp = htmlspecialchars($data['no_hp']);
  $alamat = htmlspecialchars($data['alamat']);
  $expertise = implode(",", $_POST['expertise']);

  $querry = "UPDATE technician SET
            nama='$nama', email='$email', password='$password', no_hp='$no_hp', alamat='$alamat', expertise='$expertise' WHERE id = '$id'";
  mysqli_query($conn, $querry) or die(mysqli_error($conn));
  if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
					alert('Data berhasil dirubah');
					document.location.href = 'profile_teknisi.php';
          </script>";
  }
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
    header('location: profile_teknisi.php');
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
