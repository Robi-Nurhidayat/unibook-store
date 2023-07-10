<?php
require('config.php');

$IdBuku = $_POST['IdBuku'];
$kategori = $_POST['kategori'];
$namaBuku = $_POST['namaBuku'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$penerbit = $_POST['penerbit'];

mysqli_query($conn,"INSERT INTO t_buku VALUES('','$IdBuku','$kategori','$namaBuku','$harga','$stok','$penerbit')");


header("location:buku.php");

?>