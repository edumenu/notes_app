<?php ob_start(); ?>
<!-- This function creates a new session or resumes a current one based on a session identifier passed via GET or POST -->
<?php session_start(); ?>
<?php
  session_destroy();
  setcookie("rememberme", "", time()-3600, "/");        
  header("location: ../index.php");
?>