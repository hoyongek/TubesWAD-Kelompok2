<?php
session_start();
if (!isset($_SESSION['teknisiLogin'])) {
  header("Location: login_teknisi.php");
  exit;
}

require 'function.php';

if (isset($_POST['Terima'])) {
  terimaPesan($_POST);
}

if (isset($_POST['Tolak'])) {
  tolakPesan($_POST);
}

if (isset($_POST['Update'])) {
  updatePesan($_POST);
}

$idTech = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>
    Home Website Find Technician!
  </title>
</head>

<body>

  <!--Batas TOP NAV-->
  <div class="top container-fluid fixed-top ">
    <img class="logo_navbar" src="gambar\logo.png">

    <div class="dropdown">
      <h5 class="halo">Halo, <?= $_SESSION['nama']; ?></h5>
      <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        My Account
      </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="profile_teknisi.php">Profile Teknisi</a>
        <a class="dropdown-item" href="my_order_teknisi.php">My Order</a>
        <a class="dropdown-item" href="logout.php">Log Out</a>
      </div>
    </div>
  </div>
  <!--Batas TOP NAV-->

  <div class="isi_body">

    <h1 style="text-align: center;" class="display-4">My Order Teknisi</h1><br>

    <div class="container">
      <div class="shadow-sm p-3 mb-5 bg-white rounded">
        <div class="sm-12" style="background: white; padding-left:10px;">
          <h5>Transaksi Saat Ini</h5>
        </div>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Booking ID</th>
              <th scope="col">Nama User</th>
              <th scope="col">Alamat</th>
              <th scope="col">Status Pesanan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $conn = koneksi();
            $query = mysqli_query($conn, "SELECT * FROM pesan WHERE id_technician='$idTech' AND status!='Selesai' AND status!='Menunggu Konfirmasi' AND status!='Ditolak'");
            if (mysqli_num_rows($query) == 0) {
            ?>
              <p>Tidak ada pesanan</p>
            <?php } else {
              $x = 1;
            ?>
              <?php foreach ($query as $d) {
                $id = $d['id_user'];
                $q = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
                $data = mysqli_fetch_assoc($q);
              ?>
                <tr>
                  <th scope="row"><?= $d['id']; ?></th>
                  <td><?= $data['nama']; ?></td>
                  <td><?= $data['alamat']; ?></td>
                  <td><?= $d['status']; ?></td>
                  <td>
                    <?php if ($d['status'] != 'Menunggu Konfirmasi') { ?>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target=".modal-update-status" id="modal">Update Status</button>
                      <!--Modal-->
                      <div class="modal fade modal-update-status" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content" style="padding:20px;">
                            <form action="" method="POST" enctype="multipart/form-data">

                              <h5> Status Pesanan </h5>
                              <form action="" method="POST">
                                <select class="custom-select" name="status">
                                  <option value="Dalam Perjalanan">Dalam Perjalanan</option>
                                  <option value="Selesai">Selesai</option>
                                </select>

                                <div class="modal-footer">
                                  <div class="form-group">
                                    <button type="submit" name="cancel" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    <input type="hidden" name="id" value="<?= $d['id']; ?>">
                                    <input type="submit" name="Update" class="btn btn-primary" value="Update">
                                  </div>
                                </div>
                              </form>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!--Modal-->
                    <?php } ?>
                  </td>
                </tr>
            <?php }
            } ?>
          </tbody>
        </table>
      </div>

      <div class="shadow-sm p-3 mb-5 bg-white rounded">
        <div class="sm-12" style="background: white; padding-left:10px;">
          <h5>Order Baru</h5>
        </div>
        <table class="table">
          <thead class="thead bg-info">
            <tr>
              <th scope="col">Booking ID</th>
              <th scope="col">Nama User</th>
              <th scope="col">Alamat</th>
              <th scope="col">Status Pesanan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $conn = koneksi();
            $query = mysqli_query($conn, "SELECT * FROM pesan WHERE id_technician='$idTech' AND status='Menunggu Konfirmasi'");
            if (mysqli_num_rows($query) == 0) {
            ?>
              <p>Tidak ada pesanan</p>
            <?php } else {
              $x = 1;
            ?>
              <?php foreach ($query as $d) {
                $id = $d['id_user'];
                $q = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
                $data = mysqli_fetch_assoc($q);
              ?>
                <tr>
                  <th scope="row"><?= $d['id']; ?></th>
                  <td><?= $data['nama']; ?></td>
                  <td><?= $data['alamat']; ?></td>
                  <td><?= $d['status']; ?></td>
                  <td>
                    <?php if ($d['status'] == 'Menunggu Konfirmasi') { ?>
                      <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $d['id']; ?>">
                        <input type="submit" name="Terima" value="Terima" class="btn btn-success">
                        <input type="submit" name="Tolak" value="Tolak" class="btn btn-danger">
                      </form>
                    <?php } ?>
                  </td>
                </tr>
            <?php }
            } ?>
          </tbody>
        </table>
      </div>

      <div class="shadow-sm p-3 mb-5 bg-white rounded">

        <div class="sm-12" style="background: white; padding-left:10px;">
          <h5>History Order</h5>
        </div>
        <table class="table">
          <thead class="thead bg-warning">
            <tr>
              <th scope="col">Booking ID</th>
              <th scope="col">Nama Teknisi</th>
              <th scope="col">Alamat</th>
              <th scope="col">Status Pesanan</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $conn = koneksi();
            $query = mysqli_query($conn, "SELECT * FROM pesan WHERE id_technician='$idTech' AND status='Selesai' OR status='Ditolak'");
            if (mysqli_num_rows($query) == 0) {
            ?>
              <p>Tidak ada pesanan</p>
            <?php } else {
              $x = 1;
            ?>
              <?php foreach ($query as $d) {
                $id = $d['id_user'];
                $q = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
                $data = mysqli_fetch_assoc($q);
              ?>
                <tr>
                  <th scope="row"><?= $d['id']; ?></th>
                  <td><?= $data['nama']; ?></td>
                  <td><?= $data['alamat']; ?></td>
                  <td><?= $d['status']; ?></td>
                  <td>
                    <?php if ($d['status'] == 'Menunggu Konfirmasi') { ?>
                      <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $d['id']; ?>">
                        <input type="submit" name="Terima" value="Terima" class="btn btn-success">
                        <input type="submit" name="Tolak" value="Tolak" class="btn btn-danger">
                      </form>
                    <?php } ?>
                  </td>
                </tr>
            <?php }
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
  </script>
</body>

</html>