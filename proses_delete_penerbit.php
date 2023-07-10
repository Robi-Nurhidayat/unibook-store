<?php

require('config.php');

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM t_penerbit WHERE id = '$id'");
header("location:penerbit.php");

?>