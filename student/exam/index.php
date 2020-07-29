
<?php
	session_start();
	if(!isset($_SESSION['student_email']) || $_SESSION['student_email'] == ''){
		header('location: ../index.php');
	}
	else{
		header("location:../main.php");
	}
?>
