<!DOCTYPE html>
<html
 lang="en">

 <?php include('header.php'); ?>

  <?php include('navbar.php'); ?>


  <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18">View Notifications</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Exam</a></li>
                                        <li class="breadcrumb-item active">Notifications</li>
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
                                                <th>Id</th>
                                                <th>Exam Id</th>
                                                <th>Full Name</th>
                                                <th>Offence</th>
                                                <th>Time</th>
                                                <th>Status</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                          <?php
                                              include '../controller/connection.php';
                                        $query = mysqli_query($conn,"SELECT * FROM alerts order by id desc");
                                        while($row = mysqli_fetch_assoc($query)){

                                          echo '  <tr>
                                                <td>'.$row['id'].'</td>
                                                <td>'.$row['exam_id'].'</td>
                                                <td>'.$row['exam'].'</td>
                                                <td>'.$row['offence'].'</td>
                                                <td>'.$row['time'].'</td>


                                                <td>
                                                            <div class="badge badge-soft-warning font-size-12">'.$row['status'].'</div>
                                                        </td>
                                                        
                                              </tr>';
                                            }
                                              ?>


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


            <!-- end main content-->


  <?php include('footer.php'); ?>

</html>
