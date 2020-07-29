
<!DOCTYPE html>
<html>
<head>
<script src="../../assets/sweetalert.min.js"></script>
  
</head>
<body>

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

     echo '<script>
     swal({
      title: "Access Granted!!",
      text: "Click Ok To Proceed",
      icon: "success",
      buttons: true,
      dangerMode: false,
    })
    .then((willDelete) => {
      if (willDelete) {
        swal("Redirecting....");
        window.location.assign("../../student/main.php");
      } else {
        swal("Redirecting....");
        window.location.assign("../../student/main.php");
      }
    });
     
     </script>';
     
   }
   else{
    echo '<script>
    swal({
     title: "Invalid Login Credentials",
     text: "Check Your Email Address and Password!!",
     icon: "warning",
     buttons: true,
     dangerMode: true,
   })
   .then((willDelete) => {
     if (willDelete) {
       swal("Redirecting....");
       window.location.assign("../../student/index.php");
     } else {
       swal("Redirecting....");
       window.location.assign("../../student/index.php");
     }
   });
    
    </script>';
     
   }




 }

 ?>
</body>
</html>