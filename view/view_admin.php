<!DOCTYPE html>
<html lang="en">

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
					<h4 class="page-title mb-0 font-size-18">View Admin</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item">
								<a href="javascript: void(0);">Admin</a>
							</li>
							<li class="breadcrumb-item active">Records</li>
						</ol>
					</div>

				</div>
			</div>
		</div>
		<!-- end page title -->

		<?php

    echo '  <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">

                                                        <h4 class="card-title">Admin Database</h4>
                                                        <p class="card-title-desc">
                                                        </p>



                                                                                                <br>
                                                                                                <div class="table-rep-plugin">
                                                                                          <div class="table-responsive mb-0" data-pattern="priority-columns">                                <br>

                                                                                          <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                                              <thead>
                                                                                                  <tr>
                                                                                                  <th>admin ID</th>
                                                                                                  <th>Firstname</th>
                                                                                                  <th>lastname</th>
                                                                                                  <th>email</th>




                                                                                                  <th>Status</th>
																																																	<th>phone_number</th>
                                                                                                  <th>Action</th>

                                                                                                  <th>Created On</th>


                                                                                                  </tr>
                                                                                              </thead>

                                                                                              <tbody>';

    $query = mysqli_query($conn, "SELECT * FROM admin_table");
    while ($row = mysqli_fetch_assoc($query)) {
   $del = "delete/delete_admin.php?id=".$row['admin_id'];
        echo '<tr>
                                   <td>' . $row['admin_id'] . '</td>
                                                                                                  <td>' . $row['firstname'] . '</td>
                                                                                                  <td>' . $row['lastname'] . '</td>
                                                                                                  <td>' . $row['email_address'] . '</td>



                                                                                                  <td>
                                                                                                              <div class="badge badge-soft-warning font-size-12">' . $row['status'] . '</div>
                                                                                                          </td>
																																																					<td>' . $row['phone_number'] . '</td>
                                                                                                          <td>


                                                                                                                  <a href = "'.$del.' "  class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                                                                              </td>


                                                                                                              <td>' . $row['admin_created_on'] . '</td>

                                                                                                  </tr>';
    }


    echo '</tbody>
                                                                                          </table>



                                              </div>
                                          </div>
                                          </div>
                                      </div>

                                            </div>
                                            <!-- end col -->
                                        </div>';
    ?>
		<!-- end row -->



	</div>
	<!-- End Page-content -->



	<?php include('footer.php'); ?>

</html>
