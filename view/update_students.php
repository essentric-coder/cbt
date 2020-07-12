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
                               <h4 class="page-title mb-0 font-size-18">Update Student Info</h4>

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
                       <div class="col-12">
                           <div class="card">
                               <div class="card-body">

                                   <h4 class="card-title">Update Info</h4>

                      <?php
                      include '../controller/connection.php';
                      $id = $_GET['id'];
                      $query = mysqli_query($conn,"SELECT * FROM student_table where student_id = '$id'");
                      $row = mysqli_fetch_assoc($query);
                              $student_id     = $row['student_id'];
                              $fname     = $row['firstname'];
                              $lastname     = $row['lastname'];
                              $mname     = $row['middlename'];
                              $email     = $row['email'];
                              $password     = $row['password'];
                              $phone     = $row['phone'];
                              $mmname     = $row['mother_maiden_name'];
                              $filename     = $row['user_image'];
                              $favsport     = $row['favoritesport'];
                              $petname     = $row['petname'];

                              $favfood     = $row['favoritefood'];
                              $state   = $row['state'];
                              $lga     = $row['lga'];
                              $dob   = $row['dob'];
                              $town   = $row['town'];
                              $salt = $row['salt'];
                              $created_on = $row['user_created_on'];



                                   ?>

                            <form method="post" action="../controller/script.php" enctype="">
                                   <div class="table-responsive">
                                       <table class="table table-striped table-nowrap mb-0">
                                           <thead>
                                               <tr>
                                                   <th style="width: 50%;">Field</th>
                                                   <th>Value</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                             <tr>
                                                 <td>Student ID</td>
                                                 <td>
                                                     <input type="text" name = "sid" readonly value="<?php echo $student_id;?>"/>
                                                 </td>
                                             </tr>
                                               <tr>
                                                   <td>Firstname</td>
                                                   <td>
                                                       <input type="text"  readonly value="<?php echo $fname;?>"/>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>Middlename</td>
                                                   <td>
                                                       <input type="text"  readonly value="<?php echo $mname;?>"/>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>Lastname</td>
                                                   <td>
                                                       <input type="text"  readonly value="<?php echo $lname;?>"/>
                                                   </td>
                                               </tr>

                                               <tr>
                                                   <td>Mobile number</td>
                                                   <td>
                                                       <input  name = "phone" type="number"   value="<?php echo $phone; ?>"/>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>Email</td>
                                                   <td>
                                                       <input type="text"  name = "email"   value="<?php echo $email; ?>"/>
                                                   </td>
                                               </tr>

                                               <tr>
                                                   <td>State</td>
                                                   <td>
                                                       <input type="text"  readonly value="<?php echo $state;?>"/>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>LGA</td>
                                                   <td>
                                                        <input type="text"  readonly value="<?php echo $lga; ?>"/>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>Town</td>
                                                   <td>
                                                        <input type="text" name = "town"  value="<?php echo $town;?>"/>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>Pet Name</td>
                                                   <td>
                                                         <input type="text" name = "petname"  value="<?php echo $petname; ?>"/>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>Favorite Food</td>
                                                   <td>
                                                         <input type="text"  name = "favfood" value="<?php echo $favsport;?>"/>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>Favorite Sport</td>
                                                   <td>
                                                         <input type="text" name = "favsport"  value="<?php echo $favfood; ?>"/>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>Password</td>
                                                   <td>
                                                         <input type="text"  name = "password"  value="<?php echo $password; ?>"/>
                                                   </td>
                                               </tr>



                                               <tr>
                                                   <td>Date of birth</td>
                                                   <td>
                                                       <input type = "text" name = "dob" value="<?php echo $dob; ?>" id="inline-dob" data-type="combodate" data-value="2015-09-24" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth" />
                                                   </td>
                                               </tr>


                                               <tr>
                                                 <td colspan="2" ><Button name = "update_student" class = "btn-lg" >Update </Button></td>
                                               </tr>

                                           </tbody>
                                       </table>
                                     </form>
                                   </div>

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
