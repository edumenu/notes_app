<?php ob_start(); ?>
<!-- This function creates a new session or resumes a current one based on a session identifier passed via GET or POST -->
<?php session_start(); ?>
<?php
  //Distroy all sesison data
  session_destroy();
  //Set empty cookie
  setcookie("rememberme", "", time()-3600, "/");  
  //Redirect user to the main page
  header("location: ../index.php");
?>