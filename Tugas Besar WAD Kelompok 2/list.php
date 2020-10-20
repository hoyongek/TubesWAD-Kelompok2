<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

        <title>
                 Home Website Find Technician!
        </title>

        <style>
          /* nav */
           .mynav a{
              margin-right: 10px;
            }

            .mynav a:hover {
                border-bottom: 2px solid #257CE5;
            }

            .active a {
                border-bottom: 2px solid #257CE5;
            }


          /* Featurettes */
            .featurette-divider {
                margin: 5rem 0;
            }

            .featurette-heading {
                font-weight: 300;
                line-height: 1;
                letter-spacing: -.05rem;
            }

            body {
              margin-top: 90px;
              margin-left: 30px;
              margin-right: 30px;
            }

        </style>
    </head>

    <body>
      <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
      <a class="navbar-brand" href="#">
        <img src="gambar\logo.png" style="width: 50px; height: 50px;"> Find Technician
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mynav" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="list.php">List Teknisi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          </ul>
          <input type=button onClick="location.href='login_user.php'" class="btn btn-outline-success mr-3" value='Login'>
          <input type=button onClick="location.href='regis_user.php'" class="btn btn-outline-danger" value='Register'>
      </div>
    </nav><br><br>


    <!-- Featurettes -->
    <div class="row featurette">
      <div class="col-md-7" style="padding-left: 30px;padding-top: 50px;">
        <h2 class="featurette-heading">Teknisi <span class="text-muted"> Jaringan.</span></h2>
        <p class="lead">Teknisi ini mampu menentukan desain yang sesuai untuk jaringan komputer tertentu, mengumpulkan perangkat keras dan perangkat lunak yang diperlukan untuk sistem, menginstal masing-masing komponen dan memastikan semua bagian jaringan yang kompatibel dengan satu sama lain.</p>
      </div>
      <div class="col-md-5">
        <img src="gambar\1.jpg" class="d-block w-100" alt="...">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Teknisi <span class="text-muted"> Komputer.</span></h2>
        <p class="lead">Teknisi ini mengkhususkan diri dalam perbaikan pemeliharaan instalasi, dan peralatan komputer.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="gambar\2.jpg" class="d-block w-100" alt="...">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Teknisi <span class="text-muted"> Listrik.</span></h2>
        <p class="lead">Teknisi ini dapat memperbaiki masalah kelistrikan dari mesin produksi atau peralatan lainnya yang ada demi kelancaran operasional perusahaan.</p>
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


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>