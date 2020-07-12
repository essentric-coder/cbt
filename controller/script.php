
<?php



include 'connection.php';
include 'connection.php';
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');


session_start();
if (!isset($_SESSION['email']))
{
    header("Location: ../index.php");
    die();
}

$log_id = "";

$email_id  = $_SESSION['email'];
$n = mysqli_query($conn,"SELECT * FROM admin_table");
$r = mysqli_fetch_assoc($n);
$a_id  = $r['admin_id'];
$current_datetime = date("Y-m-d") . ' ' . date("H:i:s", STRTOTIME(date('h:i:sa')));


//random string generator
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}

//register CBT admin
if (isset($_POST['register_admin']) && !empty($_FILES["file"]["name"])){

  $fname = mysqli_escape_string($conn,$_POST['firstname']);
  $lname = mysqli_escape_string($conn,$_POST['lastname']);
  $email = mysqli_escape_string($conn,$_POST['email']);
  $phone = mysqli_escape_string($conn,$_POST['phone']);
  //encrpt password using (Secure Hash Algorithm 256 bit)
  //step1 grab the password text
  $pass = mysqli_escape_string($conn,$_POST['password']);
  //encrypt with sha256 with salt
  $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $salt = generate_string($permitted_chars, 100);
  $password = hash('sha256',$salt.$pass);

  $created_on =  date('Y-m-d H:i:s');
  //copy the file into the new path
  $statusMsg = '';// File upload path
  $targetDir = "../images_admin/";
  $fileName = basename($_FILES["file"]["name"]);
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


  $allowTypes = array('jpg','png','jpeg','gif','pdf');
      if(in_array($fileType, $allowTypes)){
        //check if email already exist
        $check_email = mysqli_query($conn,"SELECT * FROM admin_table  WHERE email_address = '$email' ");
        $e  = mysqli_num_rows($check_email);
        if ($e > 1) {
             echo "email ready exists";
        }
        else {
          //check if phone already exist
          $check_email = mysqli_query($conn,"SELECT * FROM admin_table  WHERE phone_number = '$phone' ");
          $ph  = mysqli_num_rows($check_email);
          if ($ph > 1) {
               echo "phone number exist";




          }
          else{
            // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                $query = "INSERT INTO admin_table(firstname,lastname,phone_number,email_address,password,admin_created_on,picture,status,salt)
                                                            VALUES('$fname',
                                                                  '$lname',
                                                                  '$phone',
                                                                  '$email',
                                                                  '$password',
                                                                  '$created_on',
                                                                  '$fileName',
                                                                  'active',
                                                                   '$salt'
                                                                )";
                  $execute = mysqli_query($conn,$query);
                  if($execute){
                    echo "saved";
                  }
                  else{
                    echo "Not saved";
                  }



                }
              }


            }
          }
        }


//add exams

if(isset($_POST['AddExam'])){
        //get admin // Id
        $getid = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM admin_table WHERE email_address = '$email_id'"));
        $admin_id = $getid['admin_id'];
				$online_exam_title	=mysqli_escape_string($conn,$_POST['online_exam_title']);
				$online_exam_datetime	= mysqli_escape_string($conn,$_POST['online_exam_datetime'] . ':00');
				$online_exam_duration	=	mysqli_escape_string($conn,$_POST['online_exam_duration']);
				$total_question	=	mysqli_escape_string($conn,$_POST['total_question']);
				$marks_per_right_answer = mysqli_escape_string($conn,	$_POST['marks_per_right_answer']);
				$marks_per_wrong_answer =	mysqli_escape_string($conn,$_POST['marks_per_wrong_answer']);
				$online_exam_created_on =	$current_datetime;
				$online_exam_status	=	'Pending';
				$online_exam_code		=	md5(rand());

    $query = "INSERT INTO exam_table
			(admin_id,exam_title,exam_datetime,exam_duration, total_question, marks_per_right_answer, marks_per_wrong_answer,exam_created_on,exam_status, exam_code)
			VALUES
       ('$admin_id', '$online_exam_title',
        '$online_exam_datetime', '$online_exam_duration',
       '$total_question', '$marks_per_right_answer',
       '$marks_per_wrong_answer', '$online_exam_created_on',
       '$online_exam_status', '$online_exam_code')
			";
    $add = mysqli_query($conn,$query);
    if($add){
         header('location:../view/add_exam.php');

    }




}

//send notification

if(isset($_POST['send'])){

  $title = mysqli_escape_string($conn,$_POST['title']);
  $exam_id = mysqli_escape_string($conn,$_POST['exam_id']);
  $message = mysqli_escape_string($conn,$_POST['message']);

  $status = "sent";
  $time = date("Y-m-d") . ' ' . date("H:i:s", STRTOTIME(date('h:i:sa')));

  //insert into SQLiteDatabase

  $query = "INSERT INTO send_notification(title,exam_id,message,status,created_on,admin_id)VALUES(
    '$title',
    '$exam_id',
    '$message',
    '$status',
    '$time',
    '$a_id'
  )";

  $execute_query =mysqli_query($conn,$query);
  if($execute_query) {
    echo 'saved';
  }
  else{
    echo 'not saved';
  }


}


//register Students
if (isset($_POST['register_student']) && !empty($_FILES["file"]["name"])){

  $fname = mysqli_escape_string($conn,$_POST['firstname']);
  $lname = mysqli_escape_string($conn,$_POST['lastname']);
  $mname = mysqli_escape_string($conn,$_POST['middlename']);
  $dob = mysqli_escape_string($conn,$_POST['dob']);
  $email = mysqli_escape_string($conn,$_POST['email']);
  $phone = mysqli_escape_string($conn,$_POST['phone']);
  $state = mysqli_escape_string($conn,$_POST['state']);
  $lga = mysqli_escape_string($conn,$_POST['lga']);
  $gender = mysqli_escape_string($conn,$_POST['gender']);
  $mmname = mysqli_escape_string($conn,$_POST['mother_maiden_name']);
  $petname = mysqli_escape_string($conn,$_POST['petname']);
  $favfood = mysqli_escape_string($conn,$_POST['favfood']);
  $favsport = mysqli_escape_string($conn,$_POST['favsport']);
  $town = mysqli_escape_string($conn,$_POST['town']);
  //encrpt password using (Secure Hash Algorithm 256 bit)
  //step1 grab the password text
  $pass = mysqli_escape_string($conn,$_POST['password']);
  //encrypt with sha256 with salt
  $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $salt = generate_string($permitted_chars, 100);
  $password = hash('sha256',$salt.$pass);

  $created_on =  date('Y-m-d H:i:s');
  //copy the file into the new path
  $statusMsg = '';// File upload path
  $targetDir = "../images_admin/";
  $fileName = basename($_FILES["file"]["name"]);
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


  $allowTypes = array('jpg','png','jpeg','gif','pdf');
      if(in_array($fileType, $allowTypes)){
        //check if email already exist
        $check_email = mysqli_query($conn,"SELECT * FROM student_table  WHERE email = '$email' ");
        $e  = mysqli_num_rows($check_email);
        if ($e > 1) {
             echo "email ready exists";
        }
        else {
          //check if phone already exist
          $check_email = mysqli_query($conn,"SELECT * FROM student_table  WHERE phone = '$phone' ");
          $ph  = mysqli_num_rows($check_email);
          if ($ph > 1) {
               echo "phone number exist";

          }
          else{
            // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                $query = "INSERT INTO student_table(firstname,lastname,middlename,email,password,phone,mother_maiden_name,user_image,favoritesport,petname,favoritefood,state,lga,dob,town,salt,user_created_on)
                                                            VALUES('$fname',
                                                                  '$lname',
                                                                  '$mname',
                                                                  '$email',
                                                                  '$password',
                                                                  '$phone',
                                                                  '$mmname',
                                                                  '$fileName',
                                                                  '$favsport',
                                                                  '$petname',
                                                                  '$favfood',
                                                                  '$state',
                                                                  '$lga',
                                                                  '$dob',
                                                                  '$town',
                                                                   '$salt',
                                                                   '$created_on'
                                                                )";
                  $execute = mysqli_query($conn,$query);
                  if($execute){
                    echo "saved";
                  }
                  else{
                    echo "Not saved";
                  }



                }
              }


            }
          }
        }



//change password

if(isset($_POST['changepassword'])){

  $email = mysqli_escape_string($conn,$_POST['email']);
  $pass = mysqli_escape_string($conn,$_POST['password']);
  $cpassword = mysqli_escape_string($conn,$_POST['cpassword']);

  if($pass != $cpassword) {
     echo "password mismatch";

  }
  else {
       //update admin $password

       //encrypt with sha256 with salt
       $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $salt = generate_string($permitted_chars, 100);
       $password = hash('sha256',$salt.$pass);

       $update = mysqli_query($conn,"UPDATE admin_table SET password = '$password', salt = '$salt' WHERE email_address = '$email'");
          if ($update){
            echo 'password changed';
          }
          else{
            echo 'failed';
          }

  }

}


//update student Info

if (isset($_POST['update_student']) ){

   $sid = mysqli_escape_string($conn,$_POST['sid']);
  $dob = mysqli_escape_string($conn,$_POST['dob']);
  $email = mysqli_escape_string($conn,$_POST['email']);
  $phone = mysqli_escape_string($conn,$_POST['phone']);


  $petname = mysqli_escape_string($conn,$_POST['petname']);
  $favfood = mysqli_escape_string($conn,$_POST['favfood']);
  $favsport = mysqli_escape_string($conn,$_POST['favsport']);
  $town = mysqli_escape_string($conn,$_POST['town']);
  //encrpt password using (Secure Hash Algorithm 256 bit)
  //step1 grab the password text
  $pass = mysqli_escape_string($conn,$_POST['password']);
  //encrypt with sha256 with salt
  $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $salt = generate_string($permitted_chars, 100);
  $password = hash('sha256',$salt.$pass);




        //check if email already exist
        $check_email = mysqli_query($conn,"SELECT * FROM student_table  WHERE email = '$email' ");
        $e  = mysqli_num_rows($check_email);
        if ($e > 1) {
             echo "email ready exists";
        }
        else {
          //check if phone already exist
          $check_email = mysqli_query($conn,"SELECT * FROM student_table  WHERE phone = '$phone' ");
          $ph  = mysqli_num_rows($check_email);
          if ($ph > 1) {
               echo "phone number exist";

          }
          else{


                // Insert image file name into database
                $query = "UPDATE student_table SET email = '$email',
                                                   password = '$password',
                                                   phone = '$phone',
                                                   favoritesport = '$favsport',
                                                   petname = '$petname',
                                                   favoritefood = '$favfood',
                                                   dob = '$dob',
                                                   town = '$town',
                                                   salt = '$salt'
                                                   WHERE student_id = '$sid'";
                  $execute = mysqli_query($conn,$query);
                  if($execute){
                    echo "saved";
                  }
                  else{
                    echo "Not saved";
                  }



                }
              }


            }


// deactivate users
/*$log_id = $_GET['log_id'];
if($_GET['log_id'] != NULL ){


  $query = mysqli_query($conn,"UPDATE admin_table SET status  = 'Inactive' WHERE email_address = '$log_id' ");

  header('location:../view/Dashboard.php');
}
*/


if (isset($_POST["import"]))
{


  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];

  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);

        $Reader = new SpreadsheetReader($targetPath);

        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {

            $Reader->ChangeSheet($i);

            foreach ($Reader as $Row)
            {

                $question_id = "";
                if(isset($Row[0])) {
                    $question_id = mysqli_real_escape_string($conn,$Row[0]);
                }

                $online_exam_id = "";
                if(isset($Row[1])) {
                    $online_exam_id = mysqli_real_escape_string($conn,$Row[1]);
                }
                $question_title= "";
                if(isset($Row[2])) {
                    $question_title = mysqli_real_escape_string($conn,$Row[2]);
                }

                $answer_option = "";
                if(isset($Row[3])) {
                    $answer_option = mysqli_real_escape_string($conn,$Row[3]);
                }
                $option_1 = "";
                if(isset($Row[4])) {
                    $option_1 = mysqli_real_escape_string($conn,$Row[4]);
                }
                $option_2 = "";
                if(isset($Row[5])) {
                    $option_2 = mysqli_real_escape_string($conn,$Row[5]);
                }
                $option_3 = "";
                if(isset($Row[6])) {
                    $option_3 = mysqli_real_escape_string($conn,$Row[6]);
                }
                $option_4 = "";
                if(isset($Row[7])) {
                    $option_4 = mysqli_real_escape_string($conn,$Row[7]);
                }
              //AES encryption scheme
              $cipher = "AES-128-CTR";
              //Open ssl encryption method
              $ivlen = openssl_cipher_iv_length($cipher);
              $option = 0;
              //non null initialization of the vector for encryption.
              $encryption_iv = "9028993933845222";
              //store encrytion key => ,
              $encryption_key =  "h5hd7jdjds9k3jjdkd9kdkejdi93jkjdp1";
              $question_title = openssl_encrypt($question_title,$cipher,$encryption_key,$option,$encryption_iv);
              $answer_option = openssl_encrypt($answer_option,$cipher,$encryption_key,$option,$encryption_iv);
              $option_1 = openssl_encrypt($option_1,$cipher,$encryption_key,$option,$encryption_iv);
              $option_2 = openssl_encrypt($option_2,$cipher,$encryption_key,$option,$encryption_iv);
              $option_3 = openssl_encrypt($option_3,$cipher,$encryption_key,$option,$encryption_iv);
              $option_4 = openssl_encrypt($option_4,$cipher,$encryption_key,$option,$encryption_iv);





                if (!empty($question_id) || !empty($exam_id)) {
                    $query = "insert into question_table(question_id,online_exam_id,question_title,option_1,option_2,option_3,option_4,answer_option)
                    values('".$question_id."',
                          '".$online_exam_id."',
                          '".$question_title."',
                          '".$option_1."',
                          '".$option_2."',
                          '".$option_3."',
                          '".$option_4."',
                          '".$answer_option."'
         )";
                    $result = mysqli_query($conn, $query);

                    if (! empty($result)) {
                        $type = "success";
                        $message = "Excel Data Imported into the Database";
                        header('location:../view/add_questions.php');
                    } else {
                        $type = "error";
                        $message = "Problem in Importing Excel Data";
                    }
                }
             }

         }
  }
  else
  {
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
}
?>
