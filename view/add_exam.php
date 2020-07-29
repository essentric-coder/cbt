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
                                  <h4 class="page-title mb-0 font-size-18">Add Exam</h4>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="javascript: void(0);">View</a></li>
                                          <li class="breadcrumb-item active">Exam</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->


  <?php

                    echo'  <div class="row">
                          <div class="col-12">
                              <div class="card">
                                  <div class="card-body">

                                      <h4 class="card-title">Exam Database</h4>
                                      <p class="card-title-desc">
                                      </p>
                                      <button type="button" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" data-target="#myModal">
                                                                                  <i class="bx bx-plus font-size-16 align-middle mr-2"></i> New Exam
                                                                              </button>


                                                                              <br>
                                                                              <div class="table-rep-plugin">
                                                                        <div class="table-responsive mb-0" data-pattern="priority-columns">                                <br>


                                                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                            <thead>
                                                                                <tr>
                                                                                <th>Exam ID</th>
                                                                                <th>Title</th>
                                                                                <th>Date & Time</th>
                                                                                <th>Duration</th>
                                                                                <th>Total Questions </th>



                                                                                <th>Status</th>
                                                                                
                                                                                
																				<th>Exam Created On</th>
																				<th>Action</th>
                                                                                </tr>
                                                                            </thead>

                                                                            <tbody>';

                                                                            $query = mysqli_query($conn,"SELECT * FROM exam_table");
                                                                            while($row = mysqli_fetch_assoc($query)){
                                                                                $title = $row['exam_title'];
                                                                                $timedate = $row['exam_datetime'];
                                                                                $duration = $row['exam_duration'];
                                                                                $question = $row['total_question'];
                                                                                $correct = $row['marks_per_right_answer'];
                                                                                $wrong = $row['marks_per_wrong_answer'];
                                                                                $created_on = $row['exam_created_on'];
                                                                                $status = $row['exam_status'];
                                                                                $examcode = $row['exam_code'];
                                                                                $exam_id = $row['exam_id'];

                                                                                $s_id  = $row['exam_id'];

                                                                                $url = "update_exam.php?id=".$s_id;
                                                                                $del = "delete/delete_exam.php?id=".$s_id;

                                                                            echo '<tr>
                                                                                <td>'.$exam_id.'</td>
                                                                                <td>'.$title.'</td>
                                                                                <td>'.$timedate.'</td>
                                                                                <td>'.$duration.'</td>
                                                                                <td>'.$question.' </td>



                                                                                <td>
                                                                                            <div class="badge badge-soft-warning font-size-12">'.$status.'</div>
                                                                                        </td>
                                                                                       
                                                                                           
																							<td>'.$created_on.'</td>
																							<td>
																							<a href = "'.$del.'"  class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
																							</td>
																							
																																															
																																															
                                                                                </tr>'; }


                                                                          echo '</tbody>
                                                                        </table>



                            </div>
                        </div>

                          </div>
                          <!-- end col -->
                      </div>';
 ?>

                      <!-- end row -->

                  </div>

                  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    	<div class="modal-dialog">
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
                  	                			<input type="text"  name="online_exam_title" id="online_exam_title" required class="form-control" />
                  	                		</div>
                              			</div>
                            			</div>
                            			<div class="form-group">
                              			<div class="row">
                                				<label class="col-md-4 text-right">Exam Date & Time <span class="text-danger">*</span></label>
                  	              			<div class="col-md-8">
                  	                			<input type="datetime-local" name="online_exam_datetime" id="online_exam_datetime" class="form-control"  />
                  	                		</div>
                              			</div>
                            			</div>
                            			<div class="form-group">
                              			<div class="row">
                                				<label class="col-md-4 text-right">Exam Duration <span class="text-danger">*</span></label>
                  	              			<div class="col-md-8">
                  	                			<select name="online_exam_duration" required id="online_exam_duration" class="form-control">
                  	                				<option value="">Select</option>
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
                    	</div>
                  </div>




                  <script>

                  $(document).ready(function(){

                  	var dataTable = $('#exam_data_table').DataTable({
                  		"processing" : true,
                  		"serverSide" : true,
                  		"order" : [],
                  		"ajax" : {
                  			url: "ajax_action.php",
                  			method:"POST",
                  			data:{action:'fetch', page:'exam'}
                  		},
                  		"columnDefs":[
                  			{
                  				"targets":[7, 8, 9],
                  				"orderable":false,
                  			},
                  		],
                  	});

                  	function reset_form()
                  	{
                  		$('#modal_title').text('Add Exam Details');
                  		$('#button_action').val('Add');
                  		$('#action').val('Add');
                  		$('#exam_form')[0].reset();
                  		$('#exam_form').parsley().reset();
                  	}

                  	$('#add_button').click(function(){
                  		reset_form();
                  		$('#formModal').modal('show');
                  		$('#message_operation').html('');
                  	});

                  	var date = new Date();

                  	date.setDate(date.getDate());

                  	$('#online_exam_datetime').datetimepicker({
                  		startDate :date,
                  		format: 'yyyy-mm-dd hh:ii',
                  		autoclose:true
                  	});

                  	$('#exam_form').parsley();

                  	$('#exam_form').on('submit', function(event){
                  		event.preventDefault();

                  		$('#online_exam_title').attr('required', 'required');

                  		$('#online_exam_datetime').attr('required', 'required');

                  		$('#online_exam_duration').attr('required', 'required');

                  		$('#total_question').attr('required', 'required');

                  		$('#marks_per_right_answer').attr('required', 'required');

                  		$('#marks_per_wrong_answer').attr('required', 'required');

                  		if($('#exam_form').parsley().validate())
                  		{
                  			$.ajax({
                  				url:"ajax_action.php",
                  				method:"POST",
                  				data:$(this).serialize(),
                  				dataType:"json",
                  				beforeSend:function(){
                  					$('#button_action').attr('disabled', 'disabled');
                  					$('#button_action').val('Validate...');
                  				},
                  				success:function(data)
                  				{
                  					if(data.success)
                  					{
                  						$('#message_operation').html('<div class="alert alert-success">'+data.success+'</div>');

                  						reset_form();

                  						dataTable.ajax.reload();

                  						$('#formModal').modal('hide');
                  					}

                  					$('#button_action').attr('disabled', false);

                  					$('#button_action').val($('#action').val());
                  				}
                  			});
                  		}
                  	});

                  	var exam_id = '';

                  	$(document).on('click', '.edit', function(){
                  		exam_id = $(this).attr('id');

                  		reset_form();

                  		$.ajax({
                  			url:"ajax_action.php",
                  			method:"POST",
                  			data:{action:'edit_fetch', exam_id:exam_id, page:'exam'},
                  			dataType:"json",
                  			success:function(data)
                  			{
                  				$('#online_exam_title').val(data.online_exam_title);

                  				$('#online_exam_datetime').val(data.online_exam_datetime);

                  				$('#online_exam_duration').val(data.online_exam_duration);

                  				$('#total_question').val(data.total_question);

                  				$('#marks_per_right_answer').val(data.marks_per_right_answer);

                  				$('#marks_per_wrong_answer').val(data.marks_per_wrong_answer);

                  				$('#online_exam_id').val(exam_id);

                  				$('#modal_title').text('Edit Exam Details');

                  				$('#button_action').val('Edit');

                  				$('#action').val('Edit');

                  				$('#formModal').modal('show');
                  			}
                  		})
                  	});

                  	$(document).on('click', '.delete', function(){
                  		exam_id = $(this).attr('id');
                  		$('#deleteModal').modal('show');
                  	});

                  	$('#ok_button').click(function(){
                  		$.ajax({
                  			url:"ajax_action.php",
                  			method:"POST",
                  			data:{exam_id:exam_id, action:'delete', page:'exam'},
                  			dataType:"json",
                  			success:function(data)
                  			{
                  				$('#message_operation').html('<div class="alert alert-success">'+data.success+'</div>');
                  				$('#deleteModal').modal('hide');
                  				dataTable.ajax.reload();
                  			}
                  		})
                  	});

                  	function reset_question_form()
                  	{
                  		$('#question_modal_title').text('Add Question');
                  		$('#question_button_action').val('Add');
                  		$('#hidden_action').val('Add');
                  		$('#question_form')[0].reset();
                  		$('#question_form').parsley().reset();
                  	}

                  	$(document).on('click', '.add_question', function(){
                  		reset_question_form();
                  		$('#questionModal').modal('show');
                  		$('#message_operation').html('');
                  		exam_id = $(this).attr('id');
                  		$('#hidden_online_exam_id').val(exam_id);
                  	});

                  	$('#question_form').parsley();

                  	$('#question_form').on('submit', function(event){
                  		event.preventDefault();

                  		$('#question_title').attr('required', 'required');

                  		$('#option_title_1').attr('required', 'required');

                  		$('#option_title_2').attr('required', 'required');

                  		$('#option_title_3').attr('required', 'required');

                  		$('#option_title_4').attr('required', 'required');

                  		$('#answer_option').attr('required', 'required');

                  		if($('#question_form').parsley().validate())
                  		{
                  			$.ajax({
                  				url:"ajax_action.php",
                  				method:"POST",
                  				data:$(this).serialize(),
                  				dataType:"json",
                  				beforeSend:function(){
                  					$('#question_button_action').attr('disabled', 'disabled');

                  					$('#question_button_action').val('Validate...');
                  				},
                  				success:function(data)
                  				{
                  					if(data.success)
                  					{
                  						$('#message_operation').html('<div class="alert alert-success">'+data.success+'</div>');

                  						reset_question_form();
                  						dataTable.ajax.reload();
                  						$('#questionModal').modal('hide');
                  					}

                  					$('#question_button_action').attr('disabled', false);

                  					$('#question_button_action').val($('#hidden_action').val());
                  				}
                  			});
                  		}
                  	});

                  });

                  </script>

  <?php include('footer.php'); ?>

</html>
