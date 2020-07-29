<!DOCTYPE html>
<html>
<head>
<script src="../assets/sweetalert.min.js"></script>
  
</head>
<body>
<?php
include '../controller/connection.php';

$id = $_GET['id'];

$exec = mysqli_query($conn, "UPDATE agent SET Agent_status = 'Active' WHERE id = '$id' ");
echo '<script>
swal({
 title: "Agent Started!!!",
 text: "Agent Monitoring Started Successfully!!",
 icon: "success",
 buttons: true,
 dangerMode: false,
})
.then((willDelete) => {
 if (willDelete) {
   swal("Redirecting....");
   window.location.assign("../view/activate_agent.php");
 } else {
   swal("Redirecting....");
   window.location.assign("../view/activate_agent.php");
 }
});
</script>';


 ?>

</body>
</html>
