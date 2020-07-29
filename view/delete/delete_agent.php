<html>
<head>
<script src="../../assets/sweetalert.min.js"></script>
  
</head>
<body>

<?php
include 'connection.php';
$id = $_GET['id'];
$query = mysqli_query($conn,"DELETE FROM agent where id = '$id'");
echo '<script>
swal({
 title: "Deleted!!!",
 text: "Record Deleted Successfully!!",
 icon: "warning",
 buttons: true,
 dangerMode: true,
})
.then((willDelete) => {
 if (willDelete) {
   swal("Redirecting....");
   window.location.assign("../activate_agent.php");
 } else {
   swal("Redirecting....");
   window.location.assign("../activate_agent.php");
 }
});
</script>';


?>

</body>
</html>
