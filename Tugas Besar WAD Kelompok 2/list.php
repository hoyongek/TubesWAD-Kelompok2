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

    <!-- Featurettes -->
    <div class="row featurette">
        <div class="col-md-7" style="padding-left: 30px;padding-top: 50px;">
            <h2 class="featurette-heading">Teknisi <span class="text-muted"> Jaringan.</span></h2>
            <p class="lead">Teknisi ini mampu menentukan desain yang sesuai untuk jaringan komputer tertentu,
                mengumpulkan perangkat keras dan perangkat lunak yang diperlukan untuk sistem, menginstal masing-masing
                komponen dan memastikan semua bagian jaringan yang kompatibel dengan satu sama lain.</p>
        </div>
        <div class="col-md-5">
            <img src="gambar\1.jpg" class="d-block w-100" alt="...">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Teknisi <span class="text-muted"> Komputer.</span></h2>
            <p class="lead">Teknisi ini mengkhususkan diri dalam perbaikan pemeliharaan instalasi, dan peralatan
                komputer.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="gambar\2.jpg" class="d-block w-100" alt="...">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Teknisi <span class="text-muted"> Listrik.</span></h2>
            <p class="lead">Teknisi ini dapat memperbaiki masalah kelistrikan dari mesin produksi atau peralatan lainnya
                yang ada demi kelancaran operasional perusahaan.</p>
        </div>
        <div class="col-md-5">
            <img src="gambar\3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- footer -->

    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2020 Find Technician &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>


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