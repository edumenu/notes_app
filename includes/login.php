<?php 
session_start();
//DB connection
include "db.php"
?>

<?php
 $arr = array(); 
 $pass_message = "Your password is incorrect!"; 
 $duplicate = "Email or password is incorrect";
 //$emil_message = "Email does not exist";
  
 //Get email
 if(isset($_POST['loginemail'])){
  $email = filter_var($_POST["loginemail"], FILTER_SANITIZE_EMAIL);     
 }
 //Get password
 if(isset($_POST['loginpassword'])){
  $password = filter_var($_POST["loginpassword"], FILTER_SANITIZE_STRING);
 } 

  //Filter array
 // $errors = array_filter($arr);

   //Check for errors in array
//   if (!empty($errors)) {
//    echo json_encode($errors);  
//   }else{

  //Protection from sql injects
  $email = mysqli_real_escape_string($connection, $email);
  $password = mysqli_real_escape_string($connection, $password);
//
//  $password = password_hash( $password, PASSWORD_BCRYPT, array('cost' => 12));

//  //Checking for the number of usernames
  $query = "SELECT * FROM users WHERE email = '$email' AND activation = 'activated'";
  $result = mysqli_query($connection, $query);
  //Checking for errors in the query 
  if(!$result ) {
   die("QUERY FAILED ." . mysqli_error($connection));
  }

$row = mysqli_fetch_array($result);

   $db_username = $row['username'];
   $db_password = $row['password'];
   $db_user_id = $row['user_id'];
   $db_email = $row['email'];

   if (password_verify($password,$db_password)){
     $_SESSION['user_id'] = $db_user_id;
     $_SESSION['username'] = $db_username;
     $_SESSION['email'] = $db_email;

     if(empty($_POST['rememberme'])){
        $arr['success'] = "success";
         
        echo json_encode($arr);   
      }else{

     }

   }else{
     $arr['passError'] = $pass_message;
     echo json_encode($arr);
     exit;
   }
?>