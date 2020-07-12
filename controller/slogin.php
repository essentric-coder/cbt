<?php
ob_start();
session_start();

 include 'connection.php';

 if(isset($_POST['login_event'])){
   $email = mysqli_escape_string($conn,$_POST['email']);
   $pass = mysqli_escape_string($conn,$_POST['password']);


   $query1 = mysqli_query($conn,"SELECT * FROM student_table WHERE email = '$email'");
   $row  = mysqli_fetch_assoc($query1);
   $salt =   $row['salt'];
   $password = hash('sha256',$salt.$pass);


   $query = mysqli_query($conn,"SELECT * FROM student_table WHERE email = '$email' AND password ='$password'");
   $num = mysqli_num_rows($query);
   if($num == 1){

     $_SESSION['valid'] = true;
     $_SESSION['timeout'] = time();
     $_SESSION['student_email'] = $_POST['email'];
     header('location:../student/main.php');
   }
   else{
     echo 'invalid';
   }




 }

 ?>
