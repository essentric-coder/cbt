<!DOCTYPE html>
<html lang = "en">
<?php
  //include("check.php");
 include ('examheader.php');
?>


<?php
//session_start();
extract($_POST);
include("connect.php");


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



													<iframe id="exam_frame" width="100%" height="450" frameborder="0" scrolling="no" src="exam_frame.php"></iframe>



                     </div>



                                </form>
                            </div>
                        </div>
                        <!-- end card -->

                    <!-- end col -->


                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                              <center>   <h4 class="card-title">Personal Information</h4></center>

                                <span class="d-none d-xl-inline-block ml-1"> Name : <?php echo $fname.'  '.$lname; ?></span> ||   &nbsp;
                                <span class="d-none d-xl-inline-block ml-1"> Status : Logged In</span>
                                  <br>  <br>





																							<div align="center">
																								<div id="CountDownTimer" data-timer="900"  style="max-width:400px; width: 100%; height: 200px;"></div>
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
<script type="text/javascript" src="inc/jquery.min.js"></script>
      
        <script type="text/javascript" src="inc/TimeCircles.js"></script>


<script>
 $("#DateCountdown").TimeCircles();
 $("#CountDownTimer").TimeCircles({ time: { Days: { show: false }, Hours: { show: false } }});
 $("#PageOpenTimer").TimeCircles();

 var updateTime = function(){
     var date = $("#date").val();
     var time = $("#time").val();
     var datetime = date + ' ' + time + ':00';
     $("#DateCountdown").data('date', datetime).TimeCircles().start();
 }
 $("#date").change(updateTime).keyup(updateTime);
 $("#time").change(updateTime).keyup(updateTime);

 // Start and stop are methods applied on the public TimeCircles instance
 $(".startTimer").click(function() {
     $("#CountDownTimer").TimeCircles().start();
 });
 $(".stopTimer").click(function() {
     $("#CountDownTimer").TimeCircles().stop();
 });

 // Fade in and fade out are examples of how chaining can be done with TimeCircles
 $(".fadeIn").click(function() {
     $("#PageOpenTimer").fadeIn();
 });
 $(".fadeOut").click(function() {
     $("#PageOpenTimer").fadeOut();
 });

</script>
