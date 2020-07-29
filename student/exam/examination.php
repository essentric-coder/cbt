<!DOCTYPE html>
<html lang = "en">

 <link rel="stylesheet" href="inc/TimeCircles.css" />
 <script src="../../assets/sweetalert.min.js"></script>
<?php
   include ('examheader.php');

?>

     <link rel="stylesheet" href="inc/TimeCircles.css" />

<?php
//session_start();
extract($_POST);
include("connect.php");


if (isset($_POST['send'])){


  $exam_id = $_POST['exam_id'];
  $f = "SELECT * FROM exam_table WHERE exam_id = '$email'";
  $s  = mysqli_query($conn,$f);
  $row = mysqli_fetch_assoc($s);
  $examcode = $row['exam_code'];
  $_SESSION['exam_id'] = $exam_id;

  $result = mysqli_query($conn,"SELECT * FROM exam_table WHERE exam_id = '$exam_id'");

  $row = mysqli_fetch_assoc($result);

  $exam_status = $row['exam_status'];
  $exam_title = $row['exam_title'];
  $exam_star_time = $row['exam_datetime'];
  $duration = $row['exam_duration'] . ' minutes';
  $time =  $row['exam_duration'] * 60 ;
  $exam_end_time = strtotime($exam_star_time . '+' . $duration);
  $total = $row['total_question'];

  $exam_end_time = date('Y-m-d H:i:s', $exam_end_time);
  $remaining_minutes = strtotime($exam_end_time) - time();
  //get time from time db

}

$_SESSION['total'] =   $total;

foreach ($_SESSION as $key => $value) {
	$key = $value;
}







//unset($_SESSION['qa']);
if(!isset($_SESSION['qa']) || empty($_SESSION['qa'])){
	$q = "select * from question_table where online_exam_id = '".$exam_id."' order by RAND() LIMIT 30";
	 $res= mysqli_query($conn,$q);
	 if(mysqli_num_rows($res)<=0)

	 {
	 	?>
	 	<script>
     swal({
                    title: "Exam Not Available!",
                    text: "'Sorry the questions are not available. Try with some other subject.",
                    icon: "success",
                    buttons: true,
                    dangerMode: false,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        window.location.assign("exam.php.php");
                    } else {
                        window.location.assign("exam.php.php");
                    }
                    });

      </script>
    <?php
   }
   
   //Update exam
mysqli_query($conn,"UPDATE user_exam_enroll_table SET attendance_status = 'present' WHERE user_id = '$uid' AND exam_id = '$exam_id' ");

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

<body onkeydown="return (event.keyCode == 154)">

<div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">Course : <?php echo $exam_title; ?> Exam</h4> &nbsp;
                            <h4 class="page-title mb-0 font-size-18">No. of Question : <?php echo $total; ?> </h4>&nbsp;
                              <h4 class="page-title mb-0 font-size-18">Duration : <?php echo $duration; ?> </h4>
                              <h4 class="page-title mb-0 font-size-18">Status :  In progress </h4>



                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-8">

                        <div class="card">
                            <div class="card-body">
              <a href="result_count.php" id="endExamBtn" class="btn btn-primary"> End-Exam</a>




													<iframe id="exam_frame" width="100%" height="450" frameborder="0" style="background-color:white;" scrolling="no" src="exam_frame.php"></iframe>



                     </div>


                            </div>
                        </div>
                        <!-- end card -->

                    <!-- end col -->


                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                              <center>   <h4 class="card-title">Personal Information </h4></center>
                              <table>
                                <tr>
                                  <td rowspan="2">
                                    <div class="text-center" dir="ltr">
                                      <img class="rounded-circle header-profile-user" style="width:100px; height:100px;" src="<?php echo '../../images_admin/'.$img; ?>" alt="Header Avatar">

                                    </div>
                                  </td>

                                  <td>
                                      <span class="d-none d-xl-inline-block ml-1">First Name : <?php echo $fname; ?></span>

                                  </td>



                                  <td>
                                    <span class="d-none d-xl-inline-block ml-1">Last Name : <?php echo $lname; ?></span>
                                  </td>

                                </tr>


                              </table>

                              <center>   <h4 class="card-title">Examination Clock </h4></center>

                              <div align="center">
                                <div id="CountDownTimer" data-timer="<?php echo $time; ?>"  style="max-width:400px; width: 100%; height: 200px;"></div>
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
      </body>

<?php

include('footer.php');

?>

<script src="../../assets/sweetalert.min.js"></script>
<script type="text/javascript" src="inc/jquery.min.js"></script>
     <script type="text/javascript" src="inc/TimeCircles.js"></script>
<script>

$("#DateCountdown").TimeCircles();
           $("#CountDownTimer").TimeCircles({ time: { Days: { show: false }, Hours: { show: false } }});
           $("#PageOpenTimer").TimeCircles();

                setInterval(function(){
               var remaining_second = $("#CountDownTimer").TimeCircles().getTime();
               if(remaining_second <= 0)
               {
                  $("#CountDownTimer").TimeCircles().stop();
                  
                    swal({
                    title: "Terminating Exam..",
                    text: "'Your examination time is completed.\nYou are Redirecting to Result page.",
                    icon: "success",
                    buttons: true,
                    dangerMode: false,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        window.location.assign("result_count.php");
                    } else {
                        window.location.assign("result_count.php");
                    }
                    });
                   
                
               }
           }, 1000);



</script>
