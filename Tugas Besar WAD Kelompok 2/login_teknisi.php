<?php
session_start();

if (isset($_SESSION['teknisiLogin'])) {
    header("Location: index.php");
    exit;
}

require 'function.php';
if (isset($_POST['teknisiLogin'])) {
    $teknisiLogin = teknisiLogin($_POST);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Hello, world!</title>

</head>

<body>

    <!--Batas TOP NAV-->
    <div class="top container-fluid">
        <img class="logo_navbar" src="gambar\logo.png">
        <a href="index.php">Home</a>
        <a href="list_teknisi.php">List Teknisi</a>
        <a href="aboutUs.php">About Us</a>
        <a href="contact.php">Contact</a>

        <div class="dropdown">
            <h5 class="halo">Halo, Guest</h5>
            <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                My Account
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Booking</a>
                <a class="dropdown-item" href="regist_user.php">Register</a>
                <a class="dropdown-item" href="logout.php">Log Out</a>
            </div>
        </div>
    </div>
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
                    <div class="form-group" style="margin-left:0px;">
                        <button type="submit" name="teknisiLogin" class="btn btn-primary">Login</button>
                        <a button type="submit" name="registrasi" class="btn btn-primary" href="regist_user.php">Registrasi</button></a>
                        <label>Belum Punya Akun ?</label>
                    </div>
                    <div class="login_sebagai">
                        <a href="login.php">Halaman Login User</a> /
                        <a href="login_teknisi.php">Halaman Login Teknisi</a> /
                        <a href="login_admin.php">Halaman Login Admin</a> /
                    </div>

                    <div class="form-group">
                        <?php if (isset($login['error'])) : ?>
                            <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
                        <?php endif; ?>
                    </div>
            </form>
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