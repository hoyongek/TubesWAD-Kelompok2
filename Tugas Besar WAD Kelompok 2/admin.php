<?php
session_start();

include("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC");

if (!isset($_SESSION['adminLogin'])) {
  header("Location: login_admin.php");
  exit;
}
?>
<?php
include("config.php");

$result2 = mysqli_query($mysqli, "SELECT * FROM laporan ORDER BY id DESC");

if (!isset($_SESSION['adminLogin'])) {
  header("Location: login_admin.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Daftar User</title>
</head>

<body>

    <!--Batas TOP NAV-->
    <div class="top container-fluid fixed-top ">
        <img class="logo_navbar" src="gambar\logo.png">


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

        <div class="container" align="center">
            <h2 style="text-align: center; margin: 7px 7px 7px 7px;">Daftar User</h2><br>

            <table class="table">


                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <?php

        while ($user_data = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $user_data['nama'] . "</td>";
          echo "<td>" . $user_data['email'] . "</td>";
          echo "<td>" . $user_data['password'] . "</td>";
          echo "<td><a href='edit.php?id=$user_data[id]' button type='button' class='btn btn-info'> Edit</a>  <a href='delete.php?id=$user_data[id]' button type='button' class='btn btn-danger'>Delete</a></td></tr>";
        }
        ?>
            </table>
        </div>
<br><br>
<!--Daftar Laporan-->

        <div class="container" align="center">
            <h2 style="text-align: center; margin: 7px 7px 7px 7px;">Daftar Laporan</h2><br>

            <table class="table">


                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID Teknisi</th>
                        <th scope="col">Email</th>
                        <th scope="col">Name</th>
                        <th scope="col">Laporan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <?php

        while ($laporan = mysqli_fetch_array($result2)) {
          echo "<tr>";
          echo "<td>" . $laporan['id'] . "</td>";
          echo "<td>" . $laporan['email'] . "</td>";
          echo "<td>" . $laporan['nama'] . "</td>";
          echo "<td>" . $laporan['laporan'] . "</td>";
          echo "<td><a href='edit_laporan.php?id=$laporan[id]' button type='button' class='btn btn-info'> Edit</a>  <a href='delete_laporan.php?id=$laporan[id]' button type='button' class='btn btn-danger'>Delete</a></td></tr>";
        }
        ?>
            </table>
        </div>
    </div>

<!--Daftar Teknisi-->
<div class="container" align="center">
            <h2 style="text-align: center; margin: 7px 7px 7px 7px;">Daftar Teknisi</h2><br>

            <table class="table">


                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <?php

        while ($user_data = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $user_data['nama'] . "</td>";
          echo "<td>" . $user_data['email'] . "</td>";
          echo "<td>" . $user_data['password'] . "</td>";
          echo "<td><a href='edit.php?id=$user_data[id]' button type='button' class='btn btn-info'> Edit</a>  <a href='delete.php?id=$user_data[id]' button type='button' class='btn btn-danger'>Delete</a></td></tr>";
        }
        ?>
            </table>
        </div>
<br><br>


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