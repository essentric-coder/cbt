<html>

<form action="" method="post">
  <input type="email" name = "email" placeholder="Enter email" required>
  <input type="submit" name = "submit" value = "SUBMIT"/>
</form>

<?php
include 'connect.php';

if(isset($_POST['submit'])){
      $email = $_POST['email'];
      //insert query
      $sql = "INSERT INTO tbl_email(email)VALUES('$email')";
      $execute = mysqli_query($conn,$sql);
      if($execute){
        //echo "success";
      }
        else {
          echo "failed";
        }

        }
 ?>

 <table>
     <tr>
     <td>ID</td>
     <td>Email</td>
   </tr>
   <?php
    $query = mysqli_query($conn,"SELECT * FROM tbl_email");
    while($row = mysqli_fetch_assoc($query)){
        echo '<tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['email'].'</td>
        <tr>';
      }

    ?>


   <table>





</html>
