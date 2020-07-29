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
                      <h4 class="page-title mb-0 font-size-18">Smart</h4>

                      <div class="page-title-right">
                          <ol class="breadcrumb m-0">
                              <li class="breadcrumb-item"><a href="javascript: void(0);">CBT</a></li>
                              <li class="breadcrumb-item active">Intelligent Agent</li>
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

                        <button type="button" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" data-target="#myModal">
                                                                    <i class="bx bx-plus font-size-16 align-middle mr-2"></i> Add Agent
                                                                </button>
                               <br> <br>

                               <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                       	<div class="modal-dialog">
                         	<form method="post" id="exam_form" action="activate_agent.php">
                           		<div class="modal-content">
                           			<!-- Modal Header -->
                             		<div class="modal-header">
                               			<h4 class="modal-title" id="modal_title"> Add Agent</h4>
                               			<button type="button" class="close" data-dismiss="modal">&times;</button>
                             		</div>

                             		<!-- Modal body -->
                             		<!-- Modal body -->
                                     <div class="modal-body">
                                                     			<div class="form-group">

                                                     			</div>
                                                     			<div class="form-group">
                                                       			<div class="row">
                                                         				<label class="col-md-4 text-right">Select Exam<span class="text-danger">*</span></label>
                                                                 <div class="col-md-8">
                                           	                			<select name="exam_id" required id="answer_option" class="form-control">
                                                                         <option value="Select">Select</option>
                                                                               <?php
                                                                               include '../controller/connection.php';
                                                                               $con = mysqli_query($conn,"SELECT exam_title,exam_id from exam_table where exam_status = 'pending' ");

                                                                               while($row = mysqli_fetch_assoc($con)) {
                                                                                   echo '<option value="'.$row['exam_id'].'">'.$row['exam_title'].'</option>';
                                                                               }
                                                                               ?>

                                           	                			</select>
                                           	                		</div>
                                                       			</div>
                                                     			</div>
                                                     			<div class="form-group">
                                                       			<div class="row">
                                                         				<label class="col-md-4 text-right">Status <span class="text-danger">*</span></label>
                                                                <div class="col-md-8">
                                                                 <select name="status" required id="answer_option" class="form-control" required>
                                                                             <option value="Select">Select</option>
                                                                              <option value="Active">Activate</option>
                                                                              <option value="Not Active">Deactivate</option>

                                                                 </select>
                                                             </div>
                                                       			</div>
                                                     			</div>


                                                   		</div>

                     	        	<!-- Modal footer -->
                     	        	<div class="modal-footer">
                     	        		<input type="hidden" name="online_exam_id" id="online_exam_id" />

                     	        		<input type="hidden" name="page" value="exam" />



                     	        		<input type="submit" name="add" id="button_action" class="btn btn-primary waves-effect waves-light" value="Add" />

                     	          		<button type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Close</button>
                     	        	</div>
                             	</div>
                         	</form>
                       	</div>
                     </div>

                     <?php
                     include '../controller/connection.php';

                     if(isset($_POST['add'])){
                       $exam_id =  mysqli_escape_string($conn,$_POST['exam_id']);
                       $status =  mysqli_escape_string($conn,$_POST['status']);

                       $check = mysqli_query($conn,"SELECT * FROM exam_table WHERE exam_id = '$exam_id'  ");
                       $row = mysqli_fetch_assoc($check);
                       $exam_title = $row['exam_title'];
                       $exam_status = $row['exam_status'];
                        //check if agent is available
                        $c = mysqli_query($conn, "SELECT * FROM agent WHERE exam_id = '$exam_id' ");
                        $n = mysqli_num_rows($c);

                        if ($n > 0) {
                          echo "Please Activate the Agent. Agent already exist";

                        }
                        else {
                        //insert  =
                        $query  = mysqli_query($conn,"INSERT INTO agent (exam_id,exam_title,Agent_status,exam_status) VALUES('$exam_id','$exam_title','$status','$exam_status') ");

                      }

                     }

                      ?>



                          </p>

                          <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                              <thead>
                                  <tr>
                                    <th>Id</th>
                                     <th>Exam Id</th>
                                      <th>Exam Title</th>
                                      <th>Exam Status</th>
                                      <th>Agent Status</th>

                                      <th colspan="2">Action</th>



                                  </tr>
                              </thead>
                              <tbody>

<?php
 $q = mysqli_query($conn,"SELECT * FROM agent order by id desc");
while($row = mysqli_fetch_assoc($q)) {
  $id = $row['id'];
  $start = "start.php?id=".$id;
  $stop = "stop.php?id=".$id;
  $del = "delete/delete_agent.php?id=".$id;
                              echo '

                                  <tr><td>'.$row['id'].'</td>
                                      <td>'.$row['exam_id'].'</td>
                                      <td>'.$row['exam_title'].'</td>

                                                  <div class="badge badge-soft-warning font-size-12"><td>'.$row['exam_status'].'</td> </div>
                                                    <div class="badge badge-soft-warning font-size-12"><td>'.$row['Agent_status'].'</td></div>

                                              <td colspan = "2">
                                                <a href = "'.$start.'"> <button type="button" class="btn btn-success waves-effect waves-light  btn-sm btn-rounded">Start</button></a>
                                                <a href = "'.$stop.'">  <button type="button" class="btn btn-danger waves-effect waves-light  btn-sm btn-rounded">Stop</button></a>
                                               <a href = "'.$del.'">    <button type="button" class="btn btn-danger waves-effect waves-light  btn-sm btn-rounded">Delete</button></a>
                                              </td>





                                  </tr>
                                  ';
                                }




                              ?>
                              </tbody>
                          </table>

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
