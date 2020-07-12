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
                                  <h4 class="page-title mb-0 font-size-18">Add Questions </h4>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="javascript: void(0);">View</a></li>
                                          <li class="breadcrumb-item active">Questions </li>
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

                                      <h4 class="card-title">Exam Questions</h4>
                                      <p class="card-title-desc">
                                      </p>
<form action="../controller/script.php" method="post" enctype="multipart/form-data"  role="form" >
  <label>Upload Questions
  File</label> <input  type="file" name="file"
      id="file" accept=".xls,.xlsx" required>



     <button type="submit" id="submit" name = "import" class="btn btn-primary waves-effect waves-light">
      <i class="bx bx-plus font-size-16 align-middle mr-2"></i> Upload Exam Questions
      </button>

      <!--button type="button" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" data-target="#myModal">
                                                                 <i class="bx bx-plus font-size-16 align-middle mr-2"></i> Add Single Question
                                                             </button-->
                                                             </form>
                            <br> <br>

                                                                              <!-- sample modal content -->
                                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="myModalLabel"> Add Questions</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <form method="post" id="question_form">
                                              		<div class="modal-content">
                                              			<!-- Modal Header -->


                                                		<!-- Modal body -->
                                                		<div class="modal-body">
                                                  			<div class="form-group">
                                                    			<div class="row">
                                                      				<label class="col-md-4 text-right">Question Title <span class="text-danger">*</span></label>
                                        	              			<div class="col-md-8">
                                        	                			<input type="text" name="question_title" id="question_title" autocomplete="off" class="form-control" />
                                        	                		</div>
                                                    			</div>
                                                  			</div>
                                                  			<div class="form-group">
                                                    			<div class="row">
                                                      				<label class="col-md-4 text-right">Option 1 <span class="text-danger">*</span></label>
                                        	              			<div class="col-md-8">
                                        	                			<input type="text" name="option_title_1" id="option_title_1" autocomplete="off" class="form-control" />
                                        	                		</div>
                                                    			</div>
                                                  			</div>
                                                  			<div class="form-group">
                                                    			<div class="row">
                                                      				<label class="col-md-4 text-right">Option 2 <span class="text-danger">*</span></label>
                                        	              			<div class="col-md-8">
                                        	                			<input type="text" name="option_title_2" id="option_title_2" autocomplete="off" class="form-control" />
                                        	                		</div>
                                                    			</div>
                                                  			</div>
                                                  			<div class="form-group">
                                                    			<div class="row">
                                                      				<label class="col-md-4 text-right">Option 3 <span class="text-danger">*</span></label>
                                        	              			<div class="col-md-8">
                                        	                			<input type="text" name="option_title_3" id="option_title_3" autocomplete="off" class="form-control" />
                                        	                		</div>
                                                    			</div>
                                                  			</div>
                                                  			<div class="form-group">
                                                    			<div class="row">
                                                      				<label class="col-md-4 text-right">Option 4 <span class="text-danger">*</span></label>
                                        	              			<div class="col-md-8">
                                        	                			<input type="text" name="option_title_4" id="option_title_4" autocomplete="off" class="form-control" />
                                        	                		</div>
                                                    			</div>
                                                  			</div>
                                                  			<div class="form-group">
                                                    			<div class="row">
                                                      				<label class="col-md-4 text-right">Answer <span class="text-danger">*</span></label>
                                        	              			<div class="col-md-8">
                                        	                			<select name="answer_option" id="answer_option" class="form-control">
                                        	                				<option value="">Select</option>
                                        	                				<option value="1">1 Option</option>
                                        	                				<option value="2">2 Option</option>
                                        	                				<option value="3">3 Option</option>
                                        	                				<option value="4">4 Option</option>
                                        	                			</select>
                                        	                		</div>
                                                    			</div>
                                                  			</div>
                                                		</div>

                                        	        	<!-- Modal footer -->

                                                	</div>
                                            	</form>
          	                                                         	</div>
                                                                    <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light">Save</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Exam id</th>
                                                        <th>Question id</th>
                                                        <th>Question</th>
                                                        <th>option 1</th>
                                                        <th>option 2</th>
                                                        <th>option 3</th>
                                                        <th>option 4</th>
                                                        <th>Answer</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                  <?php

                                                  $s  = mysqli_query($conn,"SELECT * FROM question_table");

                                                  while($r = mysqli_fetch_assoc($s)) {



                                                    //AES encryption scheme
                                                    $cipher = "AES-128-CTR";
                                                    //Open ssl encryption method
                                                    $ivlen = openssl_cipher_iv_length($cipher);
                                                    $option = 0;
                                                    //non null initialization of the vector for encryption.
                                                    $encryption_iv = "9028993933845222";
                                                    //store encrytion key => ,
                                                    $encryption_key =  "h5hd7jdjds9k3jjdkd9kdkejdi93jkjdp1";




                                                    echo '<tr>
                                                        <td>'.$r['question_id'].'</td>
                                                        <td>'.$r['online_exam_id'].'</td>
                                                        <td>'.$r['question_title'].'</td>
                                                        <td>'.$r['option_1'].'</td>
                                                        <td>'.$r['option_2'].'</td>
                                                        <td>'.$r['option_3'].'</td>
                                                        <td>'.$r['option_4'].'</td>
                                                        <td>'.$r['answer_option'].'</td>

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
