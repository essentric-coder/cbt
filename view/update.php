<?php
  include '../controller/connection.php';

if(isset($_POST['update_Exam'])){

        $ids = mysqli_escape_string($conn,$_POST['id']);
        $online_exam_title	=mysqli_escape_string($conn,$_POST['online_exam_title']);
        $online_exam_datetime	= mysqli_escape_string($conn,$_POST['online_exam_datetime'] . ':00');
        $online_exam_duration	=	mysqli_escape_string($conn,$_POST['online_exam_duration']);
        $total_question	=	mysqli_escape_string($conn,$_POST['total_question']);
        $marks_per_right_answer = mysqli_escape_string($conn,	$_POST['marks_per_right_answer']);
        $marks_per_wrong_answer =	mysqli_escape_string($conn,$_POST['marks_per_wrong_answer']);
        $online_exam_created_on =	$cr;
        $online_exam_status	=	$status;
        $online_exam_code		=	$statuscode ;

    $query = "UPDATE  exam_table SET exam_title = '$online_exam_title',
                        exam_datetime  = '$online_exam_datetime',
                        exam_duration = '$online_exam_duration',
                         total_question = '$total_question',
                          marks_per_right_answer = '$marks_per_right_answer',
                           marks_per_wrong_answer = '$marks_per_wrong_answer',
                           exam_created_on = '$online_exam_created_on',
                           exam_status = '$online_exam_status',
                            exam_code = '$online_exam_code' WHERE exam_id = '$ids' ";

    $add = mysqli_query($conn,$query);
    if($add){
       header('location:../view/add_exam.php');

    }


}

 ?>
