

<?php

//Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "db";

$conn = mysqli_connect($servername, $username, $password,$dbname);


if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


 ?>
