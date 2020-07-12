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
                     <h4 class="card-title mb-4">Please Fill The form</h4>

                     <form class="needs-validation custom-validation"  action = "../controller/script.php" method="post"  enctype="multipart/form-data" novalidate>
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom01">First name</label>
                                     <input  type="text" name = "firstname" class="form-control" id="validationCustom01"
                                      value="<?php if(isset($_POST['firstname'])){ echo htmlentities($_POST['firstname']);}?>"
                                      placeholder="First name" value="" required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom02">Last name</label>
                                     <input type="text" name = "lastname" class="form-control" id="validationCustom02" placeholder="Last name"
                                       value="<?php if(isset($_POST['lastname'])){ echo htmlentities($_POST['lastname']);}?>"
                                        required>
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
                                     <input type="email" name = "email" class="form-control" id="validationCustom01"
                                      placeholder="Email Address" value="<?php if(isset($_POST['email'])){ echo htmlentities($_POST['email']);}?>" required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom02">Phone Number</label>
                                     <input data-parsley-type="digits"  name="phone" type="text" class="form-control"  placeholder="Phone Number "
                                            value="<?php if(isset($_POST['phone'])){ echo htmlentities($_POST['phone']);}?>"
                                      required>
                                     <div class="valid-feedback">

                                     </div>
                                 </div>
                             </div>
                         </div>




                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom01">Password</label>
                                     <input type="password" name = "password" class="form-control" id="validationCustom01"
                                      value="<?php if(isset($_POST['password'])){ echo htmlentities($_POST['password']);}?>"
                                      required placeholder="Password">
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom01">Upload Profile  Picture</label>
                                     <div class="custom-file">
                                           <input type="file" name = "file" class="custom-file-input" id="customFile"  required>
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
                                 <button type="submit"  name = "register_admin" class="btn btn-primary waves-effect waves-light mr-1">
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
