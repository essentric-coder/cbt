<!DOCTYPE html>
<html lang = "en">
<?php
//include 'controller/script.php';

include 'check_session.php';

$log_id = "";

$email_id  = $_SESSION['student_email'];
$n = mysqli_query($conn,"SELECT * FROM student_table");
$r = mysqli_fetch_assoc($n);
$s_id  = $r['student_id'];
$current_datetime = date("Y-m-d") . ' ' . date("H:i:s", STRTOTIME(date('h:i:sa')));


$email = $_SESSION['student_email'];
$query1 = mysqli_query($conn,"SELECT * FROM student_table WHERE email = '$email'");
$row  = mysqli_fetch_assoc($query1);
$fname = $row['firstname'];
$lname = $row['lastname'];
$img =   $row['user_image'];
$s_id =   $row['student_id'];
?>



<?php

include 'controller/connection.php';
$filepage = explode('/',$_SERVER['REQUEST_URI']);
$filepage = end($filepage);
?>

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Smart CBT </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    <link href="../assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

    <!-- jquery.vectormap css -->
    <link href="../assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <link href="../assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <link rel="../stylesheet" href="assets/style/bootstrap-datetimepicker.css" />
          <script src="../assets/style/bootstrap-datetimepicker.js"></script>

          <link rel="stylesheet" href="style/style.css" />
  <link rel="stylesheet" href="style/TimeCircles.css" />
  <script src="style/TimeCircles.js"></script>

</head>

<body data-layout="detached" data-topbar="colored">

    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="container-fluid">
                        <div class="float-right">


                            <div class="dropdown d-none d-lg-inline-block ml-1">
                                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                    <i class="mdi mdi-fullscreen"></i>
                                </button>
                            </div>

                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-bell-outline"></i>
                                    <span class="badge badge-danger badge-pill">3</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0"> Notifications </h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!" class="small"> View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar style="max-height: 230px;">


                                        <a href="#" class="text-reset notification-item">
                                            <div class="media">
                                                <div class="avatar-xs mr-3">
                                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                                        <i class="bx bx-badge-check"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="p-2 border-top">
                                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                            <i class="mdi mdi-arrow-right-circle mr-1"></i> View More..
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle header-profile-user" src="<?php echo '../images_admin/'.$img; ?>" alt="Header Avatar">
                                    <span class="d-none d-xl-inline-block ml-1"><?php echo $fname; ?></span>
                                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->

                                    <a class="dropdown-item" href="change_password.php"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i>Change Password</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="Logout.php"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                                </div>
                            </div>

                        </div>
                        <div>
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                              <span style="color: white;text-indent: 50px; font-size: 20px; link:white; text-size:40px; text-shadow: 2px 2px 5px red;" >SMART CBT</span>  <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.png" alt="" height="20">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-sm.png" alt="" height="17">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-sm">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.png" alt="" height="20">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-sm.png" alt="" height="19">
                                    </span>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
            </header>



<?php
//session_start();
extract($_POST);



if(isset($_POST['exam_id']) && !empty($_POST['exam_id'])){
	$_SESSION['exam_id'] = $_POST['exam_id'];
}

foreach ($_SESSION as $key => $value) {
	$key = $value;
}

//unset($_SESSION['qa']);
if(!isset($_SESSION['qa']) || empty($_SESSION['qa'])){
	$q = "select * from question_table where online_exam_id = '".$exam_id."' order by RAND() limit 30";
	 $res= mysqli_query($conn,$q);
	 if(mysqli_num_rows($res)<=0)

	 {
	 	?>
	 	<script>
        alert('Sorry the questions are not available. Try with some other subject');
        window.location='select.php';
      </script>
    <?php
	 }

	$_SESSION['qa'] = array();
	$count = 1;
	while($row = mysqli_fetch_assoc($res)){

    $id = $row['question_id'];
		$question = $row['question_title'];
		$a = $row['option_1'];
		$b = $row['option_2'];
		$c = $row['option_3'];
		$d = $row['option_4'];


    //AES encryption scheme
    $cipher = "AES-128-CTR";
    //Open ssl encryption method
    $ivlen = openssl_cipher_iv_length($cipher);
    $option = 0;
    //non null initialization of the vector for encryption.
    $encryption_iv = "9028993933845222";
    //store encrytion key => ,
    $encryption_key =  "h5hd7jdjds9k3jjdkd9kdkejdi93jkjdp1";
    $question_title = openssl_decrypt($question,$cipher,$encryption_key,$option,$encryption_iv);
    //$answer_option = openssl_decrypt($,$cipher,$encryption_key,$option,$encryption_iv);
    $option_1 = openssl_decrypt($a,$cipher,$encryption_key,$option,$encryption_iv);
    $option_2 = openssl_decrypt($b,$cipher,$encryption_key,$option,$encryption_iv);
    $option_3 = openssl_decrypt($c,$cipher,$encryption_key,$option,$encryption_iv);
    $option_4 = openssl_decrypt($d,$cipher,$encryption_key,$option,$encryption_iv);

    $_SESSION['qa'][$count]['id'] = $row['question_id'];
		$_SESSION['qa'][$count]['question'] = $question_title;
		$_SESSION['qa'][$count]['option_a'] = $option_1;
		$_SESSION['qa'][$count]['option_b'] = $option_2;
		$_SESSION['qa'][$count]['option_c'] = $option_3;
		$_SESSION['qa'][$count]['option_d'] = $option_4;
		$_SESSION['qa'][$count]['ans'] = '';
		$count++;
	}
}


//echo $_SESSION['qa'][1]['question'];exit();

?>


<div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">Main Menu</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Status</a></li>
                                    <li class="breadcrumb-item active">Logged In</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">

                                <br>

                                      <div class="row">
                                        <iframe id="exam_frame" width="100%" height="450" frameborder="0" scrolling="no" src="exam_frame.php"></iframe>

                                       </div>



                                </form>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                              <center>   <h4 class="card-title">Personal Information</h4></center>

                                <span class="d-none d-xl-inline-block ml-1"> Name : <?php echo $fname.'  '.$lname; ?></span> ||   &nbsp;
                                <span class="d-none d-xl-inline-block ml-1"> Status : Logged In</span>
                                  <br>  <br>




                                            <div class="text-center" dir="ltr">



                                              <img class="rounded-circle header-profile-user" style="width:250px; height:250px;" src="<?php echo '../images_admin/'.$img; ?>" alt="Header Avatar">






                                            </div>

                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>



            </div>
            <!-- End Page-content -->


        </div>
        <!-- end main content-->



<?php

include('footer.php');

?>

<script type="text/javascript">
		setTimeout(myfun,1800000);

		function myfun()
		{
			window.location = 'result_count.php';
		}
	</script>


<script src="js/jquery.min.js"></script>


        <script src="js/bootstrap.min.js"></script>


        <script src="js/metisMenu.min.js"></script>


        <script src="js/dataTables/jquery.dataTables.min.js"></script>
          <script src="js/dataTables/dataTables.bootstrap.min.js"></script>


        <script src="js/startmin.js"></script>
        <script src="js/jquery.min.js"></script>


        <script src="js/bootstrap.min.js"></script>


        <script src="js/metisMenu.min.js"></script>


        <script src="js/startmin.js"></script>
<?php
include("footer.php");
?>
<script type="text/javascript">
		$(function()
		{
			$('#countdown').timeTo(1800, function()
			{
				alert('Your examination time is completed.\nYou are Redirecting to Result page.');
				window.location.assign("result_count.php");
			});
		});
	</script>
