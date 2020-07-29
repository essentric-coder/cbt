<!DOCTYPE html>
<html lang = "en">
<?php
 include ('header.php');
?>

<div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18"><a href="main.php"><button class="btn btn-primary" type="submit">Back</button></a></h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Status</a></li>
                                    <li class="breadcrumb-item active">Logged In</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <?php


                function fetch_data()
                 {
                   include 'controller/connection.php';

                   $s_id = $_SESSION['student_email'];
                 $output = '';

                  $u = mysqli_query($conn,"SELECT * FROM student_table WHERE email = '$s_id'");
                  $g  = mysqli_fetch_assoc($u);
                  $uid = $g['student_id'];

                      $s = mysqli_query($conn,"SELECT * FROM result WHERE student_id = '$uid'");
                      while($row = mysqli_fetch_assoc($s)){
                        $eid = $row['exam_id'];
                         $sub = mysqli_query($conn,"SELECT * FROM exam_table WHERE exam_id = '$eid'");
                         $r = mysqli_fetch_assoc($sub);
                         $subj = $r['exam_title'];
                         $total = $r['total_question'];



                      $output .= '<tr>
                                        <td>'.$row['id'].'</td>
                                        <td>'.$subj.'</td>
                                        <td>'.$total.'</td>
                                        <td>'.$row['attend_que'].'</td>
                                        <td>'.$row['obtained_marks'].'</td>
                                        <td>'.$row['exam_date'].'</td>
                                     </tr>
                                          ';
                      }
                      return $output;
                 }
                 if(isset($_POST["generate_pdf"]))
                 {
                      include ('tcpdf/tcpdf.php');
                      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
                      $obj_pdf->SetCreator(PDF_CREATOR);
                      $obj_pdf->SetTitle("Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP");
                      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
                      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
                      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
                      $obj_pdf->SetDefaultMonospacedFont('helvetica');
                      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
                      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
                      $obj_pdf->setPrintHeader(false);
                      $obj_pdf->setPrintFooter(false);
                      $obj_pdf->SetAutoPageBreak(TRUE, 10);
                      $obj_pdf->SetFont('helvetica', '', 11);
                      $obj_pdf->AddPage();
                      $content = '';
                      $content .= '
                      <h4 align="center">Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP</h4><br />
                      <table border="1" cellspacing="0" cellpadding="3">
                           <tr>
                                <th width="5%">Id</th>
                                <th width="30%">Subject</th>
                                <th width="15%">Total</th>
                                <th width="10%">Attempted Question</th>
                                <th width="10%" >Result</th>
                                <th width="30%">Date</th>
                           </tr>
                      ';
                      $content .= fetch_data();
                      $content .= '</table>';
                      $obj_pdf->writeHTML($content);
                      $obj_pdf->Output('file.pdf', 'I');
                 }
                 ?>

                <div class="row">
                                        <div class="col-8">
                                            <div class="card">
                                              <form method="post">
                        
                     </form>
                                                <div class="card-body">

                                                    <h4 class="card-title">Results</h4>

                                                    </p>

                                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                              <th width="5%">Id</th>
                                                              <th width="30%">Subject</th>
                                                              <th width="15%">Total</th>
                                                              <th width="10%">Attempted Question</th>
                                                              <th width="10%" >Result</th>
                                                              <th width="30%">Date</th>



                                                            </tr>
                                                        </thead>

                                                        <tbody>

                                                  <?php echo fetch_data();  ?>



                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                  <center>   <h4 class="card-title">Personal Information</h4></center>

                                                    <span class="d-none d-xl-inline-block ml-1"> Name : <?php echo $fname.'  '.$lname; ?></span> </span> ||   &nbsp;
                                                    <span class="d-none d-xl-inline-block ml-1"> Status : Logged In</span>
                                                      <br>  <br>



                                                                <div class="text-center" dir="ltr">
                                                                  <img class="rounded-circle header-profile-user" style="width:230px; height:230px;" src="<?php echo '../images_admin/'.$img; ?>" alt="Header Avatar">

                                                                </div>

                                                </div>
                                            </div>
                                            <!-- end card -->
                                        </div>
                                        <!-- end col -->
                                    </div>




                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->


                    <!-- end col -->
                </div>



            </div>
            <!-- End Page-content -->


        </div>
        <!-- end main content-->
        <!-- Datatable init js -->
           <script src="../assets/js/pages/datatables.init.js"></script>

<?php

include('footer.php');

?>
