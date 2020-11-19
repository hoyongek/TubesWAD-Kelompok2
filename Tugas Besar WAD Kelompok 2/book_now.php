<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
            <h5 class="halo">Halo, Guest</h5>
            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                My Account
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Profile</a>
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

        <h1 style="text-align: center;" class="display-4">Book Now</h1><br>

        <div class="container">
            <div class="shadow p-3 mb-5 bg-white rounded">

                <div class="row" style="margin-right:auto;margin-left:auto">



                    <div class="col-3">
                        <h5>Teknisi</h5><br>

                        <img src="gambar/foto_profile_teknisi/foto_profile_teknisi_list (16).png" class="rounded">

                    </div>


                    <div class="col-3">
                        <h5>Deteil Teknisi</h5><br>

                        <p>
                            Nama : Hariyo Arditho <br>
                            <hr>
                            No Telfon : 02818998982 <br>
                            <hr>
                            Rating : Bintang 5 <br>
                            <hr>
                            Kategori : Kelistrikan <br>
                            <hr>


                        </p>

                    </div>



                    <div class="col-6">
                        <h5>Alamat Anda</h5><br>

                        <p>
                            Jln. Dr mansury baru 2 nomor 11, Kecamatan Tangerang SUnggal. Tangerang Utara. POS 120932.
                            Banten. Indonesia <br>
                            <hr>

                        </p>

                    </div>

                    <div class="btn" style="margin-left:800px">
                        <a href="list_teknisi.php" class="btn btn-danger">cancel</a>
                        <a href="my_booking_user.php" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
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