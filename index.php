<?php
//Stating a session
session_start();
//Starting a connection
include "includes/db.php";
//Rememberme file
include "includes/rememberme.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- Css file -->
    <link rel="stylesheet" href="css/styling.css">
    <!-- Arvo Font -->
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
         <!-- Toastr.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
   
    <title>Online Notes App</title>
  </head>
  <body>
   
   <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
       <a class="navbar-brand" href="#">Navbar</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
       </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
            <ul class="navbar-nav navbar-right">
             <li class="nav-item">
                <a class="nav-link" href="#loginModal" data-toggle="modal">Login</a>
              </li>    
            </ul>
        </div>
    </nav>
    
    <!-- Jumbotron -->
    <div class="jumbotron" id="myContainer">
        <h1>Online Notes App</h1>
        <p>Keep your notes wherever you go</p>
        <p>Easy to use and protect all your notes</p>
        <button type="button" class="btn btn-success btn-lg green signup" data-target="#signupModal" data-toggle="modal">Sign up for Free</button>
    </div>
    
    <!-- Login form -->
    <?php include "includes/modal/login_modal.php"?>  
    <!-- /Login form -->
   
   
    <!-- Sign up form -->
   <?php include "includes/modal/signup_modal.php"?>
    <!-- Sign up form -->
    
    
    <!-- Forgot password form -->
  <?php include "includes/modal/forgot_modal.php"?>
   <!-- /Forgot passowrd form -->
    
    
    <!-- Footer -->
    <div class="footer">   
      <div class="container">
       <p>ehdemdume.com Copyright &copy; 2017 -<?php $today =date("Y"); echo $today?></p>
      </div>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Toastr.js -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- JavaScript file for AJAX Calls -->
    <script src="js/index.js"></script>
  </body>
</html>