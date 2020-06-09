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
                                  <h4 class="page-title mb-0 font-size-18">Data Tables</h4>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                          <li class="breadcrumb-item active">Data Tables</li>
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

                                      <h4 class="card-title">Exam Database</h4>
                                      <p class="card-title-desc">
                                      </p>
                                      <button type="button" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" data-target="#myModal">
                                                                                  <i class="bx bx-plus font-size-16 align-middle mr-2"></i> New Exam
                                                                              </button>


                                                                              <br>
                                                                              <br>

                                                                              <!-- sample modal content -->
                                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="myModalLabel">Modal Heading</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
            			<div class="form-group">
              			<div class="row">
                				<label class="col-md-4 text-right">Exam Title <span class="text-danger">*</span></label>
  	              			<div class="col-md-8">
  	                			<input type="text" name="online_exam_title" id="online_exam_title" class="form-control" />
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
  	                			<select name="online_exam_duration" id="online_exam_duration" class="form-control">
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
  	                			<select name="total_question" id="total_question" class="form-control">
  	                				<option value="">Select</option>
  	                				<option value="5">5 Question</option>
  	                				<option value="10">10 Question</option>
  	                				<option value="25">25 Question</option>
  	                				<option value="50">50 Question</option>
  	                				<option value="100">100 Question</option>
  	                				<option value="200">200 Question</option>
  	                				<option value="300">300 Question</option>
  	                			</select>
  	                		</div>
              			</div>
            			</div>
            			<div class="form-group">
              			<div class="row">
                				<label class="col-md-4 text-right">Marks for Right Answer <span class="text-danger">*</span></label>
  	              			<div class="col-md-8">
  	                			<select name="marks_per_right_answer" id="marks_per_right_answer" class="form-control">
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
  	                			<select name="marks_per_wrong_answer" id="marks_per_wrong_answer" class="form-control">
  	                				<option value="">Select</option>
  	                				<option value="1">-1 Mark</option>
  	                				<option value="1.25">-1.25 Mark</option>
  	                				<option value="1.50">-1.50 Mark</option>
  	                				<option value="2">-2 Mark</option>
  	                			</select>
  	                		</div>
              			</div>
            			</div>
          		</div>
                                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
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
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                        <td>
                                                                    <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                        <td>
                                                                    <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>
                                                        <td>
                                                                    <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cedric Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2012/03/29</td>
                                                        <td>$433,060</td>
                                                        <td>
                                                                    <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Airi Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>33</td>
                                                        <td>2008/11/28</td>
                                                        <td>$162,700</td>
                                                        <td>
                                                                    <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Brielle Williamson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>New York</td>
                                                        <td>61</td>
                                                        <td>2012/12/02</td>
                                                        <td>$372,000</td>
                                                        <td>
                                                                    <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Herrod Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>
                                                        <td>59</td>
                                                        <td>2012/08/06</td>
                                                        <td>$137,500</td>
                                                        <td>
                                                                    <div class="badge badge-soft-success font-size-12">Paid</div>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rhona Davidson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Tokyo</td>
                                                        <td>55</td>
                                                        <td>2010/10/14</td>
                                                        <td>$327,900</td>
                                                        <td>
                                                                    <div class="badge badge-soft-success font-size-12">Paid</div>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Colleen Hurst</td>
                                                        <td>Javascript Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>39</td>
                                                        <td>2009/09/15</td>
                                                        <td>$205,500</td>
                                                        <td>
                                                                    <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sonya Frost</td>
                                                        <td>Software Engineer</td>
                                                        <td>Edinburgh</td>
                                                        <td>23</td>
                                                        <td>2008/12/13</td>
                                                        <td>$103,600</td>
                                                        <td>
                                                                    <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jena Gaines</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>30</td>
                                                        <td>2008/12/19</td>
                                                        <td>$90,560</td>
                                                        <td>
                                                                    <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Quinn Flynn</td>
                                                        <td>Support Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2013/03/03</td>
                                                        <td>$342,000</td>
                                                        <td>
                                                                    <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Charde Marshall</td>
                                                        <td>Regional Director</td>
                                                        <td>San Francisco</td>
                                                        <td>36</td>
                                                        <td>2008/10/16</td>
                                                        <td>$470,600</td>
                                                        <td>
                                                                    <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Haley Kennedy</td>
                                                        <td>Senior Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>43</td>
                                                        <td>2012/12/18</td>
                                                        <td>$313,500</td>
                                                        <td>
                                                                    <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                                                </td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                  </div>
                              </div>
                          </div>
                          <!-- end col -->
                      </div>
                      <!-- end row -->

                  </div>



  <?php include('footer.php'); ?>

</html>
