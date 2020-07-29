


<?php

include("footer.php");
include("connect.php");

 ?>

 <?php
 //include 'controller/script.php';
 include ('connect.php');
 session_start();

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
                                     <img class="rounded-circle header-profile-user" src="<?php echo '../../images_admin/'.$img; ?>" alt="Header Avatar">
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

$subject = $_SESSION['exam_id'];


//score the candidate 
$sel = mysqli_query($conn,"SELECT * FROM exam_table WHERE exam_id = '$subject' ");
$ros = mysqli_fetch_assoc($sel);
$toty  = $ros['total_question'];
$pass  = $ros['marks_per_right_answer'];
$fail = $ros['marks_per_wrong_answer'];



$e  = $_SESSION['student_email'];
$sql = "select * from student_table where email = '$e' ";
$result=mysqli_query($conn,$sql);
 $row=$result->fetch_assoc();
$count_atten = 0;
$count=0;
$total_que = 0;
$right_ans = 0;
	while($count< 30)
	{
		if(isset($_SESSION['qa'][$count]['ans']) && empty($_SESSION['qa'][$count]['ans']) == false)
		{
			$count_atten++;
		}
		$count++;
	}
	foreach ($_SESSION['qa'] as $key => $value)
	{
		$qid = $value['id'];
		$sql1 = "select answer_option from question_table where question_id = ".$qid;
		$result1=$conn->query($sql1);
		$result1 = mysqli_fetch_assoc($result1);


	$anc = $result1['answer_option'];

    //AES encryption scheme
    $cipher = "AES-128-CTR";
    //Open ssl encryption method
    $ivlen = openssl_cipher_iv_length($cipher);
    $option = 0;
    //non null initialization of the vector for encryption.
    $encryption_iv = "9028993933845222";
    //store encrytion key => ,
    $encryption_key =  "h5hd7jdjds9k3jjdkd9kdkejdi93jkjdp1";
    $ans = openssl_decrypt($anc,$cipher,$encryption_key,$option,$encryption_iv);


		if($ans == $value['ans'])
		{
			$right_ans++;
		}

		$total_que++;
	}

$subject = $_SESSION['exam_id'];
$user_id = $_SESSION['student_email'];
$attend_que = $count_atten + 1;
$obtained_marks = $right_ans;

//score the candidate 
$select = mysqli_query($conn,"SELECT * FROM exam_table WHERE exam_id = '$subject' ");
$rows = mysqli_fetch_assoc($select);
$pass = $rows['marks_per_right_answer'];
$fail = $rows['marks_per_wrong_answer'];
$tot  = $rows['total_question'];

$exam_date = date('Y-m-d h:i:s');

$sql2 ="select * from student_table where email = '$e' ";
$result2=$conn->query($sql2);
$row=$result2->fetch_assoc();
 $student_id = $row['student_id'];
$fullname = $row['firstname'].' '.$row['lastname'];

$deal = $total- $obtained_marks;
$gain  = $pass * $obtained_marks;
$loss  = $fail * $deal;
$marks = $gain + $loss;

$check =  mysqli_query($conn,"SELECT * FROM result WHERE student_id = '$student_id' AND exam_id = '$subject' ");
$c = mysqli_num_rows($check);
if($c <= 1) {
 ///
 $q = "insert into result(student_id, fullname, exam_id, attend_que, obtained_marks, exam_date)
   values ('$student_id','$fullname','$subject','$attend_que','$marks','$exam_date')";

 $result1 = $conn->query($q);
 if (!$result1) {
   echo "error inserting result data";
 }
}
else{
  //

}




?>





  <div class="main-content">

              <div class="page-content">

                  <!-- start page title -->
                  <div class="row">
                      <div class="col-12">
                          <div class="page-title-box d-flex align-items-center justify-content-between">
                              <h4 class="page-title mb-0 font-size-18"> </h3></h4>

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
                      <div class="col-lg-12">

                          <div class="card">
                              <div class="card-body">



                                  <br>


                            <form role="form" method="post" action="direct.php">


                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <h3 style="margin-top: 5%;">Your Examination Result
                                  <div class="col-sm-6">
                                      <div id="dataTables-example_filter" class="dataTables_filter">
                                          <tbody>
                                              <tr>
                                                <td>Name : </td>
                                                <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                              </tr>
                                              <tr>
                                                <td>Exam ID : </td>
                                                <td><?php echo "$subject"; ?></td>
                                              </tr>
                                              <tr>
                                                <td>Total Questions :  </td>
                                                <td><?php echo "$total_que"; ?></td>
                                              </tr>
                                              <tr>
                                                <td>Attended Questions : </td>
                                                <td><?php  $count_atten = $count_atten + 1; echo "$count_atten"; ?></td>
                                              </tr>
                                              <tr>
                                                <td>Right Answers : </td>
                                                <td><?php $right_ans = $right_ans + 1; echo "$right_ans"; ?></td>
                                              </tr>
                                              <tr>

                                                <td colspan="2"><input type="submit" name = "next"  value = "Click Here to Continue" class="btn btn-primary"> </input></td>
                                              </tr>

                                          <tbody>

                              <table>


                          </div>
                        </form>




                              </div>
                          </div>
                          <!-- end card -->
                      </div>
                      <!-- end col -->


                      <!-- end col -->
                  </div>



              </div>
              <!-- End Page-content -->


          </div>
        </div>
          <!-- end main content-->
