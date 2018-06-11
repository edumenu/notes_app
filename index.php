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
   
    <title>Hello, world!</title>
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
        <button type="button" class="btn btn-success btn-lg green signup" data-target="#signupModal" data-toggle="modal">Sign up-It's Free</button>
    </div>
    
    <!-- Login form -->
        <form action="" method="post" id="loginform">
      <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
               <div class="modal-content">
                
                 <!-- Header -->
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <!-- /Header -->
                  
                  <!-- Body -->
                  <div class="modal-body">
                      <!-- Email Address -->
                       <div class="form-group">
                        <label for="loginemail" class="sr-only">Email Address:</label>
                        <input type="email" name="loginemail" class="form-control" id="loginemail" placeholder="Email" maxlength="30">
                        <!--<small id="passwordHelp" class="text-danger">Must be 8-20 characters long.</small>-->
                      </div>
                      <!-- Password -->   
                       <div class="form-group">
                        <label for="loginpassword" class="sr-only">Password:</label>
                        <input type="password" name="loginpassword" class="form-control" id="loginpassword" placeholder="Password" maxlength="30">
                      </div>
                  </div>
                  <!-- /Body -->
                  
                  <!-- Footer -->
                  <div class="modal-footer">
                    <input type="submit" name="signup" class="btn btn-success" value="Sign up">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                  <!-- /Footer -->
            </div>
        </div>
     </div>           
    </form>
   <!-- /Login form -->
   
   
    <!-- Sign up form -->
    <form action="" method="post" id="signupform">
      <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
               <div class="modal-content">
                
                 <!-- Header -->
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Sign up today to start using the Online Notes App</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <!-- /Header -->
                  
                  <!-- Body -->
                  <div class="modal-body">
                     <!-- Username -->
                      <div class="form-group">
                        <label for="username" class="sr-only">Username:</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" maxlength="30">
<!--                        <small id="passwordHelp" class="text-danger">Must be 8-20 characters long.</small>-->
                      </div>
                      <!-- Email Address -->
                       <div class="form-group">
                        <label for="signupemail" class="sr-only">Email Address:</label>
                        <input type="email" name="signupemail" class="form-control" id="signupemail" placeholder="Enter email" maxlength="30">
                      </div>
                      <!-- Password -->   
                       <div class="form-group">
                        <label for="signuppassword" class="sr-only">Password:</label>
                        <input type="password" name="signuppassword" class="form-control" id="signuppassword" placeholder="Enter your password" maxlength="30">
                      </div>
                      <!-- Confirm Password -->
                       <div class="form-group">
                        <label for="confirmPassword" class="sr-only">Confirm Password:</label>
                        <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Confirm your password" maxlength="30">
                      </div>
                      
                  </div>
                  <!-- /Body -->
                  
                  <!-- Footer -->
                  <div class="modal-footer">
                    <input type="submit" name="signup" class="btn btn-success" value="Sign up">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                  <!-- /Footer -->
            </div>
        </div>
     </div>           
    </form>
    <!-- Sign up form -->
    
    <!-- Forgot password form -->
    
    
    <!-- Footer -->
    <div class="footer">   
      <div class="container">
       <p>ehdemdume.com Copyright &copy; 2017 -<?php $today =date("Y"); echo $today?></p>
      </div>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>