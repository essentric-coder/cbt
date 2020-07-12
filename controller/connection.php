<?php

//connection variables declaration
$host = "localhost";
$user = "root";
$pass = "";
$db = "db";
//connect to host
$conn =  mysqli_connect($host,$user,$pass);
//check if host connection is successful
if($conn){
  //connect to SQLiteDatabase i host connection is successful
  mysqli_select_db($conn,$db);
  

}
  else{
    echo 'connection to host failed';
  }


 ?>
