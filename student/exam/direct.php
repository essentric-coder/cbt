<?php
session_start();
if(isset($_POST['next'])) {


unset($_SESSION['qa']);
unset($_SESSION['exam_id']);
unset($_SESSION['current_que']);

echo "<script> location.href='../check.php'; </script>";

}
?>
