<?php
require('config.php');

$id = $_POST['id'];
$IdPenerbit = $_POST['IdPenerbit'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telepon = $_POST['telepon'];


mysqli_query($conn,"UPDATE t_penerbit SET IdPenerbit='$IdPenerbit',nama='$nama',alamat='$alamat',kota='$kota',telepon='$telepon' WHERE id='$id' ");


header("location:penerbit.php");

?>