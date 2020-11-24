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

        <h1 style="text-align: center;" class="display-4">Profile User</h1><br>

        <div class="container">
            <div class="shadow bg-white rounded">

                <form method="post">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="profile-img">
                                <img class="rounded"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog"
                                    alt="" />
                            </div>
                        </div>



                        <div class="col-md-2">
                            <div class="profile-head">
                                <h4>
                                    Hari Ardityo
                                </h4>
                                <h5>
                                    Teknisi Listrik
                                </h5>
                                <p class="proile-rating">Rating Aplikasi : <span>8/10</span></p>
                                <p class="proile-rating">Tanggal Daftar: <span>8/10</span></p>

                            </div>
                        </div>

                        <div class="col-md-5 profile_user_statistik">
                            <div class="p-2 mt-4 bg-primary d-flex justify-content-between rounded text-white stats">
                                <div class="d-flex flex-column"> <span class="tugas_selesai">Pesanan Selesai</span>
                                    <span class="number1">38</span>
                                </div>

                                <div class="d-flex flex-column"> <span class="followers">Jumlah Feedback</span> <span
                                        class="number2">980</span> </div>
                                <div class="d-flex flex-column"> <span class="rating">Pesanan Di Cancel</span>
                                    <span class="number3">8.9</span>
                                </div>
                            </div>

                            <div class="p-2 mt-4 bg-primary d-flex justify-content-between rounded text-white stats">
                                <div class="d-flex flex-column"> <span class="tugas_selesai">Points</span>
                                    <span class="number1">1000</span>
                                </div>

                                <div class="d-flex flex-column"> <span class="followers">Followers</span> <span
                                        class="number2">980</span> </div>
                                <div class="d-flex flex-column"> <span class="rating">Following</span> <span
                                        class="number3">8.9</span> </div>
                            </div>

                        </div>



                        <div class="col-md-2">
                            <!--Modal-->
                            <button type="button" class="profile-edit-btn" data-toggle="modal"
                                data-target=".bd-example-modal-lg" id="modal">Edit Profile</button>


                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="padding:20px;">

                                        <form>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="email@User.com"
                                                    name="email" readonly>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name" name="nama">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="No HP"
                                                    name="phone">
                                            </div>

                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                    placeholder="Alamat Anda"></textarea>
                                            </div>


                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="password" class="form-control"
                                                            placeholder="Password" name="password">
                                                    </div>
                                                    <div class="col">
                                                        <input type="password" class="form-control"
                                                            placeholder="Tulis Ulang Password Anda" name="pw">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Upload
                                                        Photo</label>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <button type="submit" name="cancel"
                                                    class="btn btn-danger">Cancel</button>
                                                <button type="submit" name="update"
                                                    class="btn btn-primary">Update</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Modal-->


                        </div>
                    </div>


                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">History</a>
                        </li>
                    </ul>

                    <div class="col-md-12">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Nama_user</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Email@user.com</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>123 456 7890</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Alamat</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Jln. alamat User Kecamatan User. Pos 129388932. Banteng. Indonesia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Experience</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Expert</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Hourly Rate</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>10$/hr</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Total Projects</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>230</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>English Level</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Expert</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Availability</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>6 months</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br />
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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