<?php
include '../controller/connection.php';

$id = $_GET['id'];

$exec = mysqli_query($conn, "UPDATE agent SET Agent_status = 'Not Active' ");
header('location:../view/activate_agent.php');

 ?>
