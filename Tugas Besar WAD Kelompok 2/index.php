<?php
include 'function.php';

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
            <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                My Account
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="profile_user.php">Profile User</a>
                <a class="dropdown-item" href="#">My Booking (User)</a>
                <a class="dropdown-item" href="#">My Order (Teknisi)</a>
                <a class="dropdown-item" href="regist_user.php">Register</a>
                <a class="dropdown-item" href="login.php">Login</a>
                <a class="dropdown-item" href="logout.php">Log Out</a>
                <a class="dropdown-item" href="admin.php">Admin</a>
            </div>
        </div>
    </div>
    <!--Batas TOP NAV-->

    <div class="isi_body">

        <h1 style="text-align: center;" class="display-4">Wellcome !</h1>

        <div class="container " style="margin-top: 20px;">

            <div class="row">

                <div class="col-sm-4 1">
                    <!--Membuat Card-->
                    <div class="card index">
                        <img src="gambar\1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">
                                <h2> Networking </h2> <br>
                                <h4 style="color: darkcyan;"> $20/Day </h4>
                                <hr>
                                <form action="list_teknisi.php" method="GET">
                                    <label for="deskripsi" class="deskripsi_teknisi_index">Memperbaiki segala jenis
                                        kerusakan
                                        jaringan, mulai dari internet down,
                                        kabel putus, penarikan kabel.</label>
                                    <hr>
                                    <button type="submit" value="1" name="submit" class="btn btn-primary container-fluid">Pesan
                                        Sekarang</button>
                            </p>
                            </form>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 2">
                    <!--Membuat Card-->
                    <div class="card index">
                        <img src="gambar\2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">
                                <h2> Komputer </h2> <br>
                                <h4 style="color: darkcyan;"> $15/Day </h4>
                                <hr>
                                <form action="list_teknisi.php" method="GET">
                                    <label for="deskripsi" class="deskripsi_teknisi_index">Memperbaiki segala jenis
                                        kerusakan komputer, mulai dari hardware
                                        hingga software</label>
                                    <hr>
                                    <button type="submit" value="2" name="submit" class="btn btn-primary container-fluid">Pesan Sekarang</button>
                                </form>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 3">
                    <!--Membuat Card-->
                    <div class="card index">
                        <img src="gambar\3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">
                                <h2> Listrik</h2> <br>
                                <h4 style="color: darkcyan;"> $10/Day</h4>

                                <hr>

                                <form action="list_teknisi.php" method="GET">
                                    <label for="deskripsi" class="deskripsi_teknisi_index">Memperbaiki berbagai kerusakan
                                        listrik, mulai dari listrik putus,
                                        konsletting, sampai pemasangan jalur listrik di dalam rumah.</label>
                                    <hr>
                                    <button type="submit" value="3" name="submit" class="btn btn-primary container-fluid">Pesan Sekarang
                                    </button>
                                </form>
                            </p>
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