<?php
//include("check.php");
?>
<?php
//session_start();
include("connect.php");
include("header.php");
?>

    	<form  method="POST" action="examination.php" >

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h3 style="margin-top: 5%;">Start Examination</h3>
                        </div>


                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                         <p class="text-center">Hello Students,<?php echo $_SESSION['student_email']; ?><span class="text-danger">Are you ready for the examination ?</span> Let's start here!</p>

                    <div class="col-md-6">
                    <div class="form-group">
                        <label >Subject </label>

                        <select class="form-control" name = "exam_id">
                            <option>Select</option>

      <?php
 include 'connect.php';
       $email = $_SESSION['student_email'];
       $query1 = mysqli_query($conn,"SELECT * FROM student_table WHERE email = '$email'");
       $row  = mysqli_fetch_assoc($query1);
       $fname = $row['firstname'];
       $lname = $row['lastname'];
       $img =   $row['user_image'];
       $s_id =   $row['student_id'];
          $query  = mysqli_query($conn,"SELECT  * FROM user_exam_enroll_table where user_id = '$s_id' ");

                $n  = mysqli_num_rows($query);


                      while ($r = mysqli_fetch_assoc($query)){

                              $exam_id  = $r['exam_id'];

                                $check =  mysqli_query($conn,"SELECT * from exam_table where exam_id = '$exam_id' ");
                                while($fetch = mysqli_fetch_assoc($check)){
                                 echo'
                                <option value="'.$fetch['exam_id'].'">'.$fetch['exam_title'].'</option>';


                                   }
                                 }


                                ?>


                        </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-default">Next</button>

                    </div>
                    <br>
                    <br>
<button style="display:none;" name="submit" class="btn btn-default">Next</button>
                     <div class="form-group">

                    </div>

                </div>
                                           </form>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
            <?php
            include("footer.php");
            ?>



</script>
