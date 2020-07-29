<?php
include 'connection.php';
$id = $_GET['id'];
$query = mysqli_query($conn,"DELETE FROM agent where id = '$id'");

header('location:../activate_agent.php');

?>
