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
                              <h4 class="page-title mb-0 font-size-18">Notification</h4>

                              <div class="page-title-right">
                                  <ol class="breadcrumb m-0">
                                      <li class="breadcrumb-item"><a href="javascript: void(0);">View</a></li>
                                      <li class="breadcrumb-item active">Notification</li>
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
                                                       <th>Title</th>
                                                       <th>Exam</th>
                                                       <th>Message</th>
                                                       <th>Time</th>


                                                   </tr>
                                               </thead>

                                               <tbody>
                                                   <tr>
                                                       <td>Notice</td>
                                                       <td>English Language</td>
                                                       <td>Remenber to submit</td>
                                                       <td>12:00pm</td>
                                                       
                                                   </tr>


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
