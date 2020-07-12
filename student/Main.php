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
                         <div class="col-lg-4">
                             <div class="card border border-primary">
                                 <div class="card-header bg-transparent border-primary">
                                     <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow mr-3"></i>Enroll for Exam</h5>
                                 </div>
                                 <div class="card-body">

                                     <p class="card-text">
                                                 <img class="rounded-circle header-profile-user" style="width:150px; height:150px;" src="../assets/images/c.png" alt="Header Avatar">
                                     </p>
                                    <a href = "enroll.php">  <button class="btn btn-primary" type="submit">Enroll</button> </a>
                                 </div>
                             </div>
                         </div>

                         <div class="col-lg-4">
                             <div class="card border border-danger">
                                 <div class="card-header bg-transparent border-danger">
                                     <h5 class="my-0 text-danger"><i class="mdi mdi-block-helper mr-3"></i>Take an Exam</h5>
                                 </div>
                                 <div class="card-body">

                                     <p class="card-text">
                                       <img class="rounded-circle header-profile-user" style="width:150px; height:150px;" src="../assets/images/e.png" alt="Header Avatar">

                                     </p>
                                        <a href = "exam/exam.php"><button class="btn btn-primary" type="submit">Start</button></a>
                                 </div>
                             </div>
                         </div>

                         <div class="col-lg-4">
                             <div class="card border border-success">
                                 <div class="card-header bg-transparent border-success">
                                     <h5 class="my-0 text-success"><i class="mdi mdi-check-all mr-3"></i>Check Results</h5>
                                 </div>
                                 <div class="card-body">

                                     <p class="card-text">
                                       <img class="rounded-circle header-profile-user" style="width:150px; height:150px;" src="../assets/images/n.png" alt="Header Avatar">
                                     </p>
                                        <a href = "check.php"><button class="btn btn-primary" type="submit">Check</button></a>
                                 </div>
                             </div>
                         </div>
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
