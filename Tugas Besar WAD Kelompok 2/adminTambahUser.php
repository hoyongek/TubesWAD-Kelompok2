<?php
require 'function.php';

if (isset($_POST['tambah'])) {
  if (addUser($_POST) > 0) {
    echo "<script>alert('data berhasil ditambahkan'); document.location.href = 'admin.php';</script>";
  } else {
    echo "data gagal ditambahkan";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah User</title>
</head>

<body>
  <h2 style="text-align: center; margin: 7px 7px 7px 7px;">Daftar User</h2>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Name :
          <input type="text" name="nama" autofocus autocomplete="off" required>
        </label>
      </li>
      <li>
        <label>
          E-mail :
          <input type="text" name="email" autocomplete="off" required>
        </label>
      </li>
      <li>
        <label>
          Username :
          <input type="text" name="username" autocomplete="off" required>
        </label>
      </li>
      <li>
        <label>
          password :
          <input type="password" name="password" autocomplete="off" required>
        </label>
      </li>
      <li>
        <label>
          Nomor HP :
          <input type="char" name="no_hp" autocomplete="off" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data</button>
      </li>
    </ul>
  </form>
</body>

</html>