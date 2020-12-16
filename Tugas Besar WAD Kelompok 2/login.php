<?php
session_start();

include "function.php";

if (isset($_SESSION['userLogin'])) {
  header("Location: index.php");
  exit;
}

if (isset($_POST['userLogin'])) {
  $userLogin = userLogin($_POST);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Hello, world!</title>

</head>

<body>

    <!--Batas TOP NAV-->
    <div class="top container-fluid fixed-top ">
        <img class="logo_navbar" src="gambar\logo.png">



    </div>
    <!--Batas TOP NAV-->

    <div class="isi_body">
        <div class="container">

            <form action="" method="POST" style="margin-left: 350px; margin-right: 350px; margin-top:50px;">
                <div class="shadow p-3 mb-5 bg-white rounded">
                    <h2 align="center">Login User </h2><br>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" autofocus autocomplete="on">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group" style="margin-left:0px;">
                        <button type="submit" name="userLogin" class="btn btn-primary">Login</button>
                        <a button type="submit" name="registrasi" class="btn btn-primary"
                            href="regist_user.php">Registrasi</button></a>
                        <label>Belum Punya Akun ?</label>
                    </div>
                    <div class="login_sebagai">
                        <a href="login_teknisi.php">Halaman Login Teknisi</a> /
                        <a href="login_admin.php">Halaman Login Admin</a> /
                    </div>

                    <div class="form-group">
                        <?php if (isset($userLogin['error'])) : ?>
                        <p style="color: red; font-style: italic;"><?= $userLogin['pesan']; ?></p>
                        <?php endif; ?>
                    </div>
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