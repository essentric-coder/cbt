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
                      <h4 class="page-title mb-0 font-size-18">Smart</h4>

                      <div class="page-title-right">
                          <ol class="breadcrumb m-0">
                              <li class="breadcrumb-item"><a href="javascript: void(0);">CBT</a></li>
                              <li class="breadcrumb-item active">Intelligent Agent</li>
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



                          </p>

                          <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                              <thead>
                                  <tr>
                                      <th>Exam</th>
                                      <th>Exam Status</th>
                                      <th colspan="2">Action</th>
                                      <th>Agent Status</th>
                                  </tr>
                              </thead>

                              <tbody>
                                  <tr>
                                      <td>Mathematics</td>
                                      <td>
                                                  <div class="badge badge-soft-warning font-size-12">Completed </div>
                                              </td>
                                              <td colspan="2">
                                                  <button type="button" class="btn btn-success waves-effect waves-light  btn-sm btn-rounded">Deactivate</button>
                                                  <button type="button" class="btn btn-danger waves-effect waves-light  btn-sm btn-rounded">Activate</button>
                                              </td>
                                              <td>
                                                          <div class="badge badge-soft-warning font-size-12">Active</div>
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
      <!-- End Page-content -->


  <?php include('footer.php'); ?>

</html>
