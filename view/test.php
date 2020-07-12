<?php
include '../controller/connection.php';
$id = mysqli_escape_string($conn,$_GET['id']);
echo $id;

 ?>
