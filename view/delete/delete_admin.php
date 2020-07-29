<?php
include 'connection.php';
$id = $_GET['id'];
$query = mysqli_query($conn,"DELETE FROM admin_table where admin_id = '$id'");

header('location:../view_admin.php');

?>
