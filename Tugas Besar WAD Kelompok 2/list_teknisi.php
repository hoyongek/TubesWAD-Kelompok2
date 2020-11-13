<?php
session_start();
if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'koneksi.php';
//$perHalaman = 1;
//$jmlData = count(query("SELECT * FROM tech"));
//$jmlHalaman = ceil($jmlData / $perHalaman);
//$halaman = (isset($_GET["jmlHalaman"])) ? $_GET["halaman"] : 1;
//$awal = ($perHalaman * $halaman) - $perHalaman;
//$tech = query("SELECT * FROM tech LIMIT $awal, $perHalaman");
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<a class="navbar-brand" href="index.php">
			<img src="gambar\logo.png" style="width: 50px; height: 50px;"> Find Technician
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse mynav" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="profile.php">Profile</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="list_teknisi.php">List Teknisi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</nav>
	<br> <br> <br>

	<h1 style="text-align: center;" class="display-4">Technician</h1>

	<?php //for ($i = 1; $i <= $jmlHalaman; $i++) : 
	?>

	<?php //endfor; 
	?>

	<?php
	$sum = "1";
	$query = query("SELECT * FROM tech");
	?>
	<div class="container" style="margin-top: 20px;">
		<div class="row">
			<?php foreach ($query as $data) {
				if ($sum == "3") {
					$sum = "0";
					echo "</div> <div class='row'>";
				}
			?>
				<div class="col-md-4">
					<div class="card" style="width: 22rem;">
						<img src="gambar/noprofile.jpg" class="card-img-top" style="classwidth:100%;height:15vw;object-fit:cover;" alt="Profile Picture" style="object-fit:cover">
						<div class="card-body" style="text-align:center">
							<h5 class="card-title"><?php echo $data['name']; ?></h5>
							<p class="card-text" style="text-align:left"><?= $data['desc'] ?></p>
							<div class="skills">
								<h6>Skills</h6>
								<ul>
									<?php //
									//$sav = $data['id'];
									//$query2 = mysqli_query($kon, "SELECT d.name FROM device d
									//INNER JOIN specialist s on s.device_id = d.id
									//LEFT JOIN tech t on t.id = s.tech_id
									//WHERE s.tech_id = '$sav'") or die("Error Query");
									//foreach ($query2 as $value) { 
									?>
									<li><?php //echo $value['d.name']; 
											?></li>
									<?php //} 
									?>
								</ul>
							</div>
							<br>
							<form action="teknisi.php" method="GET" align="center">
								<button type="submit" value="1" name="submit" class="btn btn-primary">Pesan Sekarang</button>
							</form>
						</div>
					</div>
				</div><?php $line = "$sum+1"; ?> <?php } ?>
			<?php
			if (!$sum > 2) {
				echo "</div>";
			}
			?>
		</div>



		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
				<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1">Previous</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>
</body>

</html>