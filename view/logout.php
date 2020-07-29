<?php
include '../controller/connection.php';
session_start();

	unset($_SESSION['email']);
	$_SESSION['login']=NULL;
	session_destroy();
	header('location:../index.php');

?>
