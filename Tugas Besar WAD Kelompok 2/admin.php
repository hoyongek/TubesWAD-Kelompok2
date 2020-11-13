<?php
require 'function.php';

$user = query("SELECT * FROM regist_user");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar User</title>
</head>

<body>
  <h2 style="text-align: center; margin: 7px 7px 7px 7px;">Daftar User</h2>

  <a href="adminTambahUser.php">Tambah Data</a>

  <table border="1" cellpading="10" cellspacing="0">
    <tr>
      <th>Nama</th>
      <th>e-mail</th>
      <th>No HP</th>
      <th>Action</th>
    </tr>
    <?php foreach ($user as $u) : ?>
      <tr>
        <td><?= $u['nama']; ?></td>
        <td><?= $u['email']; ?></td>
        <td><?= $u['no_hp']; ?></td>
        <td>
          <a href="adminEditUser.php?id=<?= $u['username']; ?>">Edit</a> | <a href="adminHapusUser.php?id=<?= $u['username']; ?>" onclick="return confirm('Apakah anda yakin?');">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>