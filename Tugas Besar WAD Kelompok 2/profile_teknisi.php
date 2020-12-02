<?php

include "function.php";

session_start();

if (!isset($_SESSION['teknisiLogin'])) {
  header("Location: login.php");
  exit;
}

if (isset($_POST['update'])) {
  if ($_POST['password'] === $_POST['pw']) {
    if (editTeknisi($_POST) > 0) {
      echo "<script>alert('Data has been changed!')
            document.location.href = 'profile_teknisi.php'</script";
    }
  } else {
    echo "<script>alert('Password not match!')
         document.location.href = 'profile_teknisi.php'</script";
  }
}

if (isset($_POST['updateGambar'])) {
  if (!empty($_FILES['gambar'])) {
    uploadGambar();
  } else {
    echo "<script>alert('Choose an image first!')
          document.location.href = 'profile_teknisi.php'</script";
  }
}

$id = $_SESSION['id'];
$query = "SELECT * FROM technician WHERE id = $id";
$conn = koneksi();
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
$dataExpertise = explode(',', $data['skills']);

$gambar = "noprofile.jpg";
if (!empty($data['gambar'])) {
  $gambar = $data['gambar'];
}
?>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    .profile {
        background-repeat: no-repeat;
        background-size: cover;
        width: 200px;
        height: 200px;
    }
    </style>
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
        <h1 style="text-align: center;" class="display-4">My Profile</h1><br>
        <div class="container">
            <div class="shadow bg-white rounded">
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-img">
                            <img class="rounded profile" src="gambar/user/<?= $gambar; ?>">
                        </div>
                    </div>
                    <div class=" col-md-2">
                        <div class="profile-head">
                            <h4>
                                <?= $data['nama']; ?>
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
                                    <form action="" method="POST">
                                        <div class="modal-header">
                                            <div class="form-group">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" readonly
                                                    value="<?= $data['email']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name" name="nama"
                                                    value="<?= $data['nama']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control" placeholder="No HP"
                                                    name="no_hp" value="<?= $data['no_hp']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="alamat" rows="3"
                                                    placeholder="Alamat Anda"
                                                    required><?= $data['alamat']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="password" class="form-control"
                                                            placeholder="Password" name="password"
                                                            value="<?= $data['password']; ?>" required>
                                                    </div>
                                                    <div class="col">
                                                        <input type="password" class="form-control"
                                                            placeholder="Tulis Ulang Password Anda" name="pw"
                                                            value="<?= $data['password']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Expertise</label><br>
                                                <input type="checkbox" name="expertise[]" value="Computer"
                                                    <?php if (in_array("Computer", $dataExpertise)) echo "checked"; ?>>
                                                <label for="vehicle1">Computer</label>
                                                <input type="checkbox" name="expertise[]" value="AC"
                                                    <?php if (in_array("AC", $dataExpertise)) echo "checked"; ?>>
                                                <label for="vehicle2">AC</label>
                                                <input type="checkbox" name="expertise[]" value="Network"
                                                    <?php if (in_array("Network", $dataExpertise)) echo "checked"; ?>>
                                                <label for="vehicle3">Network</label>
                                                <input type="checkbox" name="expertise[]" value="Electric"
                                                    <?php if (in_array("Electric", $dataExpertise)) echo "checked"; ?>>
                                                <label for="vehicle3">Electric</label>
                                                <input type="checkbox" name="expertise[]" value="TV"
                                                    <?php if (in_array("TV", $dataExpertise)) echo "checked"; ?>>
                                                <label for="vehicle3">TV</label>
                                                <input type="checkbox" name="expertise[]" value="Refrigerator"
                                                    <?php if (in_array("Refrigerator", $dataExpertise)) echo "checked"; ?>>
                                                <label for="vehicle3">Refrigerator</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="form-group">
                                                <button type="submit" name="cancel" class="btn btn-danger"
                                                    data-dismiss="modal">Cancel</button>
                                                <input type="hidden" name="id" value="<?= $_SESSION['id']; ?>">
                                                <input type="submit" name="update" class="btn btn-primary"
                                                    value="Update">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="profile-edit-btn" data-toggle="modal" data-target=".modal2"
                            id="modal">Change Photo</button>
                        <div class="modal fade modal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="padding:20px;">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="modal-header">
                                            <div class="form-group">
                                                <label>Upload Photo</label>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="hidden" name="gambarLama" value="<?= $data['gambar']; ?>">
                                                <input type="hidden" name="roles" value="<?= $data['roles']; ?>">
                                                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="gambar"
                                                        name="gambar" required>
                                                    <label class="custom-file-label"
                                                        for="gambar"><?= $data['gambar']; ?></label>
                                                </div>
                                                <script type="application/javascript">
                                                $('input[type="file"]').change(function(e) {
                                                    var fileName = e.target.files[0].name;
                                                    $('.custom-file-label').html(fileName);
                                                });
                                                </script>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="form-group">
                                                <button type="submit" name="cancel" class="btn btn-danger"
                                                    data-dismiss="modal">Cancel</button>
                                                <input type="hidden" name="id" value="<?= $_SESSION['id']; ?>">
                                                <input type="submit" name="updateGambar" class="btn btn-primary"
                                                    value="Update">
                                            </div>
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
                                    <p><?= $data['nama']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $data['email']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $data['no_hp']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Alamat</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $data['alamat']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Expertise</label>
                                </div>
                                <div class="col-md-6">
                                    <p><?= $data['expertise']; ?></p>
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