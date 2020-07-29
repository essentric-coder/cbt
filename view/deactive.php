<!DOCTYPE html>
<html>
<head>
<script src="../assets/sweetalert.min.js"></script>
  
</head>
<body>
<?php
include '../controller/connection.php';

$email = $_GET['id'];

$get = mysqli_query($conn,"SELECT * FROM admin_table WHERE email_address = '$email' ");
$rs = mysqli_fetch_assoc($get);
$id = $rs['admin_id'];
$exec = mysqli_query($conn, "UPDATE user_logs SET status = 'InActive' WHERE admin_id = '$id' ");
$exec = mysqli_query($conn, "UPDATE admin_table SET status = 'InActive' WHERE admin_id = '$id' ");
echo '<script>
swal({
 title: "Deactivate User!!!",
 text: "Admin Deactivated user successfully!!",
 icon: "error",
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



 ?>

</body>
</html>
