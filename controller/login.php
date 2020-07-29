<!DOCTYPE html>
<html>
<head>
<script src="../assets/sweetalert.min.js"></script>
  
</head>
<body>

<?php
ob_start();
session_start();

 include 'connection.php';

 if(isset($_POST['login'])){
   $email = mysqli_escape_string($conn,$_POST['email']);
   $pass = mysqli_escape_string($conn,$_POST['password']);


   $query1 = mysqli_query($conn,"SELECT * FROM admin_table WHERE email_address = '$email'");
   $row  = mysqli_fetch_assoc($query1);
   $status = $row['status'];
   $salt =   $row['salt'];
   $password = hash('sha256',$salt.$pass);

   $query = mysqli_query($conn,"SELECT * FROM admin_table WHERE email_address = '$email' and password = '$password' AND status = 'active'");
   $num = mysqli_num_rows($query);
   if($num == 1){
      $rows = mysqli_fetch_assoc($query);
      $fullname = $rows['firstname'].' '.$rows['lastname'];
      $admin_id  = $rows['admin_id'];
      $status = $rows['status'];
      $access = "Administrator";
      $datetime = date('Y-m-d H:i:s');
     $log = mysqli_query($conn,"INSERT INTO user_logs(admin_id,fullname,access_level,status,datetime)
             VALUES('$admin_id',
                    '$fullname',
                     '$access',
                      '$status',
                     '$datetime')");

     $_SESSION['valid'] = true;
     $_SESSION['timeout'] = time();
     $_SESSION['email'] = $_POST['email'];

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
        window.location.assign("../view/dashboard.php");
      } else {
        swal("Redirecting....");
        window.location.assign("../view/dashboard.php");
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
        window.location.assign("../index.php");
      } else {
        swal("Redirecting....");
        window.location.assign("../index.php");
      }
    });
     
     </script>';
    
   }

 }

 ?>



</body>
</html>
