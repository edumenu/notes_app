<?php
session_start();
include "db.php";

//Get user_id
$user_id = $_SESSION['user_id'];
//Get current time
$time = time();
//Insert an empty note into the database
$query = "INSERT INTO notes(user_id, header, note, time) VALUES('{$user_id}', '', '', '$time')";
$result = mysqli_query($connection, $query);

if(!$result){
    echo "error";
}else{
   //This function is going to return an auto generated id used in the last query    
   echo mysqli_insert_id($connection); 
}


?>