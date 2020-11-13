<?php
include "koneksi.php";
if (isset($_POST['edit'])) {
  $nama = htmlspecialchars($_POST['nama']);
  $email = htmlspecialchars($_POST['email']);
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);
  $no_hp = htmlspecialchars($_POST['no_hp']);
  $role = 2;

  $query = mysqli_query($kon, "UPDATE regist_user SET username='$username', idRoles='$role', nama='$nama',
            psw_repeat='$password', email='$email', no_hp='$no_hp', pw='$password' WHERE username='$username'");
  if ($query > 0) {
    echo "<script>alert('data berhasil diubah'); window.location.href = 'admin.php';</script>";
  } else {
    echo "<script>alert(data gagal diubah!)</script>";
  }
  mysqli_query($kon, $query) or die(mysqli_error($kon));
  return mysqli_affected_rows($kon);
}
