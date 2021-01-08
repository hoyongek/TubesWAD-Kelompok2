<?php
include "function.php";

if (isset($_POST['regis'])) {
  if ($_POST['password'] === $_POST['pw']) {
    if ($_POST['roles'] == "Teknisi") {
      if (addTeknisi($_POST) > 0) {
        echo "<script>alert('User berhasil ditambahkan')
            document.location.href = 'regist_user.php'</script";
      }
    } else if ($_POST['roles'] == "User") {
      if (addUser($_POST) > 0) {
        echo "<script>alert('Teknisi berhasil ditambahkan')
                document.location.href = 'login.php'</script";
      }
    }
  } else {
    echo "<script>alert('Password tidak match')
        document.location.href = 'regist_user.php'</script";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registrasi</title>
</head>

<body>
    <!--Batas TOP NAV-->
    <nav class="top navbar navbar-light fixed-top">
        <a class="navbar-brand" href="#">
            <img class="logo_navbar" src="gambar\logo.png" alt=""> FindTechnician </a>
        <form class="d-flex">
            <a href="login.php"> Login</a>
        </form>
    </nav><br><br>
    <!--Batas TOP NAV-->


    <div class="isi_body">
        <div class="container">
            <form class="registrasi" method="POST" action="">
                <div class="shadow p-3 mb-5 bg-white rounded">
                    <h3>Formulir Registrasi</h3><br>
                    <input type="email" class="form-control" placeholder="E-mail" name="email"><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Name" name="nama">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Tulis Ulang Password Anda"
                                name="pw">
                        </div>
                    </div>
                    <br>
                    <a class="text-primary"> Registrasi Sebagai ? </a>
                    <div class="form-check form-check-inline" style="padding-left:10px;">
                        <input class="form-check-input" type="radio" name="roles" id="inlineRadio1" value="User">
                        <label class="form-check-label" for="inlineRadio1">User</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="roles" id="inlineRadio2" value="Teknisi">
                        <label class="form-check-label" for="inlineRadio2">Teknisi</label>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="submit" name="regis" class="btn btn-primary mb-2"
                            onclick="window.location.href='.....php';" value="Submit" />
                    </div>
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