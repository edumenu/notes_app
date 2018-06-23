<?php
session_start();
include "db.php";

//Obtaining the ID sent in the post array by the ajax call
$id = $_POST['id'];
//Get the content of the header
$header = $_POST['header'];
//Get the content of the notes
$note = $_POST['note'];
//Get the current time
$time = time();

if(!$header){
  $header = "Note Title";    
}

//Query to update our note table
$query = "UPDATE notes SET header='$header', note = '$note', time = '$time' WHERE id='$id'";
$result = mysqli_query($connection, $query);

//Checking for errors
if(!$result){
  echo 'error';  
}

?>