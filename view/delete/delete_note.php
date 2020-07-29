<?php
include 'connection.php';
$id = $_GET['id'];
$query = mysqli_query($conn,"DELETE FROM send_notification where n_id = '$id'");

header('location:../send_notification.php');

?>
