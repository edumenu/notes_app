<?php

    //Checking to see if email or activation key is missing
//    if(!isset($_GET['user_id']) || !isset($_GET['key'])){
//      echo "<div> There was an error. Please click the link in the email.</div>";  
//      exit;
//     }

    //Error and success messages
    $arr = array();
    $error = "Password should be more than 6 characters, should have include an upper case letter and a number";
    $error2 = "Passwords do not match";
    $success = "Your password has been successfully updated!";

    //Obtaining the email and key variables
    $user_id = $_POST['user_id'];
    $key = $_POST['key'];
    $time = time() - 86400;

    $user_id = mysqli_real_escape_string($connection, $user_id);
    $email = mysqli_real_escape_string($connection, $email);

    //Checking combination of user_id and key and less than 24hr
    //The greater the time is, the more recent the key       
    $query = "SELECT user_id FROM forgotpassword WHERE key_value = '$key' AND user_id = '$user_id' AND time > '$time' AND status = 'pending'";
    $result = mysqli_query($connection, $query);

    if(!$result){
    echo "QUERY FAILED";
    }

    $num_rows = mysqli_num_rows($result); 

    if($num_rows !== 1){  
     echo "<div> There was an error. Please try again later.</div>";    
     exit;
    }
  
    //Get password
    if(isset($_POST['password'])){
       if(!(strlen($_POST["password"]) > 6 and preg_match('/[A-Z]/',$_POST["password"]) and preg_match('/[0-9]/',$_POST["password"]))){
           $arr['error'] = $error;
       }else{
       $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
       }
     }

     //Get confirm password
     if(isset($_POST['password2'])){   
       if(($_POST["password2"] !== $_POST["password2"])){
           $arr['error2'] = $error2;
         }else{
            $password2 = filter_var($_POST["password2"], FILTER_SANITIZE_STRING); 
        }     
     } 

      //Filter array
      $errors = array_filter($arr);

      //Check for errors in array
      if(!empty($errors)){
        echo json_encode($errors);
        exit;  
      }else{
          
        //Protection from sql injects
        $password = mysqli_real_escape_string($connection, $password);
          
        $password = password_hash( $password, PASSWORD_BCRYPT, array('cost' => 12)); 
               
       $query = "UPDATE users password='$password' WHERE uesr_id='$user_id'";
       $result = mysqli_query($connection, $query);

       if(!$result){
       echo "There was a problem storing the new password. Try again later!";
       exit;
        }  
        
        //Set the key status to "used" to prevent it from being used again
        $query = "UPDATE forgotpassword SET status='used' WHERE key_value='$key' AND uesr_id='$user_id'";
        $result = mysqli_query($connection, $query);

      if(!$result){
       echo "There was a problem storing the new password. Try again later!";
       exit;
        }else{
          $arr['success'] = $success;    
          echo json_encode($arr);  
        }       
     }    
   


?>