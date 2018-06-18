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

  //Protection from sql injects
  $email = mysqli_real_escape_string($connection, $email);
  $password = mysqli_real_escape_string($connection, $password);
//

//  //Checking for the number of usernames
  $query = "SELECT * FROM users WHERE email = '$email' AND activation = 'activated'";
  $result = mysqli_query($connection, $query);
  //Checking for errors in the query 
  if(!$result){
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
         
      //Creating two variables authentificator 1 and authentificator 2
      $authentificator1 = bin2hex(openssl_random_pseudo_bytes(10)); //80 bits
      $authentificator2 = openssl_random_pseudo_bytes(20);
         
      //***** Store them in a cookie ******
      //Function to join cookie variables     
      function f1($a, $b){
        $c = $a . "," . bin2hex($b);
        return $c;
      }    
      //Storing the f1 cookie random variable      
      $cookieValue = f1($authentificator1,  $authentificator2);     
      //Setting the cookie
      setcookie("rememberme", $cookieValue, time() + 1296000, "/");     
        
      //Function to hash authentificator value     
      function f2($a){
        $b = hash('sha256', $a);
        return $b;  
      }        
       
      $f2authentificator2 = f2($authentificator2);
      $user_id = $_SESSION['user_id'];
      $expiration = date('Y-m-d H:i:s', time() + 1296000);     
         
      //Query to store them in the remember me table
      $query = "INSERT INTO rememberme(authentificator1, f2authentificator2, user_id, expires) VALUES('{$authentificator1}', '{$f2authentificator2}', '{$user_id}', '{$expiration}')";
      $result = mysqli_query($connection, $query);
         
      //Checking for errors in the query 
      if(!$result){ 
        die("There was an error when storing the data. Try remember me later" . mysqli_error($connection));
       }else{
         $arr['success'] = "success";
        echo json_encode($arr); 
      }     
            
     }

   }else{
     $arr['passError'] = $pass_message;
     echo json_encode($arr);
     exit;
   }
?>