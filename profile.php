<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- Landing page css file -->
    <link rel="stylesheet" href="css/styling.css">
     <!-- dashboard css file -->
    <link rel="stylesheet" href="css/dashboard.css">
    <!-- Arvo Font -->
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
       <!-- Toastr.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <title>Profile</title>
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
              <li class="nav-item">
                <a class="nav-link" href="#">Profile<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">My notes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
            <ul class="navbar-nav navbar-right">
             <li class="nav-item">
                <a class="nav-link" href="#">Logged is as <b>username</b></a>
              </li> 
             <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
              </li>    
            </ul>
        </div>
    </nav>
    <!-- /Navigation -->
    
    <!-- Container -->
    <div class="container">
      <h2 style="color: white;" class="text-center">Profile Setting</h2>
      <div class="table-responsive">
        <table class="table table-hover table-condensed table-bordered" style="color: white;">
           <tr data-target='#updateUsername' data-toggle='modal'>
               <td>Username</td>
               <td>Value</td>
           </tr>
           <tr data-target='#updateEmail' data-toggle='modal'>
               <td>Email</td>
               <td>Value</td>
           </tr> 
           <tr data-target='#updatePassword' data-toggle='modal'>
               <td>Password</td>
               <td>hidden</td>
           </tr>  
        </table>   
      </div>              
    </div>
    <!-- /Container -->
    
    <?php include "includes//modal/updateProfile_modal.php"?>    
    
    <!-- Footer -->
    <div class="footer">   
      <div class="container"> 
       <p style="bottom: 0; position: absolute;">ehdemdume.com Copyright &copy; 2017 -<?php $today =date("Y"); echo $today?></p>
      </div>
    </div>

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Color picker -->
    <script src="piklor.js-master/src/piklor.js"></script>
   <!-- Toastr.js -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Color picker -->
    <script src="js/picker.js"></script>
  </body>
</html>