  <?php
//include 'controller/script.php';
include ('connect.php');
session_start();

if(!isset($_SESSION['student_email']) || $_SESSION['student_email'] == ''){
  header('location: ../index.php');
}

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


//update exam Status

$sql
?>





<?php

include 'connect.php';
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
    <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

    <!-- jquery.vectormap css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="assets/style/bootstrap-datetimepicker.css" />
          <script src="assets/style/bootstrap-datetimepicker.js"></script>

          <link rel="stylesheet" href="style/style.css" />
  <link rel="stylesheet" href="style/TimeCircles.css" />
  <script src="style/TimeCircles.js"></script>

  <script type="text/javascript" src="inc/jquery.min.js"></script>
       <script type="text/javascript" src="inc/TimeCircles.js"></script>
       <link rel="stylesheet" href="inc/TimeCircles.css" />

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
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle header-profile-user" src="<?php echo '../../images_admin/'.$img; ?>" alt="Header Avatar">
                                    <span class="d-none d-xl-inline-block ml-1"><?php echo $fname; ?></span>
                                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->

                                    
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

          <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>
