<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'function.php';
if (isset($_POST['login'])) {
  $login = login($_POST);
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Hello, world!</title>

  <style>
    .top {
      background-color: white;
      margin-bottom: 10px;
    }

    .top a {
      padding-left: 20px;
      font-size: larger;
    }

    .search {
      float: right;
      margin-top: 20px;
    }

    body {
      background-color: #F8F9F9;
    }

    .container {
      margin-top: 20px;
    }

    a {
      color: dodgerblue;
    }

    .active a {
      border-bottom: 2px solid #257CE5;
    }

    .mynav a:hover {
      border-bottom: 2px solid #257CE5;
    }

    .btn {
      margin-left: 10px;
    }
  </style>



</head>

<body>

  <!--Batas TOP NAV-->
  <div class="top container-fluid">
    <img src="gambar\logo.png" style="width: 75px; height: 75px;">
    <a href="index.php">Home</a>
    <a href="profile.php">Profile</a>
    <a href="list_teknisi.php">List Teknisi</a>
    <a href="aboutUs.php">About Us</a>
    <a href="contact.php">Contact</a>

    <form class="search form-inline">
      <a href="regist_user.php" button type="button" class="btn btn-info">Register</button></a>
      <a href="login.php" button type="button" class="btn btn-danger">Login</button></a>
    </form>
  </div>
  <!--Batas TOP NAV-->


  <div class="container">
    <form action="" method="POST" style="margin-left: 350px; margin-right: 350px; margin-top:50px;">
      <h2 align="center">Login </h2><br>
      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" name="username" class="form-control" autofocus autocomplete="off" required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" autocomplete="off" required>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Ingat Saya </label>
      </div>
      <div class="form-group">
        <button type="submit" name="login" class="btn btn-primary">Login</button>
      </div>
      <div class="form-group">
        <?php if (isset($login['error'])) : ?>
          <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
        <?php endif; ?>
      </div>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>