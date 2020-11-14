<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
        </form>
    </div>
    <!--Batas TOP NAV-->

    <h1 style="text-align: center;" class="display-4"> ADD DATA !</h1>

    <div class="container">
        <br>
        <form action="add.php" method="post" name="form1" style="margin-left: 350px; margin-right: 350px;">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="form-group">
                <label for="Mobile">Mobile</label>
                <input type="text" class="form-control" name="mobile">
            </div>

            <button type="Submit" class="btn btn-primary" name="Submit">Submit</button>

        </form>

        <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

        // Show message when user added
        header("Location: admin.php");
    }
    ?>
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