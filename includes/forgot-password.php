<?php 
//Start session
session_start();
//Connecting to the database
include "db.php";


$arr = array();
$error_message = "This email does not exist in our database";
$mail_success = "An email has been sent to your email. Please click on the link to reset your password.";
$mail_error = "There has been an error. Please try again later.";

//Get email from forgot email modal
if(isset($_POST['forgotemail'])){
  $email = filter_var($_POST["forgotemail"], FILTER_SANITIZE_EMAIL);
 }

//Protection from sql injects
$email = mysqli_real_escape_string($connection, $email);

$query = "SELECT * FROM users WHERE email = '{$email}'";
$result = mysqli_query($connection, $query);
  //Checking for errors in the query 
  if(!$result){
   echo "<div class='alert alert-danger'>QUERY FAILED</div>";
  }
 $num_rows = mysqli_num_rows($result);
 if($num_rows !== 1){
   $arr['error'] = $error_message;
   echo json_encode($arr);      
   exit;     
 }
 //Obtaining data from table
 $row = mysqli_fetch_row($result);
 $user_id = $row['user_id'];
  //Create a unique activation code
  //This function will generate a pseudo random string of byte
  $key = bin2hex(openssl_random_pseudo_bytes(16)); 
 //Current time
 $time = time();
 $status = 'pending';
 
 //Query to insert data into the forgotpassword table
 $query = "INSERT INTO forgotpassword (user_id, key_value, time, status) VALUES ('{$user_id}', '{$key}', '{$time}', '{$status}')";
 $result = mysqli_query($connection, $query);
         
  //Checking for errors in the query 
  if(!$result){ 
    echo "There was an error with the connection";
    exit;  
   }else{
      //Send email to new user
      $message = "Please click on this link to reset your password:\n\n";
      $message .= "http://ehdemdume.com/projects/notes_app/includes/resetpassword.php?user_id=$user_id&key=$key";
      if(mail($email, "Password reset", $message, 'From:'.'ehdemdume@gmail.com')){
        $arr['mail_success'] = $mail_success; 
        echo json_encode($arr);
        exit;  
      }else{
        $arr['mail_error'] = $mail_error;  
        echo json_encode($arr);
        exit;  
      }    
    }           
?>