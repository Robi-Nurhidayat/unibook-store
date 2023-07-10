<?php

require('config.php');

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM t_buku WHERE id = '$id'");
header("location:buku.php");

?>