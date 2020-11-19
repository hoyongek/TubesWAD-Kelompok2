<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">


    <title>
        Home Website Find Technician!
    </title>
    <style>
        .checked{
        color: orange;
    }
    </style>
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
            <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
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

        <h1 style="text-align: center;" class="display-4">Profile Teknisi</h1><br><br>

        <div class="container">
            <div class="form-row">
            <div class="form-group col-md-4">
                <img src="gambar/foto_profile_teknisi/foto_profile_teknisi_list (13).png" class="d-block w-100" alt="...">
                <br>
                <input type="button" onclick="location.href='list_teknisi.php'" name="submit" class="btn bg-danger btn-lg" value="Kembali">
                <input type="button" onclick="location.href='book_now.php'" name="submit" class="btn bg-primary btn-lg" value="Book Now">
                
            </div>
            <div class="col-md-1">
                <p>   </p>
            </div>
            <div class="col-md-3">
                <h4>Profile</h4><br>
                  <p class="card-title">Nama : Hari Ardiyo</p>
                  <p class="card-title">No. Telepon : 0812343483953</p>
                  <p class="card-title">Rating : Bintang 5</p>
                  <p class="card-title">Teknisi : Kelistrikan</p>
                </div>
                <div class="col-md-1">
                <p>   </p>
            </div>
            <div class="col-md-3">
                <h4>Deskripsi</h4><br>
                <p>Saya sudah 20 tahun menjadi teknisi dibidang kelistrikan. Sudah memperbaii banyak kerusakan di banyak rumah. Bisa memperbaiki segala kerusakan yang berbau dengan kelistrikan. Semoga selalu puas dengan hasil kerja saya.</p>
            </div>
        </div>

        <hr color="blue" width="100%" size="10" noshade align="right">
        
            <h4>Ulasan dari User Lain</h4><br>
            <img class="bd-placeholder-img rounded-circle" width="50" height="50" src="gambar/noprofile.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span><br>
            <p>Mantap rumah saya jadi bisa lagi lampu tamannya. Seveng banget dehh.. Bapaknya juga ramah bangett &hearts; </p><br>
        
            
            <img class="bd-placeholder-img rounded-circle" width="50" height="50" src="gambar/ava1.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span><br>
            <p>Bapaknya ramah bangett &#128522; </p><br>

            
            <img class="bd-placeholder-img rounded-circle" width="50" height="50" src="gambar/ava2.jfif" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span><br>
            <p>Rekomen banget pokonyaa &smile; </p>

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