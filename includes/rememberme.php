
<?php
//Checking to see if the user is not logged in and remember me cookie exits
if(!isset($_SESSION['user_id']) && !empty($_COOKIE['rememberme'])){
  //Function to check if the user id exist
  //array_key_exists('user_id', $_SESSION);      
    //Cookie: $c = $a . "," . bin2hex($b);
    //f2: $b = hash('sha256', $a);
    
  //Extract $authentificator  1&2 fromt the cookie
  //Explode function breaks a string into an array  
  //List assign the values from the explode function    
  list($authentificator1, $authentificator2) = explode(',', $_COOKIE['rememberme']);
  //Convert to binary
  $authentificator2 = hex2bin($authentificator2);
  //Creating a hash for authentificator2    
  $f2authentificator2 = hash('sha256', $authentificator2);     
    
  //Searching for authentificator in the table
  $query = "SELECT * FROM rememberme WHERE authentificator1 = '{$authentificator1}'";
  $result = mysqli_query($connection, $query);      
  //Checking for errors in the query 
  if(!$result){ 
   echo("<div class='alert alert-danger'>There was an error running the query. Error:</div>" . mysqli_error($connection));
   exit;      
  }
  //Checking for the number of rows    
  $num_rows = mysqli_num_rows($result);
  if($num_rows !== 1){
    echo"<div class='alert alert-danger'>Remember me process failed!</div>";
    exit;  
  }
  //Fetching the record
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  //Storing the authentificator2 form the table
  $db_f2authentificator2 = $row['f2authentificator2'];  
  $db_user_id = $row['user_id'];  
    
  if(!hash_equals($db_f2authentificator2, $f2authentificator2)){
      echo"<div class='alert alert-danger'>Remember me process failed!</div>";
    exit; 
  } else{
      //Regenerate new authentificators
      //Store them in cookie
      
       //Creating two variables authentificator 1 and authentificator 2
      $authentificator1 = bin2hex(openssl_random_pseudo_bytes(10)); //80 bits
      $authentificator2 = openssl_random_pseudo_bytes(20);
         
      //***** Store them in a cookie ******
      //Function to join cookie variables     
      function f1($a, $b){
        $c = $a . "," . bin2hex($b);
        return $c;
      }    
      //Storing the f1 cookie random variable      
      $cookieValue = f1($authentificator1,  $authentificator2);     
      //Setting the cookie
      setcookie(
      "rememberme", $cookieValue, time() + 1296000     
      );     
        
      //Function to hash authentificator value     
      function f2($a){
        $b = hash('sha256', $a);
        return $b;  
      }        
       
      $f2authentificator2 = f2($authentificator2);
      $user_id = $_SESSION['user_id'];
      $expiration = date('Y-m-d H:i:s', time() + 1296000);     
         
      //Query to store them in the remember me table
      $query = "INSERT INTO rememberme(authentificator1, f2authentificator2, user_id, expires) VALUES('{$authentificator1}', '{$f2authentificator2}', '{$user_id}', '{$expiration}')";
      $result = mysqli_query($connection, $query);
         
      //Checking for errors in the query 
      if(!$result){ 
        die("There was an error when storing the data. Try remember me later" . mysqli_error($connection));
       }
      
     //Saving a user_id into a variable 
     $_SESSION['user_id'] = $db_user_id;
    
    //Redirecting the user
    header("location:dashboard.php");  
      
  }   
    
}




?>