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
                              <h4 class="page-title mb-0 font-size-18">Student Report</h4>

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
                                                 <tr>
                                                   <th>Name</th>
                                                   <th>Phone number</th>
                                                   <th>Gender</th>
                                                   <th>Town</th>
                                                   <th>Date of Birth</th>
                                                   <th>State</th>
                                                   <th>Status</th>
                                                   <th>Action</th>
                                                 </tr>
                                                 </thead>


                                               <tbody>
                                                   <tr>
                                                       <td>Tiger Nixon</td>
                                                       <td>08136777465</td>
                                                       <td>Male</td>
                                                       <td>Lagos</td>
                                                       <td>2011/04/25</td>
                                                       <td>Lagos</td>
                                                       <td>
                                                                   <div class="badge badge-soft-warning font-size-12">Active</div>
                                                               </td>
                                                               <td>
                                                                   <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                   <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                               </td>
                                                 </tbody>
                                             </table>
                                         </div>
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
