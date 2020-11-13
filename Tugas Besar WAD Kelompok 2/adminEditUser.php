<?php
include 'koneksi.php';
$id = $_GET['id'];

$query = mysqli_query($kon, "SELECT * FROM regist_user WHERE username = '$id'") or die("querry salah");

foreach ($query as $data) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data User</title>
  </head>

  <body>
    <h2 style="text-align: center; margin: 7px 7px 7px 7px;">Form Ubah Data User</h2>
    <form action="updateRegist_User.php" method="POST">
      <input type="hidden" name="id" value="<?= $data['username']; ?>">
      <ul>
        <li>
          <label>
            Name :
            <input type="text" name="nama" autofocus autocomplete="off" required value="<?= $data['nama']; ?>">
          </label>
        </li>
        <li>
          <label>
            E-mail :
            <input type="text" name="email" autocomplete="off" required value="<?= $data['email']; ?>">
          </label>
        </li>
        <li>
          <label>
            Username :
            <input type="text" name="username" autocomplete="off" required value="<?= $data['username']; ?>">
          </label>
        </li>
        <li>
          <label>
            password :
            <input type="password" name="password" autocomplete="off" required value="<?= $data['pw']; ?>">
          </label>
        </li>
        <li>
          <label>
            Nomor HP :
            <input type="char" name="no_hp" autocomplete="off" required value="<?= $data['no_hp']; ?>">
          </label>
        </li>
        <li>
          <button type="submit" name="edit">Ubah Data</button>
        </li>
      </ul>
    </form>
  </body>

  </html>
<?php }
?>