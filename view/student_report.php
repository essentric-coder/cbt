<!DOCTYPE html>
<html lang = "en">
<?php
 include ('header.php');
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
                              <h4 class="page-title mb-0 font-size-18">Student Examination Report </h4>

                              <div class="page-title-right">
                                  <ol class="breadcrumb m-0">
                                      <li class="breadcrumb-item"><a href="javascript: void(0);">Student</a></li>
                                      <li class="breadcrumb-item active">Report</li>
                                  </ol>
                              </div>

                          </div>
                      </div>
                  </div>
                  <!-- end page title -->


                  <div class="row">
                                 <div class="col-12">
                                     <div class="card">
                                         <div class="card-body">
                                           <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                            <?php
                            include '../controller/connection.php';


                                    $output = '';

                                    $u = mysqli_query($conn,"SELECT * FROM student_table");
                                    $g  = mysqli_fetch_assoc($u);
                                    $uid = $g['student_id'];

                                       $s = mysqli_query($conn,"SELECT * FROM result ");



                                    ?>
                                      <tr>
                                          <th>Id</th>
                                          <th>Student Id</th>
                                          <th>Fullname</th>
                                          <th>Subject</th>
                                          <th>Attempted Question</th>
                                          <th>Obtained Marks</th>
                                          <th>Exam Date</th>
                                      </tr>
                                  </thead>

                                  <tbody>
                                  <?php
                                    while($row = mysqli_fetch_assoc($s)){
                                      $eid = $row['exam_id'];
                                       $sub = mysqli_query($conn,"SELECT * FROM exam_table ");
                                       $r = mysqli_fetch_assoc($sub);
                                       $subj = $r['exam_title'];
                                       $total = $r['total_question'];



                                    echo '<tr>
                                                      <td>'.$row['id'].'</td>
                                                      <td>'.$row['student_id'].'</td>
                                                      <td>'.$row['fullname'].'</td>
                                                      <td>'.$subj.'</td>
                                                      <td>'.$row['attend_que'].'</td>
                                                      <td>'.$row['obtained_marks'].'</td>
                                                      <td>'.$row['exam_date'].'</td>
                                                   </tr>
                                                        ';
                                    }
                                    ?>

                                  </tbody>
                              </table>


                                     </div>
                                 </div> <!-- end col -->
                             </div> <!-- end row -->



              </div>
              <!-- End Page-content -->

          <!-- end main content-->




<?php

include('footer.php');

?>

</html>
