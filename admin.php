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
                 <h4 class="page-title mb-0 font-size-18">Register Admin</h4>

                 <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                         <li class="breadcrumb-item active">Admin</li>
                     </ol>
                 </div>

             </div>
         </div>
     </div>
     <!-- end page title -->

<center>     <div class="row">
         <div class="col-lg-12">
             <div class="card">
                 <div class="card-body">
                     <h4 class="card-title mb-4">Register Users</h4>
                     <p class="card-title-desc">Please Fill The form</p>
                     <form class="needs-validation custom-validation" novalidate>
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom01">First name</label>
                                     <input  type="text" class="form-control" id="validationCustom01" placeholder="First name" value="" required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom02">Last name</label>
                                     <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="" required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom01">Email Address</label>
                                     <input type="email" class="form-control" id="validationCustom01" placeholder="First name" value="" required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom02">Phone Number</label>
                                     <input data-parsley-type="digits" type="text" class="form-control" id="validationCustom02" placeholder="Phone Number " required>
                                     <div class="valid-feedback">

                                     </div>
                                 </div>
                             </div>
                         </div>




                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom01">Password</label>
                                     <input type="password" class="form-control" id="validationCustom01" required placeholder="Password">
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom02">Retype Password</label>
                                     <input type="password" class="form-control" id="validationCustom02" required data-parsley-equalto="#pass2" placeholder="Re-Type Password">
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom01">Upload Profile  Picture</label>
                                     <div class="custom-file">
                                           <input type="file" class="custom-file-input" id="customFile" required>
                                           <label class="custom-file-label" for="customFile">Choose file</label>
                                       </div>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>


                         </div>

                         <br>


                         <div class="form-group mb-0">
                             <div>
                                 <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                     Submit
                                 </button>
                                 <button type="reset" class="btn btn-secondary waves-effect">
                                     Cancel
                                 </button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
             <!-- end card -->
         </div>

         <center>
         <!-- end col -->


 </div>
 <!-- End Page-content -->


</div>

  <?php include('footer.php'); ?>

</html>
