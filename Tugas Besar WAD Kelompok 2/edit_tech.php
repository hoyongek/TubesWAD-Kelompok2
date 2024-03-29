<?php
session_start();
if (!isset($_SESSION['adminLogin'])) {
  header("Location: login_admin.php");
  exit;
}

// include database connection file
include("function.php");
$conn = koneksi();

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
  $id = $_POST['id'];

  $email = $_POST['email'];
  $password = $_POST['password'];

  // update user data
  $result = mysqli_query($conn, "UPDATE technician SET email='$email', password='$password' WHERE id=$id");

  // Redirect to homepage to display updated user in list
  if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
					alert('Data berhasil dirubah');
					document.location.href = 'admin.php';
          </script>";
  }
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM technician WHERE id=$id");
$data = mysqli_fetch_assoc($result);
$email = $data['email'];
$password = $data['password'];
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


    </style>
</head>

<body>

    <!--Batas TOP NAV-->
    <div class="top container-fluid fixed-top ">
        <a class="navbar-brand" href="#">
            <img class="logo_navbar" src="gambar\logo.png" alt=""> FindTechnician </a>


        <div class="dropdown">
            <h5 class="halo">Halo, <?= $_SESSION['nama']; ?></h5>
            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                My Account
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="admin.php">Admin</a>
                <a class="dropdown-item" href="logout.php">Log Out</a>

            </div>
        </div>
    </div>
    <!--Batas TOP NAV-->

    <div class="isi_body">

        <h1 style="text-align: center;" class="display-4"> Edit Data User</h1>

        <div class="container">
            <br>

            <form method="post" action="" style=" margin-left: 350px; margin-right: 350px;">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value=<?php echo $email; ?>>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" value=<?php echo $password; ?>>
                </div>

                <div class="form-group">
                    <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                </div>

                <button type="Submit" class="btn btn-primary" name="update" value="Update">Submit</button>
            </form>
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