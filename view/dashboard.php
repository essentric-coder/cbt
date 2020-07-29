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
                                                      <div class = ""><img  style="height:100px;width:100px;" class="rounded-circle header-profile-user" src="../assets/img/1.png" alt="Header Avatar"></div>
                                                  </div>
                                              </div>
                                          </div>


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
                                                      <div>
                                                              <div class = ""><img  style="height:100px;width:100px;" class="rounded-circle header-profile-user" src="../assets/img/2.png" alt="Header Avatar"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>


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
                                                      <div >
                                                           <div class = ""><img  style="height:100px;width:100px;" class="rounded-circle header-profile-user" src="../assets/img/4.png" alt="Header Avatar"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>


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
                                                      <div >

                                                         <div class = ""><img  style="height:100px;width:100px;" class="rounded-circle header-profile-user" src="../assets/img/6.png" alt="Header Avatar"></div>

                                                      </div>
                                                  </div>
                                              </div>
                                          </div>


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
                                                      <div >
                                                               <div class = ""><img  style="height:100px;width:100px;" class="rounded-circle header-profile-user" src="../assets/img/5.png" alt="Header Avatar"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>


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
                                                      <div >
                                                          <div class = ""><img  style="height:100px;width:100px;" class="rounded-circle header-profile-user" src="../assets/img/3.png" alt="Header Avatar"></div>

                                                      </div>
                                                  </div>
                                              </div>
                                          </div>


                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>

                  </div>
                  <?php

                  echo ' <div class="row">
                                                          <div class="col-12">
                                                              <div class="card">
                                                                  <div class="card-body">

                                                                      <h4 class="card-title">Admin Logs</h4>
                                                                      <p class="card-title-desc">
                                                                      </p>

                                                                                                              <div class="table-rep-plugin">
                                                                                                        <div class="table-responsive mb-0" data-pattern="priority-columns">                                <br>

                                                                                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                                                            <thead>
                                                                                                                <tr>
                                                                                                                <th scope="col">Id</th>
                                                                                                                <th scope="col">Admin_id</th>
                                                                                                                <th scope="col">Fullname</th>
                                                                                                                <th scope="col">Access Level</th>
                                                                                                                <th scope="col" >Status</th>
                                                                                                                <th scope="col">Date and Time </th>
                                                                                                                <th scope="col" colspan="2" >Action</th>
                                                                                                                </tr>
                                                                                                            </thead>

                                                                                                            <tbody>';

                                                                                $email_id  = $_SESSION['email'];
                                                                                $query = mysqli_query($conn,"SELECT * FROM user_logs order by id desc limit 5");
                                                                                  $url = "../controller/script.php?log_id=".$email_id;
                                                                                while ($row = mysqli_fetch_assoc($query)) {

                                                                                    echo ' <tr>
                                                                                      <td>'.$row['Id'].'</td>
                                                                                      <td>
                                                                                          <a href="#" class="text-body font-weight-medium">'.$row['admin_id'].'</a>
                                                                                      </td>
                                                                                      <td>'.$row['fullname'].'</td>
                                                                                      <td>'.$row['access_level'].'</td>
                                                                                      <td><span class="badge badge-soft-success font-size-12">'.$row['status'].'</span></td>
                                                                                      <td>'.$row['datetime'].'</td>
                                                                                      <td><a href="'.$url.'" class="btn btn-primary btn-sm">Deactivate</a>
                                                                                            <a href="'.$url.'" class="btn btn-primary btn-sm">Activate</a>
                                                                                      </td>

                                                                                  </tr>';}


                  echo '</tbody>
                        </table>

                      </div></div>
                      </div>
                  </div>
                  </div>
                  <!-- end col -->
              </div>';



                  ?>




                                   <!-- end row -->
                  <!-- end row -->








          <!-- end main content-->



<?php

include('footer.php');

?>

</html>
