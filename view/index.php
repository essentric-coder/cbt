<?php
include '../controller/connection.php';
session_start();
if (!isset($_SESSION['email']))
{
    header("Location: ../index.php");
    die();
}
else{
    header("Location: dashboard.php");
}

?>
