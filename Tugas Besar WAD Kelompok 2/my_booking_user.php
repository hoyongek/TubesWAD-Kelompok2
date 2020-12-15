<?php
session_start();
if (!isset($_SESSION['userLogin'])) {
  header("Location: login.php");
  exit;
}

require 'function.php';
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
        <a class="dropdown-item" href="my_booking_user.php">My Booking (User)</a>
        <a class="dropdown-item" href="my_order_teknisi.php">My Order (Teknisi)</a>
        <a class="dropdown-item" href="regist_user.php">Register</a>
        <a class="dropdown-item" href="login.php">Login</a>
        <a class="dropdown-item" href="logout.php">Log Out</a>
        <a class="dropdown-item" href="admin.php">Admin</a>
      </div>
    </div>
  </div>
  <!--Batas TOP NAV-->

  <div class="isi_body">

    <h1 style="text-align: center;" class="display-4">My Booking User</h1><br>

    <div class="container">
      <div class="shadow-sm p-3 mb-5 bg-white rounded">
        <div class="sm-12" style="background: white; padding-left:10px;">
          <h5>Transaksi Saat Ini</h5>
        </div>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Booking ID</th>
              <th scope="col">Nama Teknisi</th>
              <th scope="col">Harga /Jam</th>
              <th scope="col">Status Pesanan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".modal-update-status" id="modal">Update Status</button>

                <button type="button" class="btn btn-danger">Cancel</button>

                <!--Modal-->
                <div class="modal fade modal-update-status" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="padding:20px;">
                      <form action="" method="POST" enctype="multipart/form-data">

                        <h5> Status Pesanan </h5>
                        <select class="custom-select">
                          <option selected> Status Anda</option>
                          <option value="1">Pesanan Diajukan</option>
                          <option value="2">Pesanan Diterima Teknisi</option>
                          <option value="3">Teknisi Sedang Dalam Perjalanan </option>
                          <option value="3">Pesanan Selesai </option>
                        </select>

                        <div class="modal-footer">
                          <div class="form-group">
                            <button type="submit" name="cancel" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <input type="submit" name="updateGambar" class="btn btn-primary" value="Update">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!--Modal-->
              </td>
            </tr>
          </tbody>
        </table>
      </div>


      <div class="shadow-sm p-3 mb-5 bg-white rounded">

        <div class="sm-12" style="background: white; padding-left:10px;">
          <h5>Transaksi Selesai</h5>
        </div>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Booking ID</th>
              <th scope="col">Nama Teknisi</th>
              <th scope="col">Harga /Jam</th>
              <th scope="col">Status Pesanan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".modal-review" id="modal">Berikan Ulasan</button>

                <!--Modal-->
                <div class="modal fade modal-review" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="padding:20px;">
                      <form action="" method="POST" enctype="multipart/form-data">

                        <h5> Berikan Review </h5>
                        <div class="form-group">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <select class="custom-select">
                          <option selected> Rating Dari Anda</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>

                        <div class="modal-footer">
                          <div class="form-group">
                            <button type="submit" name="cancel" class="btn btn-danger" data-dismiss="modal">Submit</button>
                            <input type="submit" name="updateGambar" class="btn btn-primary" value="Update">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!--Modal-->
              </td>
            </tr>
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