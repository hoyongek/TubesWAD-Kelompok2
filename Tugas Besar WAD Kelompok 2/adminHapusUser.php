<?php
require 'function.php';

$id = $_GET['id'];

if (deleteUser($id) > 0) {
  echo "<script>alert('data berhasil dihapus'); document.location.href = 'admin.php';</script>";
} else {
  echo "data gagal dihapus!";
}
