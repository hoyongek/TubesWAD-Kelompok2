<?php

include "function.php";

session_start();

if (!isset($_SESSION['userLogin'])) {
  header("Location: login_user.php");
  exit;
}

if (isset($_POST['update'])) {
  if ($_POST['password'] === $_POST['pw']) {
    if (editTeknisi($_POST) > 0) {
      echo "<script>alert('Data has been changed!')
        document.location.href = 'profile_teknisi.php'</script";
    }
  } else {
    echo "<script>alert('Password not match!')
        document.location.href = 'profile_teknisi.php'</script";
  }
}

if (isset($_POST['lapor'])) {
  if ($_POST['laporan'] == null) {
    $id = $_GET['id'];
    echo "<script>alert('Isi laporan kosong!')
        document.location.href = 'profile_teknisi_dimata_user.php?id=$id'</script>";
  } else {
    lapor($_POST);
  }
}

$id = $_GET['id'];
$query = "SELECT * FROM technician WHERE id = $id";
$conn = koneksi();
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
$dataExpertise = explode(',', $data['expertise']);

$gambar = "noprofile.jpg";
if (!empty($data['gambar'])) {
  $gambar = $data['gambar'];
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
  <style>
    .profile {
      background-repeat: no-repeat;
      background-size: cover;
      width: 200px;
      height: 200px;
    }
  </style>
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
    <h1 style="text-align: center;" class="display-4">Profile Teknisi</h1><br>
    <div class="container">
      <div class="shadow p-5 bg-white rounded">
        <div class="row">
          <div class="col-md-3">
            <div class="profile-img">
              <img class="rounded profile" src="gambar/user/<?= $gambar; ?>">
            </div>
          </div>
          <div class=" col-md-2" style="margin-top:60px;">
            <div class="profile-head">
              <h4>
                <?= $data['nama']; ?>
              </h4>
              <h6>
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
                Rating : <?php echo number_format($x, 1) ?>
              </h6>

            </div>
          </div>
          <div class="col-md-5 profile_user_statistik" style="margin-top:60px;">
            <div class="p-2 mt-4 bg-primary d-flex justify-content-between rounded text-white stats">
              <div class="d-flex flex-column"> <span class="tugas_selesai">Pesanan Selesai</span>
                <span class="number1">
                  <?php
                  $query = mysqli_query($conn, "SELECT * FROM pesan WHERE id_technician='$id' AND status='Selesai'");
                  $total = mysqli_num_rows($query);
                  ?>
                  <?= $total; ?>
                </span>
              </div>
              <div class="d-flex flex-column"> <span class="followers">Jumlah Feedback</span>
                <span class="number2">
                  <?php
                  $query = mysqli_query($conn, "SELECT * FROM pesan WHERE id_technician='$id' AND status='Selesai' AND review!='null'");
                  $total = mysqli_num_rows($query);
                  ?>
                  <?= $total; ?>
                </span>
              </div>
              <div class="d-flex flex-column"> <span class="rating">Pesanan Di Cancel</span>
                <span class="number3">
                  <?php
                  $query = mysqli_query($conn, "SELECT * FROM pesan WHERE id_technician='$id' AND status='Ditolak'");
                  $total = mysqli_num_rows($query);
                  ?>
                  <?= $total; ?>
                </span>
              </div>
            </div>


          </div>

          <div class="col-md-2" style="margin-top:60px;">
            <button type=" button" class="profile-edit-btn ">Follow</button><br>
            <!--Modal-->
            <button type="button" class="profile-edit-btn" data-toggle="modal" data-target=".modal2" id="modal">Report</button>
            <div class="modal fade modal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content" style="padding:20px;">
                  <div class="form-group">
                    <label>Berikan Pelaporan Anda</label>
                  </div>
                  <form action="" method="POST">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="laporan"></textarea>
                    <div class="modal-footer">
                      <div class="form-group">
                        <button type="submit" name="cancel" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <input type="hidden" name="id_user" value="<?= $_SESSION['id']; ?>">
                        <input type="hidden" name="id_tech" value="<?= $id; ?>">
                        <input type="submit" name="lapor" class="btn btn-primary" value="Laporkan">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!--Modal-->

          </div>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Review</a>
          </li>
        </ul>

        <div class="col-md-12">
          <div class="tab-content profile-tab" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                <div class="col-md-6">
                  <label>Name</label>
                </div>
                <div class="col-md-6">
                  <p>
                    <?= $data['nama']; ?>
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Email</label>
                </div>
                <div class="col-md-6">
                  <p>
                    <?= $data['email']; ?>
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Phone</label>
                </div>
                <div class="col-md-6">
                  <p>
                    <?= $data['no_hp']; ?>
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Alamat</label>
                </div>
                <div class="col-md-6">
                  <p>
                    <?= $data['alamat']; ?>
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Expertise</label>
                </div>
                <div class="col-md-6">
                  <p>
                    <?= $data['expertise']; ?>
                  </p>
                </div>
              </div>
            </div>


            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <!--Review-->
              <?php
              $idT = $data['id'];
              $q = "SELECT * FROM pesan WHERE id_technician='$idT' AND review != 'null'";
              $review = mysqli_query($conn, $q);
              if (mysqli_num_rows($review) == 0) {
              ?>
                <p style="text-align: center;">Tidak mempunyai review</p>
              <?php }
              foreach ($review as $r) {
                $idU = $r['id_user'];
                $user = "SELECT * FROM user WHERE id='$idU'";
                $nama = mysqli_query($conn, $user);
                $u = mysqli_fetch_assoc($nama);
                $gambar = "noprofile.jpg";
                if (!empty($u['gambar'])) {
                  $gambar = $u['gambar'];
                }
              ?>
                <div class="shadow p-3 mb-5 bg-white rounded">
                  <div class="row" style="background: white; padding-left:10px;">
                    <div class="col-sm-1">
                      <img src="gambar/user/<?= $gambar; ?>" alt="" class="rounded-circle" width="75" height="75">
                    </div>
                    <div class="col-sm-3">
                      <h4><?= $u['nama']; ?></h4> <span> Rating : <?= $r['rating']; ?> </span>
                    </div>
                    <div class="col-sm-8">
                      <p><?= $r['review']; ?></p>
                    </div>
                  </div>
                </div>
              <?php } ?>
              <!--Review-->
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