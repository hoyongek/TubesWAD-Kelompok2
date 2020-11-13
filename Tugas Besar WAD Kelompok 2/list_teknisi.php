<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>
        Home Website Find Technician!
    </title>
    <style>
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

    a {
        color: dodgerblue;
    }

    .active a {
        border-bottom: 2px solid #257CE5;
    }

    .mynav a:hover {
        border-bottom: 2px solid #257CE5;
    }

    .card {
        padding: 15px;
        margin-top: 30px;
    }

    .skills {
        text-align: left;
        padding: 7px;
        margin-top: 15px;
    }

    .skills ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .skills ul li {
        border-radius: 1px;
        display: inline-block;
        font-size: 12px;
        margin: 0 3px 3px 0;
        padding: 3px;
    }

    .btn {
        margin-left: 10px;
    }
    </style>
</head>

<body>

    <<!--Batas TOP NAV-->
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

        <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
                integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
                crossorigin="anonymous">
            <title>
                Home Website Find Technician!
            </title>
            <style>
            .search {
                float: right;
                margin-top: 20px;
            }

            body {
                background-color: #F8F9F9;
            }

            <h1 style="text-align: center;"class="display-4">Technician</h1><?php $sum="0";
            $query=mysqli_query($kon, "SELECT * FROM tech") or die("Error Query");

            ?><div class="container"style="margin-top: 20px;"><div class="row"><?php foreach ($query as $data) {
                if ($sum=="3") {
                    $sum="0";
                    echo "</div> <div class='row'>";
                }

                ?><div class="col-md-4"><div class="card"style="width: 22rem;"><img src="gambar/noprofile.jpg"class="card-img-top"style="classwidth:100%;height:15vw;object-fit:cover;"alt="Profile Picture"style="object-fit:cover"><div class="card-body"style="text-align:center"><h5 class="card-title"><?php echo $data['name'];
                ?></h5><p class="card-text"style="text-align:left"><?=$data['desc'] ?></p><div class="skills"><h6>Skills</h6><ul><?php $sav=$data['id'];

                $query2=mysqli_query($kon, "SELECT d.name FROM device d INNER JOIN specialist s on s.device_id=d.id LEFT JOIN tech t on t.id=s.tech_id WHERE s.tech_id='$sav'") or die("Error Query");

                foreach ($query2 as $value) {
                    ?><li><?php echo $value['d.name'];
                    ?></li><?php
                }

                ?></ul></div><br><form action="teknisi.php"method="GET"align="center"><button type="submit"value="1"name="submit"class="btn btn-primary">Pesan Sekarang</button></form></div></div></div><?php $line="$sum+1";
                ?><?php
            }

            ?></body></html>