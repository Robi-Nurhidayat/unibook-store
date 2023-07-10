<?php
require('config.php');

$IdPenerbit = $_POST['IdPenerbit'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telepon = $_POST['telepon'];
$penerbit = $_POST['penerbit'];

mysqli_query($conn,"INSERT INTO t_penerbit VALUES('','$IdPenerbit','$nama','$alamat','$kota','$telepon')");


header("location:penerbit.php");

?>