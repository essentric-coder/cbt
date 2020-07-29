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

$exec = mysqli_query($conn, "UPDATE user_logs SET status = 'Active' WHERE admin_id = '$id' ");
$exec = mysqli_query($conn, "UPDATE admin_table SET status = 'Active' WHERE admin_id = '$id' ");
echo '<script>
swal({
 title: "Activate User!!!",
 text: "Admin activated user successfully!!",
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


 ?>

</body>
</html>
