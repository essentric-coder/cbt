<!DOCTYPE html>
<html lang = "en">

<?php

 include ('header.php');
?>

<?php
    include '../controller/connection.php';

    //count students.
    $students_query = mysqli_query($conn,"SELECT * FROM student_table");
    $students_no  = mysqli_num_rows($students_query);

    //count users.
    $admin_query = mysqli_query($conn,"SELECT * FROM admin_table");
    $admin_no  = mysqli_num_rows($admin_query);
    //count user logs.
    $userlogs_query = mysqli_query($conn,"SELECT * FROM user_logs");
    $userlogs_no  = mysqli_num_rows($userlogs_query);
    //count notification
    $notice_query = mysqli_query($conn,"SELECT * FROM send_notification");
    $notice_no  = mysqli_num_rows($notice_query);
    //count Exam
    $exam_query = mysqli_query($conn,"SELECT * FROM exam_table");
    $exam_no  = mysqli_num_rows($exam_query);
    //count questions
    $question_query = mysqli_query($conn,"SELECT * FROM question_table");
    $question_no  = mysqli_num_rows($question_query);

?>

<?php

include('navbar.php');

?>
<!-- Start right Content here -->
          <!-- ============================================================== -->
          <div class="main-content">

              <div class="page-content">

                  <!-- start page title -->
                  <div class="row">
                      <div class="col-12">
                          <div class="page-title-box d-flex align-items-center justify-content-between">
                              <h4 class="page-title mb-0 font-size-18">Dashboard</h4>

                              <div class="page-title-right">
                                  <ol class="breadcrumb m-0">
                                      <li class="breadcrumb-item active">Admin Dashboard </li>
                                  </ol>
                              </div>

                          </div>
                      </div>
                  </div>
                  <!-- end page title -->

                  <div class="row">
                      <div class="col-xl-12">

                          <div class="row">
                              <div class="col-md-6">
                                  <div class="card">
                                      <div class="card-body">
                                          <div class="row">
                                              <div class="col-8">
                                                  <div>
                                                      <p class="text-muted font-weight-medium mt-1 mb-2">Users</p>
                                                      <h4><?php echo $admin_no; ?></h4>
                                                  </div>
                                              </div>

                                              <div class="col-4">
                                                  <div>
                                                      <div class = ""></div>
                                                  </div>
                                              </div>
                                          </div>

                                          <p class="mb-0"><span class="badge badge-soft-success mr-2"> 0.8% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="card">
                                      <div class="card-body">
                                          <div class="row">
                                              <div class="col-8">
                                                  <div>
                                                      <p class="text-muted font-weight-medium mt-1 mb-2">Students</p>
                                                      <h4><?php echo $students_no; ?></h4>
                                                  </div>
                                              </div>

                                              <div class="col-4">
                                                  <div>
                                                      <div></div>
                                                  </div>
                                              </div>
                                          </div>

                                          <p class="mb-0"><span class="badge badge-soft-success mr-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-6">
                                  <div class="card">
                                      <div class="card-body">
                                          <div class="row">
                                              <div class="col-8">
                                                  <div>
                                                      <p class="text-muted font-weight-medium mt-1 mb-2">Exam</p>
                                                      <h4><?php echo $exam_no; ?></h4>
                                                  </div>
                                              </div>

                                              <div class="col-4">
                                                  <div>
                                                      <div ></div>
                                                  </div>
                                              </div>
                                          </div>

                                          <p class="mb-0"><span class="badge badge-soft-success mr-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-6">
                                  <div class="card">
                                      <div class="card-body">
                                          <div class="row">
                                              <div class="col-8">
                                                  <div>
                                                      <p class="text-muted font-weight-medium mt-1 mb-2">Questions</p>
                                                      <h4><?php echo $question_no; ?></h4>
                                                  </div>
                                              </div>

                                              <div class="col-4">
                                                  <div>
                                                      <div ></div>
                                                  </div>
                                              </div>
                                          </div>

                                          <p class="mb-0"><span class="badge badge-soft-success mr-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-6">
                                  <div class="card">
                                      <div class="card-body">
                                          <div class="row">
                                              <div class="col-8">
                                                  <div>
                                                      <p class="text-muted font-weight-medium mt-1 mb-2">User logs</p>
                                                      <h4><?php echo $userlogs_no; ?></h4>
                                                  </div>
                                              </div>

                                              <div class="col-4">
                                                  <div>
                                                      <div ></div>
                                                  </div>
                                              </div>
                                          </div>

                                          <p class="mb-0"><span class="badge badge-soft-success mr-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-6">
                                  <div class="card">
                                      <div class="card-body">
                                          <div class="row">
                                              <div class="col-8">
                                                  <div>
                                                      <p class="text-muted font-weight-medium mt-1 mb-2">Sent notifications</p>
                                                      <h4><?php echo $notice_no; ?></h4>
                                                  </div>
                                              </div>

                                              <div class="col-4">
                                                  <div>
                                                      <div ></div>
                                                  </div>
                                              </div>
                                          </div>

                                          <p class="mb-0"><span class="badge badge-soft-success mr-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>

                  </div>
                  <!-- end row -->



                  <div class="row">
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">User Logs</h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered">
                                            <thead>
                                                <tr>

                                                    <th scope="col">Id</th>
                                                    <th scope="col">Admin_id</th>
                                                    <th scope="col">Fullname</th>
                                                    <th scope="col">Access Level</th>
                                                    <th scope="col" >Status</th>
                                                    <th scope="col">Date and Time </th>
                                                    <th scope="col" >Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    include '../controller/connection.php';
                                                    $email_id  = $_SESSION['email'];
                                                    $query = mysqli_query($conn,"SELECT * FROM user_logs");

                                                    $url = "../controller/script.php?log_id=".$email_id;

                                              while($row = mysqli_fetch_assoc($query)){
                                                  echo  '<tr>
                                                    <td>'.$row['Id'].'</td>
                                                    <td>
                                                        <a href="#" class="text-body font-weight-medium">'.$row['admin_id'].'</a>
                                                    </td>
                                                    <td>'.$row['fullname'].'</td>
                                                    <td>'.$row['access_level'].'</td>
                                                    <td><span class="badge badge-soft-success font-size-12">'.$row['status'].'</span></td>
                                                    <td>'.$row['datetime'].'</td>
                                                    <td><a href="'.$url.'" class="btn btn-primary btn-sm">Deactivate</a></td>
                                                </tr>';
                                              }
                                              ?>



                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="mt-3">
                                        <ul class="pagination pagination-rounded justify-content-center mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="#">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                  </div>
                  <!-- end row -->
              </div>
              <!-- End Page-content -->



          <!-- end main content-->



<?php

include('footer.php');

?>

</html>
