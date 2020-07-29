<html>
<head>
<script src="../../assets/sweetalert.min.js"></script>
  
</head>
<body>

<?php
include 'connection.php';
$id = $_GET['id'];
$query = mysqli_query($conn,"DELETE FROM exam_table where exam_id = '$id'");
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
   window.location.assign("../add_exam.php");
 } else {
   swal("Redirecting....");
   window.location.assign("../add_exam.php");
 }
});
</script>';


?>

</body>
</html>
