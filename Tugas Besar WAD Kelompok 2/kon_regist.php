<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$nama=$_POST["nama"];
$psw_repeat=$_POST["psw_repeat"];
$email=$_POST["email"];
$no_hp=$_POST["no_hp"];
$password=md5($_POST["password"]); //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel User
  $sql="insert into regist_user (username,nama,psw_repeat,email,no_hp,password) values
		('$username','$nama','$psw_repeat','$email','$no_hp','$password')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil menyimpan data User";
	exit;
  }
else {
	echo "Gagal menyimpan data User";
	exit;
}  

?>