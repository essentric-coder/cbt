<?php
include 'connection.php';
$id = $_GET['id'];
$query = mysqli_query($conn,"DELETE FROM student_table where student_id = '$id'");

header('location:../view_students.php');

?>
