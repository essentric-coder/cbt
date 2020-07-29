<?php
include 'connection.php';
$id = $_GET['id'];
$query = mysqli_query($conn,"DELETE FROM exam_table where exam_id = '$id'");

header('location:../view_students.php');

?>
