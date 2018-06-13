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
                <a class="nav-link" href="#">Logged is as <b>username</b></a>
              </li> 
             <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
              </li>    
            </ul>
        </div>
    </nav>
    
    
    <!-- Container -->
    <div class="container">
      <div class="row" style="margin-bottom: 5px;">
         <!-- First column -->
          <div class="col order-first">
             <button id="addNotes" type="button" class="btn btn-primary blue">Add Note</button> 
             <button id="allNotes" type="button" class="btn btn-primary blue">All Notes</button>   
          </div>
        
          <!-- Third column -->
          <div class="col order-last">
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
       <div id="notepad">
            <textarea name="" id="" cols="30" rows="10">
            </textarea>   
          </div>       
    </div>
    
    
      <div class="picker-wrapper">
             <button class="btn btn-primary blue pull-left" id="selectColor">Select color</button>
             <div class="color-picker"></div>
      </div>
    
    
    <!-- Footer -->
<!--
    <div class="footer">   
      <div class="container"> -->
       <p style="bottom: 0; position: absolute;">ehdemdume.com Copyright &copy; 2017 -<?php $today =date("Y"); echo $today?></p>
      <!--</div>
    </div>
-->
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Color picker -->
    <script src="piklor.js-master/src/piklor.js"></script>
    <!-- Color picker -->
    <script src="js/picker.js"></script>
  </body>
</html>