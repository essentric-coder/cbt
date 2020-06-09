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

                  <!-- end row -->
                                      <div class="row">
                                          <div class="col-lg-6">
                                              <div class="card">
                                                  <div class="card-body">
                                                      <h4 class="card-title">Reset Password</h4>
                                                      <p class="card-title-desc"></p>

                                                      <form class="custom-validation" action="#">
                                                        <div class="form-group">
                                                            <label>E-Mail</label>
                                                            <div>
                                                                <input type="email" class="form-control" required parsley-type="email" placeholder="Enter a valid e-mail" />
                                                            </div>
                                                        </div>

                                                          <div class="form-group">
                                                              <label>Old Password</label>
                                                              <div>
                                                                  <input type="password" id="pass2" class="form-control" required placeholder="Password" />
                                                              </div>
                                                                <label>New Password</label>
                                                              <div class="mt-2">
                                                                  <input type="password" class="form-control" required data-parsley-equalto="#pass2" placeholder="New Password" />
                                                              </div>
                                                              <label>Confirm Password</label>
                                                            <div class="mt-2">
                                                                <input type="password" class="form-control" required data-parsley-equalto="#pass2" placeholder="Re-Type Password" />
                                                            </div>
                                                          </div>



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
                                          </div>
                                          <!-- end col -->

                                          <!-- end col -->
                                      </div>
                                      <!-- end row -->



              </div>
              <!-- End Page-content -->

          <!-- end main content-->




<?php

include('footer.php');

?>

</html>
