<?php
// include database connection file
include("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM data_technisian WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:data_teknisi.php");
