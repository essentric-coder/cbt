



<?php
//include("check.php");
?>
<?php
//session_start();
include("connect.php");
include("header.php");
?>

            <!-- /#page-wrapper -->
            <div class="main-content">

                        <div class="page-content">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-flex align-items-center justify-content-between">
                                        <h4 class="page-title mb-0 font-size-18">Select Course</h4>

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


                                                  <div class="row">


                                                    <form  method="POST" action="select.php" >

                                                          <div id="page-wrapper">
                                                              <div class="container-fluid">
                                                                  <div class="row">
                                                                      <div class="col-lg-12">
                                                                         <h3 style="margin-top: 5%;">Start Examination</h3>
                                                                      </div>


                                                                  </div>
                                                                  <!-- /.row -->
                                                                  <div class="row">
                                                                      <div class="col-lg-12">
                                                                          <div class="panel panel-default">

                                                                              <div class="panel-body">
                                                                                  <div class="row">
                                                                                      <div class="col-lg-12">
                                                                                       <p class="text-center">Hello <?php echo $fname; ?><span class="text-danger">, Are you ready for this examination ?</span> Select your course to begin !</p>

                                                                  <div class="col-md-6">
                                                                  <div class="form-group">
                                                                      <label >Subject </label>

                                                                      <select class="form-control" name = "exam_id" required>


                                                    <?php
                                               include 'connect.php';
                                                     $email = $_SESSION['student_email'];
                                                     $query1 = mysqli_query($conn,"SELECT * FROM student_table WHERE email = '$email'");
                                                     $row  = mysqli_fetch_assoc($query1);
                                                     $fname = $row['firstname'];
                                                     $lname = $row['lastname'];
                                                     $img =   $row['user_image'];
                                                     $s_id =   $row['student_id'];
                                                        $query  = mysqli_query($conn,"SELECT  * FROM user_exam_enroll_table where user_id = '$s_id' AND attendance_status = 'Absent' ");

                                                              $n  = mysqli_num_rows($query);


                                                                    while ($r = mysqli_fetch_assoc($query)){

                                                                            $exam_id  = $r['exam_id'];

                                                                              $check =  mysqli_query($conn,"SELECT * from exam_table where exam_id = '$exam_id' ");
                                                                              while($fetch = mysqli_fetch_assoc($check)){
                                                                               echo'
                                                                              <option value="'.$fetch['exam_id'].'">'.$fetch['exam_title'].'</option>';


                                                                                 }
                                                                               }


                                                                              ?>


                                                                      </select>
                                                                      </div>
                                                                      <button type="submit" name="send" class="btn btn-primary">Next</button>

                                                                  </div>

                                                                  <?php
                                                                  if (isset($_POST['send'])){
                                                                


                                                                    $email = $_POST['exam_id'];
                                                                    $f = "SELECT * FROM exam_table WHERE exam_id = '$email'";
                                                                    $s  = mysqli_query($conn,$f);
                                                                    $row = mysqli_fetch_assoc($s);
                                                                    $examcode = $row['exam_code'];

                                                                    //check agent Status
                                                                    $agent = mysqli_query($conn,"SELECT * FROM Agent WHERE exam_id = '$email' ");
                                                                    $n = mysqli_num_rows($agent);
                                                                    $row = mysqli_fetch_assoc($agent);
                                                                    $status = $row['Agent_status'];
                                                                    if ($n > 0) {
                                                                    
                                                                        if ($status == "Active"){
                                                                    $_SESSION['e_id'] = $_POST['exam_id'];
                                                                    $_SESSION['user_id'] = $_SESSION['student_email'];
                                                                    echo '<script>window.location.assign("agent/splash.php")</script>';
                                                                        }
                                                                        else{
                                                                            $_SESSION['e_id'] = $_POST['exam_id'];
                                                                            echo '<script>window.location.assign("exam.php")</script>';
                                                                        }
                                                                    
                                                                    }
                                                                    else{
                                                                         
                                                                        echo '<script>window.location.assign("exam.php")</script>';
                                                                    }



                                                                  }
                                                                  ?>
                                                                  <br>
                                                                  <br>



                                                              </div>
                                                                                         </form>


                                 </div>



                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->


                                <!-- end col -->
                            </div>
                                </div>
                                    </div>
    </div>    </div>    </div>


                        </div>
                        <!-- End Page-content -->


                    </div>
                        </div>    </div>
                    <!-- end main content-->
            <?php
            include("footer.php");
            ?>



</script>
