<?php
session_start();

include "function.php";

if (isset($_SESSION['teknisiLogin'])) {
  header("Location: profile_teknisi.php");
  exit;
}

if (isset($_POST['teknisiLogin'])) {
  $teknisiLogin = teknisiLogin($_POST);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Hello, world!</title>

</head>

<body>

    <!--Batas TOP NAV-->
    <nav class="top navbar navbar-light fixed-top">
    <a class="navbar-brand" href="#">
      <img class="logo_navbar" src="gambar\logo.png" alt=""> FindTechnician </a>
</nav><br><br>
    <!--Batas TOP NAV-->


    <div class="isi_body">
        <div class="container">
            <form action="" method="POST" style="margin-left: 350px; margin-right: 350px; margin-top:50px;">
                <div class="shadow p-3 mb-5 bg-white rounded">
                    <h2 align="center">Login Teknisi </h2><br>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" autofocus autocomplete="on">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" autocomplete="on">
                    </div>
                    <div class="form-group text-center" >
                        <button class="btn btn-primary" name="teknisiLogin">Login</button><br>
                        <label>Belum punya akun ?</label><a href="regist_user.php"> Klik disini.</a> 
                    </div>
                    <div class="login_sebagai text-center">
                        <a href="login.php">Login sebagai User</a> /
                        <a href="login_admin.php">Login sebagai Admin</a>
                    </div>

                    <div class="form-group">
                        <?php if (isset($login['error'])) : ?>
                        <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
                        <?php endif; ?>
                    </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>