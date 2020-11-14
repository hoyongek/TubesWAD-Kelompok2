<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");


session_start();
if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

//$perHalaman = 1;
//$jmlData = count(query("SELECT * FROM tech"));
//$jmlHalaman = ceil($jmlData / $perHalaman);
//$halaman = (isset($_GET["jmlHalaman"])) ? $_GET["halaman"] : 1;
//$awal = ($perHalaman * $halaman) - $perHalaman;
//$tech = query("SELECT * FROM tech LIMIT $awal, $perHalaman");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar User</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
        float: right;
        margin-top: 20px;

    }

    body {
        background-color: #F8F9F9;
    }

    .container {
        margin-top: 20px;
    }

    .btn {
        margin-left: 10px;
    }

    .ADD {
        margin-top: 20px;
        margin-left: 550px;
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
            <a href="regist_user.php" button type="button" class="btn btn-info">Register</button></a>
            <a href="login.php" button type="button" class="btn btn-danger">Login</button></a>
            <a href="logout.php">Logout</a>

        </form>
    </div>
    <!--Batas TOP NAV-->

    <div class="container" align="center">
        <h2 style="text-align: center; margin: 7px 7px 7px 7px;">Daftar User</h2><br>

        <table class="table">


            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Email</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>

            <?php

    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]' button type='button' class='btn btn-info'> Edit</a>  <a href='delete.php?id=$user_data[id]' button type='button' class='btn btn-danger'>Delete</a></td></tr>";   }
    ?>
        </table>

        <a href="add.php" button type="button" class="btn ADD btn-success">Tambah Data</button></a>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>