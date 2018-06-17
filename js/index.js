//******Ajax call for the sign up form**************
//Ajax call for checking if the form on the signup modal has been submitted
$("#signupform").submit(function(event){
    //Prevent default php processing
    event.preventDefault();
    
    //Collect user inputs
    var datatopost = $(this).serializeArray();
    //console.log(datatopost);
    
    //Send them to signup.php
    $.ajax({
        url: "includes/signup.php",
        type: "post",
        data: datatopost,
        //Success for the ajax call
        success: function(data){
        //Parsing the JSON object
        var prod = jQuery.parseJSON(data);
         if(prod.pass){
             //If the array is empty, peform this
             addText('#passwordMessage',prod.pass);
             addClass('#signuppassword', "is-invalid");
            }else{
              removeText('#passwordMessage');
              removeClass('#signuppassword',"is-invalid");
            } 
            
            if(prod.conf){
             //If the array is empty, peform this
             addText('#confpasswordMessage',prod.conf);
             addClass('#confirmPassword', "is-invalid");
            }else{
              removeText('#confpasswordMessage');
              removeClass('#confirmPassword',"is-invalid");
            } 
            
            if(prod.username){
             //If the array is empty, peform this
             addText('#usernameMessage',prod.username);
             addClass('#username', "is-invalid");
            }else{
              removeText('#usernameMessage');
              removeClass('#username',"is-invalid");
            } 
            
            if(prod.email){
             //If the array is empty, peform this
             addText('#emailMessage',prod.email);
             addClass('#signupemail', "is-invalid");
            }else{
              removeText('#emailMessage');
              removeClass('#signupemail',"is-invalid");
            }
            
            if(prod.mail_success){
              toastr.success(prod.mail_success, "Activation:", {"closeButton": true, "preventDuplicates": true, "showEasing": "swing"});    
              }else if(prod.mail_error){
                toastr.error(prod.mail_error, "Error:", {"closeButton": true, "preventDuplicates": true, "showEasing": "swing"});      
              }

        },
        error: function(){
          //Error for ajax request    
          toastr.error('There has been an error with the ajax call', "Error:", {"closeButton": true,  "progressBar": true, "preventDuplicates": true, "showEasing": "swing"});    
        }
    });
    
    //Function to add text to html content 
    function addText(id, message){
      $(id).html(message);  
    }  
    
    //Function to add text to html content 
    function removeText(id){
      $(id).html($(id).html().replace($(id).text(),''));  
    }
    
    //Function to add class in input
    function addClass(id, invalid){
      $(id).addClass(invalid);  
    }
    
    //Function to remove class in input
    function removeClass(id, invalid){
      $(id).removeClass(invalid);  
    } 
})

//Ajax call for the login modal page
$("#loginform").submit(function(event){
    //Prevent default php processing
    event.preventDefault();
    
    //Collect user inputs
    var datatopost = $(this).serializeArray();
    //console.log(datatopost);
    
    //Send them to signup.php
    $.ajax({
        url: "includes/login.php",
        type: "post",
        data: datatopost,
        //Success for the ajax call
        success: function(data){
          //Parsing the JSON object
         var prod = jQuery.parseJSON(data);    
             
            if(prod.passError){
             //If the array is empty, peform this
             addText('#passwordMessage',prod.passError);
             addClass('#loginpassword', "is-invalid");
            }else{
              removeText('#passwordMessage');
              removeClass('#loginpassword',"is-invalid");
            }  
             
             //Success callback
             if(prod.success == "success"){
                 window.location = "dashboard.php";
             }

        },
        error: function(){
          //Error for ajax request    
          toastr.error('There has been an error with the ajax call', "Error:", {"closeButton": true, "preventDuplicates": true, "showEasing": "swing"});    
        }
    });
    
    
       //Function to add text to html content 
    function addText(id, message){
      $(id).html(message);  
    }  
    
    //Function to add text to html content 
    function removeText(id){
      $(id).html($(id).html().replace($(id).text(),''));  
    }
    
    //Function to add class in input
    function addClass(id, invalid){
      $(id).addClass(invalid);  
    }
    
    //Function to remove class in input
    function removeClass(id, invalid){
      $(id).removeClass(invalid);  
    } 
    
})