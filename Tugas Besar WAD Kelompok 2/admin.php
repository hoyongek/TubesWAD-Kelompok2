<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Daftar User</title>

</head>

<body>
  <center>
    <h2 style="text-align: center; margin: 7px 7px 7px 7px;">Daftar User</h2>

    <a href="adminTambahUser.php">Tambah Data</a>

    <table border="1" cellpading="10" cellspacing="0">
      <tr>
        <th>Nama</th>
        <th>e-mail</th>
        <th>No HP</th>
        <th>Action</th>
      </tr>
      <?php
      $query = mysqli_query($kon, "SELECT * FROM regist_user") or die("Query Salah");
      foreach ($query as $data) {
      ?>
        <tr>
          <td><?= $data['nama']; ?></td>
          <td><?= $data['email']; ?></td>
          <td><?= $data['no_hp']; ?></td>
          <td>
            <a href="adminEditUser.php?id=<?= $data['username']; ?>">Edit</a> | <a href="adminHapusUser.php?id=<?= $data['username']; ?>" onclick="return confirm('Apakah anda yakin?');">Delete</a>
          </td>
        </tr>
      <?php } ?>
    </table>
  </center>
</body>

</html>