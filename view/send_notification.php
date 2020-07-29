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
                                  <h4 class="page-title mb-0 font-size-18">Notification</h4>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                          <li class="breadcrumb-item active">Send Notification</li>
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

                                      <h4 class="card-title">Notifications</h4>
                                      <p class="card-title-desc">
                                      </p>


                     <button type="button" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" data-target="#myModal">
                                                                 <i class="bx bx-plus font-size-16 align-middle mr-2"></i> Send Notification
                                                             </button>
                            <br> <br>

                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    	<div class="modal-dialog">
                      	<form method="post" id="exam_form" action="../controller/script.php">
                        		<div class="modal-content">
                        			<!-- Modal Header -->
                          		<div class="modal-header">
                            			<h4 class="modal-title" id="modal_title">Send Notification</h4>
                            			<button type="button" class="close" data-dismiss="modal">&times;</button>
                          		</div>

                          		<!-- Modal body -->
                          		<!-- Modal body -->
                                  <div class="modal-body">
                                                  			<div class="form-group">
                                                    			<div class="row">
                                                      				<label class="col-md-4 text-right">Title <span class="text-danger">*</span></label>
                                        	              			<div class="col-md-8">
                                        	                			<input type="text"  required name="title" id="question_title" autocomplete="off" class="form-control" />
                                        	                		</div>
                                                    			</div>
                                                  			</div>
                                                  			<div class="form-group">
                                                    			<div class="row">
                                                      				<label class="col-md-4 text-right">Select Exam<span class="text-danger">*</span></label>
                                                              <div class="col-md-8">
                                        	                			<select name="exam_id" required id="answer_option" class="form-control">
                                                                            <?php
                                                                            include '../controller/connection.php';
                                                                            $con = mysqli_query($conn,"SELECT exam_title,exam_id from exam_table");

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
                                                      				<label class="col-md-4 text-right">Message <span class="text-danger">*</span></label>
                                        	              			<div class="col-md-8">
                                        	                			<textarea name="message" required id="option_title_2" autocomplete="off" class="form-control" > </textarea>
                                        	                		</div>
                                                    			</div>
                                                  			</div>


                                                		</div>

                  	        	<!-- Modal footer -->
                  	        	<div class="modal-footer">
                  	        		<input type="hidden" name="online_exam_id" id="online_exam_id" />

                  	        		<input type="hidden" name="page" value="exam" />



                  	        		<input type="submit" name="send" id="button_action" class="btn btn-primary waves-effect waves-light" value="Send" />

                  	          		<button type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Close</button>
                  	        	</div>
                          	</div>
                      	</form>
                    	</div>
                  </div>



                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Title</th>
                                                        <th>Exam_ID</th>
                                                        <th>Message</th>
                                                        <th>Time</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                  <?php include '../controller/connection.php';
                                                  $sch = mysqli_query($conn,"SELECT * FROM send_notification order by n_id desc");
                                                  while($row = mysqli_fetch_assoc($sch)){
                                                    $del = "delete/delete_note.php?id=".$row['n_id'];
                                                  echo '<tr>
                                                        <td>'.$row['n_id'].'</td>
                                                        <td>'.$row['title'].'</td>
                                                        <td>'.$row['exam_id'].'</td>
                                                        <td>'.$row['message'].'</td>
                                                        <td>'.$row['created_on'].'</td>
                                                        <td>
                                                                    <div class="badge badge-soft-warning font-size-12">'.$row['status'].'</div>
                                                                </td>
                                                                <td>

                                                                    <a href = " '.$del.' " class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                </td>
                                                    </tr>';
                                                  }
                                                    ?>


                                                </tbody>
                                            </table>
                              </div>
                          </div>
                          <!-- end col -->
                      </div>
                      <!-- end row -->

                  </div>



  <?php include('footer.php'); ?>

</html>
