<!DOCTYPE html>
<html>
<head>
<script src="assets/sweetalert.min.js"></script>
  
</head>
<body>
<button onclick="JSalert()">Show an Alert</button>
<button onclick="JSalerts()">Show an Alert</button>

<script type="text/javascript">
function JSalert(){
	swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
});
}
//window.location.assign("../index.php");
function JSalerts(){
	swal("Good job!", "You clicked the button!", "error");
}
</script>
</body>
</html>

