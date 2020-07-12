<?php
include 'controller/connection.php';
session_start();

	unset($_SESSION['student_email']);
	$_SESSION['login']=NULL;
	session_destroy();
	header('location:../student/index.php');

?>
