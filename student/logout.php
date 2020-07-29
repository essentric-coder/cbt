<!DOCTYPE html>
<html>
<head>
<script src="../assets/sweetalert.min.js"></script>
  
</head>
<body>
<?php
include 'controller/connection.php';
session_start();
unset($_SESSION['student_email']);
$_SESSION['login']=NULL;
session_destroy();
echo '<script>
swal({
 title: "GoodBye!!!",
 text: "Logging out........!!",
 icon: "success",
 buttons: true,
 dangerMode: false,
})
.then((willDelete) => {
 if (willDelete) {
   swal("Redirecting....");
   window.location.assign("../student/index.php");
 } else {
   swal("Redirecting....");
   window.location.assign("../student/index.php");
 }
});
</script>';



?>

</body>
</html>

