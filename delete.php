<?php
//To Delete product
include 'connection.php';

$p_id = $_GET['p_id'];

$q = " DELETE FROM products WHERE p_id = $p_id ";

mysqli_query($con,$q);

header('location:index.php');

?>