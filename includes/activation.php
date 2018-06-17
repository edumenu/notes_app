<?php
//STrting a session
session_start();
//Adding a connection
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <!-- Toastr.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <title>Account activation</title>
  </head>
  
 <body>  
 
 
<!--
 <div class="container">
  <div class="jumbotron">
    <h1>Account Activation</h1>      
    <p>Your account has been activated.</p>
    <a type='button' href='../index.php' class='btn btn-success'>Login</a>
  </div>           
 </div>
-->
  
    <?php    

    //Checking to see if email or activation key is missing
    if(!isset($_GET['email']) || !isset($_GET['email'])){
      echo "<div> There was an error. Please click the activation link in the email.</div>";  
      exit;
     }

    //Obtaining the email and key variables
    $email = $_GET['email'];
    $key = $_GET['key'];

    $key = mysqli_real_escape_string($connection, $key);
    $email = mysqli_real_escape_string($connection, $email);

    $query = "UPDATE users set activation='activated' WHERE email = '$email' AND activation = '$key' LIMIT 1";
    $result = mysqli_query($connection, $query);

    if(!$result ) {
    die("QUERY FAILED ." . mysqli_error($connection));
    }
   
  ?> 
    
  <div class="container">
  <div class="jumbotron">
  <h1>Account Activation</h1>    
    
  <?php            

    //Count the number of affect records by the previous query
    if(mysqli_affected_rows($connection) == 1){
      //Dispay a success m essage
      echo "<p> Your account has been activated.</p>";    
      echo "<a type='button' href='../index.php' class='btn btn-success'>Login</a>";    
    }else{
      //Display error message 
      echo "<p> Your account could not be activated. Please try again later</p>";     
    }

//     esdddfes@gm.com
//         
//     ecab0487e3fc199e173c3aa831058390     
     
    ?>
    
    </div>           
    </div>
  
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Toastr.js -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  </body>
</html>