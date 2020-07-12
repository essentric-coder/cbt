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
                                        <div class="col-8">
                                            <div class="card">
                                                <div class="card-body">

                                                    <h4 class="card-title">Results</h4>

                                                    </p>

                                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>id</th>
                                                                <th>exam_id</th>
                                                                <th>exam_title</th>
                                                                <th>student_id</th>
                                                                <th>fullname</th>
                                                                <th>score</th>
                                                                <th>grade</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                            <?php
                                              $s = mysqli_query($conn,"SELECT * FROM results WHERE student_id = '$s_id'");
                                              while($row = mysqli_fetch_assoc($s)){
                                                           echo  '<tr>
                                                              <td>'.$row['id'].'</td>
                                                              <td>'.$row['exam_id'].'</td>
                                                              <td>'.$row['exam_title'].'</td>
                                                              <td>'.$row['student_id'].'</td>
                                                              <td>'.$row['fullname'].'</td>
                                                              <td>'.$row['score'].'</td>
                                                              <td>'.$row['grade'].'</td>
                                                            </tr>';
                                                          }
                                                          ?>


                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>

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
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->


                    <!-- end col -->
                </div>



            </div>
            <!-- End Page-content -->


        </div>
        <!-- end main content-->

<?php

include('footer.php');

?>
