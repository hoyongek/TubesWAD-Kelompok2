<?php
session_start();
if (!isset($_SESSION['userLogin'])) {
  header("Location: login.php");
  exit;
}

$id_user = $_SESSION['id'];

include 'function.php';
$id = $_GET['id'];
$query = "SELECT * FROM technician WHERE id = $id";
$conn = koneksi();
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
$dataExpertise = explode(',', $data['expertise']);

if (isset($_POST['Book'])) {
  pesan($_POST);
}
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
    <a href="index.php">Home</a>
    <a href="list_teknisi.php">List Teknisi</a>
    <a href="aboutUs.php">About Us</a>
    <a href="contact.php">Contact</a>

    <div class="dropdown">
      <h5 class="halo">Halo, <?= $_SESSION['nama']; ?></h5>
      <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        My Account
      </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="profile_user.php">Profile User</a>
        <a class="dropdown-item" href="my_booking_user.php">My Booking</a>
        <a class="dropdown-item" href="logout.php">Log Out</a>
      </div>
    </div>
  </div>
  <!--Batas TOP NAV-->

  <div class="isi_body">
    <h1 style="text-align: center;" class="display-4">Book Now</h1><br>
    <div class="container">
      <div class="shadow p-3 mb-5 bg-white rounded">
        <div class="row" style="margin-right:auto;margin-left:auto">
          <div class="col-3">
            <h5>Teknisi</h5><br>
            <?php
            $gambar = "noprofile.jpg";
            if (!empty($data['gambar'])) {
              $gambar = $data['gambar'];
            }
            ?>
            <img src="gambar/user/<?= $gambar; ?>" class="rounded" width="200">
          </div>

          <div class="col-3">
            <h5>Detail Teknisi</h5><br>
            <?php
            $idTech = $data['id'];
            $query = mysqli_query($conn, "SELECT * FROM pesan WHERE id_technician='$idTech' AND rating!='null'");
            $dev = mysqli_num_rows($query);
            $result = mysqli_fetch_assoc($query);
            $x = 0;
            if ($dev != null) {
              foreach ($query as $q) {
                $x = $q['rating'] + $x;
              }
              $x = $x / $dev;
            }
            ?>
            <p>
              Nama : <?= $data['nama']; ?><br>
              <hr>
              No Telfon : <?= $data['no_hp']; ?><br>
              <hr>
              Rating : <?php echo number_format($x, 1) ?><br>
              <hr>
              Kategori : <?= $data['expertise']; ?><br>
              <hr>
              Alamat Teknisi <?= $data['alamat']; ?>
            </p>
          </div>

          <div class="col-6">
            <h5>Masukkan Keluhan Anda</h5><br>
            <form action="" method="POST">
              <textarea class="form-control" name="deskripsi" rows="5"></textarea><br>

              <h5>Masukkan Harga</h5>
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Rp.</span>
                <input type="number" class="form-control" name="harga">
              </div>
          </div>

          <div class="btn" style="margin-left:800px;">
            <div class="row">
              <a href="list_teknisi.php" class="btn btn-danger">cancel</a>
              <input type="hidden" name="id_user" value="<?= $id_user; ?>">
              <input type="hidden" name="id_technician" value="<?= $data['id']; ?>">
              <input style="margin-left:5px;" type="submit" class="btn btn-primary" value="Book Now" name="Book">
              </form>
            </div>
          </div>
        </div>
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