<?php
session_start();
if (!isset($_SESSION['adminLogin'])) {
  header("Location: login_admin.php");
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
    <h1 style="text-align: center;" class="display-4"> ADD DATA !</h1>
    <div class="container">
      <br>
      <form action="" method="post" style="margin-left: 350px; margin-right: 350px;">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="nama">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email">
        </div>

        <div class="form-group">
          <label for="Mobile">Mobile</label>
          <input type="text" class="form-control" name="no_hp">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="text" class="form-control" name="password">
        </div>

        <button type="Submit" class="btn btn-primary" name="Submit">Submit</button>
      </form>

      <?php
      // Check If form submitted, insert form data into users table.
      if (isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $password = $_POST['password'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO user (nama,email,no_hp,password) VALUES('$nama','$email','$no_hp','$password')");

        // Show message when user added
        header("Location: admin.php");
      }
      ?>
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