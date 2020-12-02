<?php
session_start();

include 'function.php';

if (isset($_SESSION['adminLogin'])) {
    header("Location: admin.php");
    exit;
}

if (isset($_POST['adminLogin'])) {
    $adminLogin = adminLogin($_POST);
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
    <div class="top container-fluid fixed-top ">
        <img class="logo_navbar" src="gambar\logo.png">
        <a href="index.php">Home</a>
        <a href="list_teknisi.php">List Teknisi</a>
        <a href="aboutUs.php">About Us</a>
        <a href="contact.php">Contact</a>

        <div class="dropdown">
            <h5 class="halo">Halo, <?= $_SESSION['nama']; ?></h5>
            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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


        <div class="container">

            <form action="" method="POST" style="margin-left: 350px; margin-right: 350px; margin-top:50px;">
                <div class="shadow p-3 mb-5 bg-white rounded">
                    <h2 align="center">Login Admin </h2><br>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" autofocus autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group" style="margin-left:0px;">
                        <button type="submit" name="adminLogin" class="btn btn-primary">Login</button>
                        <a button type="submit" name="registrasi" class="btn btn-primary"
                            href="regist_user.php">Registrasi</button></a>
                        <label>Belum Punya Akun ?</label>
                    </div>
                    <div class="login_sebagai">
                        <a href="login.php">Halaman Login User</a> /
                        <a href="login_teknisi.php">Halaman Login Teknisi</a>
                    </div>

                    <div class="form-group">
                        <?php if (isset($adminLogin['error'])) : ?>
                        <p style="color: red; font-style: italic;"><?= $adminLogin['pesan']; ?></p>
                        <?php endif; ?>
                    </div>
            </form>
        </div>
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