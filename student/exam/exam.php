



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
                                        <h4 class="page-title mb-0 font-size-18">Start Exam</h4>

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


                                                    <form  method="POST" action="examination.php" >

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
                                                                                       <p class="text-center">Click on Start to begin !</p>
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
                                                                              // echo'<option value="'.$fetch['exam_id'].'">'.$fetch['exam_title'].'</option>';


                                                                                 }
                                                                               }


                                                                              ?>

                                                                  <div class="col-md-6">
                                                                  <div class="form-group">
                                                                      <label >Subject </label>

                                                                      <input type="text" readonly class="form-control"  value ="<?php echo $_SESSION['e_id'];?>"name = "exam_id" required>


                                                    

                                                                      </select>
                                                                      </div>
                                                                      <button type="submit" name="send" class="btn btn-primary">Start</button>

                                                                  </div>

                                                                  <?php
                                                                  if (isset($_POST['send'])){


                                                                    $email = $_POST['exam_id'];
                                                                    $f = "SELECT * FROM exam_table WHERE exam_id = '$email'";
                                                                    $s  = mysqli_query($conn,$f);
                                                                    $row = mysqli_fetch_assoc($s);
                                                                    $examcode = $row['exam_code'];


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
