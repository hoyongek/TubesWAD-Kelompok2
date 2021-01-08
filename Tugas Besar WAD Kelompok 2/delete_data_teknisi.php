<?php
// include database connection file
include("function.php");
$conn = koneksi();

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$querry = "DELETE FROM technician WHERE id=$id";
mysqli_query($conn, $querry) or die(mysqli_error($conn));
if (mysqli_affected_rows($conn) > 0) {
  echo "<script>
					alert('Data berhasil di hapus');
					document.location.href = 'admin.php';
          </script>";
}
