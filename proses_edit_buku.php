<?php
require('config.php');

$id = $_POST['id'];
$IdBuku = $_POST['IdBuku'];
$kategori = $_POST['kategori'];
$namaBuku = $_POST['namaBuku'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$penerbit = $_POST['penerbit'];

mysqli_query($conn,"UPDATE t_buku SET IdBuku='$IdBuku',kategori='$kategori',namaBuku='$namaBuku',harga='$harga',stok='$stok',penerbit='$penerbit' WHERE id='$id' ");


header("location:buku.php?");

?>