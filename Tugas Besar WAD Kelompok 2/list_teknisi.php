<?php
include "function.php";
$query = "SELECT * FROM technician";
$conn = koneksi();
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
$dataExpertise = explode(',', $data['expertise']);

session_start();
if (!isset($_SESSION['userLogin'])) {
  header("Location: login.php");
  exit;
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
    <div class="container">
      <div class="row">
        <?php foreach ($result as $d) { ?>
          <div class="col-6 list_teknisi">
            <div class="shadow bg-white rounded">
              <div class="card list_teknisi">
                <div class="d-flex align-items-center">
                  <div class="image"> <img src="gambar/foto_profile_teknisi/foto_profile_teknisi_list (1).png" class="rounded" width="200"> </div>
                  <div class="ml-3 w-100">
                    <h4 class="mb-0 mt-0"><?= $d['nama']; ?></h4> <span><?= $d['expertise']; ?></span>
                    <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                      <div class="d-flex flex-column">
                        <span class="tugas_selesai">Tugas Selesai</span>
                        <span class="number1">
                          <?php
                          $idTech = $d['id'];
                          $query = mysqli_query($conn, "SELECT * FROM pesan WHERE id_technician='$idTech' AND status='Selesai'");
                          $total = mysqli_num_rows($query);
                          ?>
                          <?= $total; ?>
                        </span>
                      </div>
                      <div class="d-flex flex-column">
                        <span class="followers">Followers</span>
                        <span class="number2">980</span></div>
                      <div class="d-flex flex-column">
                        <span class="rating">Rating</span>
                        <span class="number3">
                          <?php
                          $idTech = $d['id'];
                          $query = mysqli_query($conn, "SELECT * FROM pesan WHERE id_technician='$idTech' AND rating!='null'");
                          $dev = mysqli_num_rows($query);
                          $result = mysqli_fetch_assoc($query);
                          $x = 0;
                          if ($dev != null) {
                            foreach ($query as $q) {
                              $x = $q['rating'] + $x;
                            }
                            $x = $x / $dev;
                          ?>
                          <?php
                          } ?>
                          <?= $x; ?>
                        </span>
                      </div>
                    </div>
                    <div class="button mt-2 d-flex flex-row align-items-center"> <button class="btn btn-sm btn-outline-success w-100" onclick="location.href='profile_teknisi_dimata_user.php?id=<?= $d['id']; ?>'">Profile</button>
                      <button class="btn btn-sm btn-primary w-100 ml-2" onclick="location.href='book_now.php?id=<?= $d['id']; ?>'">Book Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
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