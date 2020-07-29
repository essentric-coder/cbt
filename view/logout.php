<!DOCTYPE html>
<html>
<head>
<script src="../assets/sweetalert.min.js"></script>
  
</head>
<body>
<?php
include '../controller/connection.php';
session_start();
unset($_SESSION['email']);
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
   window.location.assign("../index.php");
 } else {
   swal("Redirecting....");
   window.location.assign("../index.php");
 }
});
</script>';



?>

</body>
</html>
