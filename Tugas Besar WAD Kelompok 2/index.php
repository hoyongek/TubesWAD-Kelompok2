<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>
                 Home Website Find Technician!
        </title>

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
               float:right;
               margin-top: 20px;
               
           }

           body {
                background-color: #F8F9F9;
           }

           .container {
               margin-top: 20px;
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
                <input id="button" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                <a href="regist_user.php" button type="button" class="btn btn-info">Register</button></a>
                <a href="login.php" button type="button" class="btn btn-danger">Login</button></a>
              </form>
        </div>
       <!--Batas TOP NAV-->

        <h1 style="text-align: center;" class="display-4">Wellcome !</h1>

        <div class="container" style="margin-top: 20px;">

            <div class="row">
    
                <div class="col-sm-4 1">
                    <!--Membuat Card-->
                    <div class="card" style="width: 18rem;">
                        <img src="gambar\1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text" > <h2> Networking </h2> <br> <h4 style="color: darkcyan;"> $20/Day </h4><hr>
                            
                            <form action="booking.php" method="GET">
      
                                <label for="name">Deskripsi Teknisi</label><hr>
    
                                <button type="submit" value="1" name="submit" class="btn btn-primary">Pesan Sekarang </button>  
                                  </p>
                              </form>
                              </p>
                        </div>
                      </div>
                </div>
    
    
                <div class="col-sm-4 2">
                    <!--Membuat Card-->
                    <div class="card" style="width: 18rem;">
                        <img src="gambar\2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text" > <h2> Komputer </h2> <br> <h4 style="color: darkcyan;"> $15/Day </h4><hr>
                            
                          <form action="booking.php" method="GET">
      
                         <label for="name">Deskripsi Teknisi</label><hr>
    
                           <button type="submit" value="2" name="submit" class="btn btn-primary">Pesan langsung</button>
                            </form>
                            </p>  
                        </div>
                      </div>
                </div>
    
                <div class="col-sm-4 3">
                    <!--Membuat Card-->
                    <div class="card" style="width: 18rem;">
                        <img src="gambar\3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text" > <h2> Listrik</h2> <br> <h4 style="color: darkcyan;"> $10/Day</h4><hr>
                       
                          <form action="booking.php" method="GET">
      
                          <label for="name">Deskripsi Teknisi</label><hr>
    
                           <button type="submit" value="3" name="submit" class="btn btn-primary">Pesan Sekarang </button>
                            </form>
                            </p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    
        


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>