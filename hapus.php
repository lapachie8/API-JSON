<?php 
include "koneksi.php";
$id=$_GET['id'];
mysql_query($koneksi, "DELETE FROM API WHERE  id = '$id");
header("location=koneksi.php");
?>