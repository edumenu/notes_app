<?php
session_start();
if(!isset($_SESSION['user_id'])){
  //If user is not logged in, redirect user to the home page    
  header("location: index.php");    
}
?>
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
    <title>My notes</title>
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
                <a class="nav-link" href="#">Logged is as <b><?php echo $_SESSION['username'];?></b></a>
              </li> 
             <li class="nav-item">
                <a class="nav-link" href="includes/logout.php">Logout</a>
              </li>    
            </ul>
        </div>
    </nav>
    <!-- /Navigation -->
    
    <!-- Container -->
    <div class="container">
      <div class="row" style="margin-bottom: 5px;">
         <!-- First column -->
          <div class="col order-first">
            <!-- Add notes and All notes button  -->
             <button id="addNotes" type="button" class="btn btn-primary blue">Add Note</button> 
             <button id="allNotes" type="button" class="btn btn-primary blue">All Notes</button>   
          </div>
        
          <!-- Second column -->
          <div class="col order-last">
              <!-- Edit notes and Done buttons -->
               <button id="editNotes" type="button" class="btn btn-primary blue float-right">Edit Note</button>
             <button id="doneNotes" type="button" class="btn btn-success green float-right">Done</button>
          </div>  
      </div>
      
      <div class="row" style="margin-bottom: 2px;">
       <!-- Picker selector -->
        <div class="col">
         
          <div class="picker-wrapper">
           <div style="float:left;"><button class="btn btn-primary blue pull-left" id="selectColor">Select color</button></div>
           <div class="color-picker"></div>
           </div>   
            
        </div>  
      </div>
      
      <!-- Notepad -->
       <div id="notepad">
       <input type="text" id='header' placeholder="Note header" style="margin-bottom: 1px;">
        <textarea name="" id="" cols="30" rows="10" id="textarea">
        </textarea>   
       </div> 
       
       <!-- Notes list -->
        <!-- Ajax call to a php file -->
        <div class="list-group" id="notes" class="notes">   
<!--          <button type="button" class="list-group-item list-group-item-action list-group-item-danger"></button>      -->
        </div>   
              
    </div>
    <!-- /Container -->
    
    
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
    <!-- Notes AJAX -->
    <script src="js/mynotes.js"></script>
  </body>
</html>