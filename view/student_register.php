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
                 <h4 class="page-title mb-0 font-size-18">Student Registration</h4>

                 <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                         <li class="breadcrumb-item active">Students</li>
                     </ol>
                 </div>

             </div>
         </div>
     </div>
     <!-- end page title -->

   <div class="row">
         <div class="col-lg-12">
             <div class="card">
                 <div class="card-body">
                     <h1 class="card-title mb-4">Register Students </h1>
                     <p class="card-title-desc">Please Fill The form</p>
                     <form  method="POST" action = "../controller/script.php" enctype="multipart/form-data" class="needs-validation custom-validation" novalidate>
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom01">First name</label>
                                     <input  name  ="firstname" type="text" class="form-control" id="validationCustom01" placeholder="First name" value="" required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom02">Middle name</label>
                                     <input name = "middlename" type="text" class="form-control" id="validationCustom02" placeholder="Middlename" value="" required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom01">Last Name</label>
                                     <input name = "lastname" type="text" class="form-control" id="validationCustom01" placeholder="Last  name" value="" required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom02">Date of Birth</label>
                                     <input name = "dob" type="date" class="form-control" id="validationCustom02" placeholder="Last name" value="" required>
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
                                     <input name = "email" type="email" class="form-control" id="validationCustom01" placeholder="Email Address" value="" required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom02">Phone Number</label>
                                     <input name = "phone" data-parsley-type="digits" type="text" class="form-control" id="validationCustom02" placeholder="Phone Number " required>
                                     <div class="valid-feedback">

                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom01">State of Origin</label>

                                     													<select onchange="toggleLGA(this);" name="state" id="state" class="form-control" required>
                                     														<option value="" selected="selected">- Select -</option>
                                     														<option value="Abia">Abia</option>
                                     														<option value="Adamawa">Adamawa</option>
                                     														<option value="AkwaIbom">AkwaIbom</option>
                                     														<option value="Anambra">Anambra</option>
                                     														<option value="Bauchi">Bauchi</option>
                                     														<option value="Bayelsa">Bayelsa</option>
                                     														<option value="Benue">Benue</option>
                                     														<option value="Borno">Borno</option>
                                     														<option value="Cross River">Cross River</option>
                                     														<option value="Delta">Delta</option>
                                     														<option value="Ebonyi">Ebonyi</option>
                                     														<option value="Edo">Edo</option>
                                     														<option value="Ekiti">Ekiti</option>
                                     														<option value="Enugu">Enugu</option>
                                     														<option value="FCT">FCT</option>
                                     														<option value="Gombe">Gombe</option>
                                     														<option value="Imo">Imo</option>
                                     														<option value="Jigawa">Jigawa</option>
                                     														<option value="Kaduna">Kaduna</option>
                                     														<option value="Kano">Kano</option>
                                     														<option value="Katsina">Katsina</option>
                                     														<option value="Kebbi">Kebbi</option>
                                     														<option value="Kogi">Kogi</option>
                                     														<option value="Kwara">Kwara</option>
                                     														<option value="Lagos">Lagos</option>
                                     														<option value="Nasarawa">Nasarawa</option>
                                     														<option value="Niger">Niger</option>
                                     														<option value="Ogun">Ogun</option>
                                     														<option value="Ondo">Ondo</option>
                                     														<option value="Osun">Osun</option>
                                     														<option value="Oyo">Oyo</option>
                                     														<option value="Plateau">Plateau</option>
                                     														<option value="Rivers">Rivers</option>
                                     														<option value="Sokoto">Sokoto</option>
                                     														<option value="Taraba">Taraba</option>
                                     														<option value="Yobe">Yobe</option>
                                     														<option value="Zamfara">Zamafara</option>
                                     													</select>

                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom02">LGA</label>
                                     <select name="lga" id="lga" class="form-control select-lga" required>
 													</select>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom01">Town</label>
                                     <input name = "town" type="text" class="form-control" id="validationCustom01" placeholder="Town" value="" required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom02">mother_maiden_name</label>
                                     <input name =  "mother_maiden_name" type="text" class="form-control" id="validationCustom02" placeholder="Mother Maiden Name" value="" required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom01">Gender</label>
                                     <select name = "gender" type="text" class="form-control" id="validationCustom01" placeholder="Gender" value="" required>
                                            <option value = "select">Select</select>
                                            <option value = "Female">Female</select>
                                            <option value = "Male">Male</select>
                                     </select>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom02">Pet Name</label>
                                     <input name =  "petname" type="text" class="form-control" id="validationCustom02" placeholder="Pet Name" value="" required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom01">Favorite Food</label>
                                     <input name = "favfood" type="text" class="form-control"  placeholder="Favorite Food" value="" required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom02">Favorite Sport</label>
                                     <input name = "favsport" type="text" class="form-control"  placeholder="Favorite Sport" value="" required>
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>
                         </div>


                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom01">Password</label>
                                     <input name = "password" type="password" class="form-control" id="validationCustom01" required placeholder="Password">
                                     <div class="valid-feedback">
                                         Looks good!
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="validationCustom01">Upload Profile  Picture</label>
                                     <div class="custom-file">
                                           <input name = "file" type="file" class="custom-file-input" id="customFile">
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
                                 <button name  ="register_student" type="submit" class="btn btn-primary waves-effect waves-light mr-1">
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


     </div>
     <!-- end row -->


 </div>
 <!-- End Page-content -->






  <?php include('footer.php'); ?>

</html>
