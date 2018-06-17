<?php 
session_start();
//DB connection
include "db.php"
?>

<?php
 $arr = array(); 
 $pass_message = "Password should be more than 6 characters, should have include an upper case letter and a number"; 
 $pass_conf_message = "Passwords do not match";
 $username_exist = "This username already exist";
 $email_exist = "This email already exist";
 $mail_success = "Thank you for registering. A confirmation email has been sent to the email address provided. Please click on the activation link to active your account";
$mail_error = "There has been an error";

 //Get username
 if(isset($_POST['username'])){
  //FILTER_SANITIZE_STRING - removes tags and remove or encode special characters from a string.      
  $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);     
 }
  
 //Get email
 if(isset($_POST['signupemail'])){
  $email = filter_var($_POST["signupemail"], FILTER_SANITIZE_EMAIL);     
 }

 //Get password
 if(isset($_POST['signuppassword'])){
   if(!(strlen($_POST["signuppassword"]) > 6 and preg_match('/[A-Z]/',$_POST["signuppassword"]) and preg_match('/[0-9]/',$_POST["signuppassword"]))){
       $arr['pass'] = $pass_message;
   }else{
   $password = filter_var($_POST["signuppassword"], FILTER_SANITIZE_STRING);
   }
 }

  //Get confirm password
  if(isset($_POST['confirmPassword'])){   
   if(($_POST["signuppassword"] !== $_POST["confirmPassword"])){
       $arr['conf'] = $pass_conf_message;
     }else{
        $confirmPassword = filter_var($_POST["confirmPassword"], FILTER_SANITIZE_STRING); 
     }     
   } 

  //Filter array
  $errors = array_filter($arr);

   //Check for errors in array
   if (!empty($errors)) {
    echo json_encode($errors);  
   }else{

  //Protection from sql injects
  $username = mysqli_real_escape_string($connection, $username);
  $email = mysqli_real_escape_string($connection, $email);
  $password = mysqli_real_escape_string($connection, $password);
//
 $password = password_hash( $password, PASSWORD_BCRYPT, array('cost' => 12));
//
//  //Checking for the number of usernames
  $query = "SELECT * FROM users WHERE username = '$username'";
  $result = mysqli_query($connection, $query);

  if(!$result ) {
          
   die("QUERY FAILED ." . mysqli_error($connection));
     
    }

  //Checking for the number rows  
  $num_rows = mysqli_num_rows($result);
       
  //If to check if the username already exist
  if($num_rows){
    $arr['username'] = $username_exist;
    echo json_encode($arr);
    exit;
  }
       
  //Checking for the number of emails
  $query = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($connection, $query);

  if(!$result ) {
          
   die("QUERY FAILED ." . mysqli_error($connection));
     
    }

  //Checking for the number rows  
  $num_rows = mysqli_num_rows($result);
       
  //Check if the username already exist
  if($num_rows){
    $arr['email'] = $email_exist;
    echo json_encode($arr);
    exit;  
  }

  //Create a unique activation code
  //This function will generate a pseudo random string of byte
  $activationKey = bin2hex(openssl_random_pseudo_bytes(16)); //Converting from binary to hexadecimal
 
  $query = "INSERT INTO users(username, email, password, activation) VALUES('{$username}', '{$email}', '{$password}', '{$activationKey}')";
  $result = mysqli_query($connection, $query);

  if(!$result ) {
          
   die("QUERY FAILED ." . mysqli_error($connection));
     
     }

  //Send email to new user
//  $message = "Please click on this link to activate your account:\n\n";
//  $message .= "http://ehdemdume.com/projects/notes_app/includes/activation.php?email=" .urlencode($email). "&key=$activationKey";
//  if(mail($email, "confirm your Registration", $message, 'From:'.'ehdemdume@gmail.com')){
//    $arr['mail_success'] = $mail_success; 
//    echo json_encode($arr);  
//  }else{
//    $arr['mail_error'] = $mail_error;  
//    echo json_encode($arr);  
//  }
      
   }
?>