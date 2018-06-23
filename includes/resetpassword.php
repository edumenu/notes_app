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
    <title>Password reset</title>
  </head>
  
 <body>  
  
    <?php    
    //Checking to see if email or activation key is missing
    if(!isset($_GET['user_id']) || !isset($_GET['key'])){
      echo "<div> There was an error. Please click the link in the email.</div>";  
      exit;
     }

    //Obtaining the email and key variables
    $user_id = $_GET['user_id'];
    $key = $_GET['key'];
    $time = time() - 86400;

    $user_id = mysqli_real_escape_string($connection, $user_id);
    $email = mysqli_real_escape_string($connection, $email);

    //Checking combination of user_id and key and less than 24hr
    //The greater the time is, the more recent the key       
    $query = "SELECT user_id FROM forgotpassword WHERE key_value = '$key' AND user_id = '$user_id' AND time > '$time' AND status = 'pending'";
    $result = mysqli_query($connection, $query);

    if(!$result ) {
    die("QUERY FAILED ." . mysqli_error($connection));
    }
    $num_rows = mysqli_num_rows($result); 
    ?> 
    
   <div class="container">
   <div class="jumbotron">
   <h1>Reset password</h1>     
   <?php            

    //Count the number of affect records by the previous query
    if($num_rows !== 1){
     //Display error message 
      echo "<p> Your account could not be activated. Please try again later</p>";   
    }else{  
      echo "<form method='post' id='passwordreset'>
            <input type='hidden' name='key' value='$key'>  
            <input type='hidden' name='user_id' value='$user_id'>  
            <div class='form-group'>
            <label for='password'>Enter your ne password:</label>
            <input type='password' name='password' id='password' placeholder='Enter password' class='form-control'>
            <div id='passwordError' class='text-danger'></div>
            
            <label for='password2'>Confirm password:</label>
            <input type='password' name='password2' id='password2' placeholder='Re-enter password' class='form-control'>
            <div id='passwordConfirmation' class='text-danger'></div>
            
            <input type='submit' class='btn btn-success btn-lg' value='Reset Password'>
            
            </div> 
            </form>";    
        }   
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
    <script>
        
    //Ajax call for the login modal page
    $("#passwordreset").submit(function(event){
        //Prevent default php processing
        event.preventDefault();

        //Collect user inputs
        var datatopost = $(this).serializeArray();
       // console.log(datatopost);

        //Send them to signup.php
        $.ajax({
            url: "storeresetpassword.php",
            type: "post",
            data: datatopost,
            //Success for the ajax call
            success: function(data){
              //Parsing the JSON object
             var prod = jQuery.parseJSON(data);    

                 //Error password message
                 if(prod.error){
                 console.log(prod.error);     
                 //If the array is empty, peform this
                 addText('#passwordError',prod.error);
                 addClass('#password', "is-invalid");
                }else{
                  removeText('#passwordError');
                  removeClass('#password',"is-invalid");
                 }
                
                //Error confirmation message
                 if(prod.error2){
                 console.log(prod.error2);     
                 //If the array is empty, peform this
                 addText('#passwordConfirmation',prod.error2);
                 addClass('#password2', "is-invalid");
                }else{
                  removeText('#passwordConfirmation');
                  removeClass('#password2',"is-invalid");
                 }
                 
                //Success message
                if(prod.success){
                  toastr.success(prod.success "<br /><button type='button' class='btn clear'>Yes</button>", "Sucess:", {"closeButton": true, "preventDuplicates": true, "showEasing": "swing"}); 
                      
                  }else if(prod.mail_error){
                    toastr.error(prod.mail_error, "Error:", {"closeButton": true, "preventDuplicates": true, "showEasing": "swing"});      
                  }
            },
            error: function(){
              //Error for ajax request    
              toastr.error('There has been an error with the ajax call', "Error:", {"closeButton": true, "preventDuplicates": true, "showEasing": "swing"});    
            }
        });    

        //Function to add text to html content 
        function addText(id, message){
          $(id).html(message);  
        }  

        //Function to add text to html content 
        function removeText(id){
          $(id).html($(id).html().replace($(id).text(),''));  
        }

        //Function to add class in input
        function addClass(id, invalid){
          $(id).addClass(invalid);  
        }

        //Function to remove class in input
        function removeClass(id, invalid){
          $(id).removeClass(invalid);  
        }  
     })    
     
    </script>
  </body>
</html>