<?php
session_start();
include "db.php";

//Get the user id
$user_id = $_SESSION['user_id'];

//Delete all empty notes
$query = "DELETE FROM notes WHERE note=''";
 $result = mysqli_query($connection, $query);
 //Checking for errors in the query 
if(!$result){
   echo "<div class='alert alert-danger'> An error occurred</div>";
    exit;
}

//Load notes
$query = "SELECT * FROM notes WHERE user_id = '82' ORDER BY time DESC";
$result = mysqli_query($connection, $query);
 //Checking for errors in the query 
if(!$result){
   echo "<div class='alert alert-danger'>An error occurred</div>";
  //  echo "Error: " . mysqli_error($connection);
    exit;
}

//Checking to see if the user has any notes int he database
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      //Assign values to each variable        
      $note_id = $row['id'];
      $note = $row['note'];
      $header = $row['header'];
      $time = $row['time'];
      $time = date("F d, Y h:i:s A", $time);
      //Output the user's notes on the main dahsboard page 
      echo "<div type='button' class='list-group-item list-group-item-action list-group-item-danger' id='$note_id'><h4 id='textHeader'>$header</h4><div id='timeHeader'>$time</div></div>"; //<button type='button' class='close' data-dismiss='alert'>&times;</button> 
    }
    
}else{
   //Display a message when the user has no notes in the database    
   echo "<div class='alert alert-danger'> There are no notes</div>";  
}

?>