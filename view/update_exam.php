<!DOCTYPE html>
<html
 lang="en">

 <?php include('header.php'); ?>

  <?php include('navbar.php'); ?>

  <div class="main-content">

 <div class="page-content">




                   <!-- start page title -->
                   <div class="row">
                       <div class="col-12">
                           <div class="page-title-box d-flex align-items-center justify-content-between">
                               <h4 class="page-title mb-0 font-size-18">Update Exams</h4>

                               <div class="page-title-right">
                                   <ol class="breadcrumb m-0">
                                       <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                       <li class="breadcrumb-item active">Exam</li>
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

                                   <h4 class="card-title">Update Info</h4>

                      <?php
                      include '../controller/connection.php';
                      $id = $_GET['id'];
                      $query = mysqli_query($conn,"SELECT * FROM exam_table where exam_id = '$id'");
                      $row = mysqli_fetch_assoc($query);
                              $title     = $row['exam_title'];
                              $datetime    = $row['exam_datetime'];
                              $duration     = $row['exam_duration'];
                              $total    = $row['total_question'];
                              $correct     = $row['marks_per_right_answer'];
                              $wrong     = $row['marks_per_wrong_answer'];
                              $status     = $row['exam_status'];



                                   ?>

                            <form method="post" action="../controller/script.php" enctype="">
                                   <div class="table-responsive">
                                     <form method="post" id="exam_form" action="../controller/script.php">
                                        <div class="modal-content">
                                          <!-- Modal Header -->
                                          <div class="modal-header">
                                              <h4 class="modal-title" id="modal_title">Add Exam</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          </div>

                                          <!-- Modal body -->
                                          <div class="modal-body">
                                              <div class="form-group">
                                                <div class="row">
                                                    <label class="col-md-4 text-right">Exam Title <span class="text-danger">*</span></label>
                                                    <div class="col-md-8">
                                                      <input type="text"  value = "<?php echo $title; ?>" name="online_exam_title" id="online_exam_title" required class="form-control" />
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <div class="row">
                                                    <label class="col-md-4 text-right">Exam Date & Time <span class="text-danger">*</span></label>
                                                    <div class="col-md-8">
                                                      <input type="datetime-local" value ="<?php echo $datetime; ?>" name="online_exam_datetime"  class="form-control"  />
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <div class="row">
                                                    <label class="col-md-4 text-right">Exam Duration <span class="text-danger">*</span></label>
                                                    <div class="col-md-8">
                                                        <option value="5">5 Minute</option>
                                                        <option value="30">30 Minute</option>
                                                        <option value="60">1 Hour</option>
                                                        <option value="120">2 Hour</option>
                                                        <option value="180">3 Hour</option>
                                                      </select>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <div class="row">
                                                    <label class="col-md-4 text-right">Total Question <span class="text-danger">*</span></label>
                                                    <div class="col-md-8">
                                                      <select name="total_question" required id="total_question" class="form-control">
                                                         <option value="">Select</option>
                                                         <option value="5">5 Questions </option>
                                                         <option value="10">10 Questions </option>
                                                         <option value="25">25 Questions </option>
                                                         <option value="50">50 Questions </option>
                                                         <option value="100">100 Questions </option>
                                                         <option value="200">200 Questions </option>
                                                         <option value="300">300 Questions </option>
                                                      </select>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <div class="row">
                                                    <label class="col-md-4 text-right">Marks for Right Answer <span class="text-danger">*</span></label>
                                                    <div class="col-md-8">
                                                      <select name="marks_per_right_answer" required id="marks_per_right_answer" class="form-control">
                                                        <option value="">Select</option>
                                                        <option value="1">+1 Mark</option>
                                                        <option value="2">+2 Mark</option>
                                                        <option value="3">+3 Mark</option>
                                                        <option value="4">+4 Mark</option>
                                                        <option value="5">+5 Mark</option>
                                                      </select>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <div class="row">
                                                    <label class="col-md-4 text-right">Marks for Wrong Answer <span class="text-danger">*</span></label>
                                                    <div class="col-md-8">
                                                      <select name="marks_per_wrong_answer" required id="marks_per_wrong_answer" class="form-control">
                                                         <option value="">Select</option>
                                                         <option value="1">0 Mark</option>
                                                         <option value="1">-1 Mark</option>
                                                         <option value="1.25">-1.25 Marks</option>
                                                         <option value="1.50">-1.50 Marks</option>
                                                         <option value="2">-2 Marks</option>
                                                      </select>
                                                    </div>
                                                </div>
                                              </div>
                                          </div>

                                          <!-- Modal footer -->
                                          <div class="modal-footer">
                                            <input type="hidden" name="online_exam_id" id="online_exam_id" />

                                            <input type="hidden" name="page" value="exam" />



                                            <input type="submit" name="AddExam" id="button_action" class="btn btn-primary waves-effect waves-light" value="Add" />

                                              <button type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                    </form>
                                     </form>
                                   </div>

                               </div>
                           </div>
                       </div>
                       <!-- end col -->
                   </div>
                   <!-- end row -->

               </div>
               <!-- End Page-content -->


  <?php include('footer.php'); ?>

</html>
