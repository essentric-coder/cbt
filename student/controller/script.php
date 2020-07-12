
<?php

include 'connection.php';



$log_id = "";

$email_id  = $_SESSION['student_email'];
$n = mysqli_query($conn,"SELECT * FROM student_table");
$r = mysqli_fetch_assoc($n);
$s_id  = $r['student_id'];
$current_datetime = date("Y-m-d") . ' ' . date("H:i:s", STRTOTIME(date('h:i:sa')));


?>
