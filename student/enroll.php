<!DOCTYPE html>
<html lang = "en">
<?php
 include ('header.php');
?>

<div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18"><a href="main.php"><button class="btn btn-primary" type="submit">Back</button></a></h4>

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

                                <br><br>


                                      <div class="row">
                         <div class="col-lg-8">
                             <div class="card border border-primary">
                                 <div class="card-header bg-transparent border-primary">
                                     <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow mr-3"></i>Enroll for an Exam</h5>
                                 </div>
                                 <form action="enroll.php" method="post" enctype="multipart/form-data">
                                 <div class="card-body">
                                     <h5 class="card-title mt-0"></h5>
                        <div class="form-group">
                                  <label class="control-label">Select Exam</label>
                                  <select class="form-control select2" name = "exam_id">
                                      <option>Select</option>

                                      <?php
                                           include '../controller/connectio.php';
                                      $query  = mysqli_query($conn,"SELECT  * FROM exam_table where exam_status = 'pending' ");
                                      while($r = mysqli_fetch_assoc($query)){
                                           echo'
                                          <option value="'.$r['exam_id'].'">'.$r['exam_title'].'</option>';


                                             }
                                          ?>


                                  </select>
                              </div>


                              <br>
                                      <button class="btn btn-primary" name = "enroll" type="submit">Enroll</button>
                                 </div>
                             </div>
                         </div>


                     </div>



                                </form>

                                <?php



                          if(isset($_POST['enroll'])){
                                   $e_id =  mysqli_escape_string($conn,$_POST['exam_id']);
                                     $search = mysqli_query($conn,"SELECT * FROM user_exam_enroll_table WHERE user_id = '$s_id' AND exam_id = '$e_id'");
                                     $count = mysqli_num_rows($search);
                                     if($count > 0){
                                          echo $fname.'  '.$lname.' '.'already enrolled';
                                     }
                                     else{
                                        $insert = mysqli_query($conn,"INSERT INTO user_exam_enroll_table(user_id,exam_id,attendance_status)
                                         VALUES('$s_id',
                                                 '$e_id',
                                                'Absent')
                                         ");
                                         if($insert){
                                           echo $fname.'  '.$lname.' '.'Enrolled';
                                         }
                                     }

    }

                                ?>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                              <center>   <h4 class="card-title">Personal Information</h4></center>

                                <span class="d-none d-xl-inline-block ml-1"> Name : <?php echo $fname.'  '.$lname; ?></span> </span> ||   &nbsp;
                                <span class="d-none d-xl-inline-block ml-1"> Status : Logged In</span>
                                  <br>  <br>



                                            <div class="text-center" dir="ltr">
                                              <img class="rounded-circle header-profile-user" style="width:230px; height:230px;" src="<?php echo '../images_admin/'.$img; ?>" alt="Header Avatar">

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
