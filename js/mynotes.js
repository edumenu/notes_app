$(function(){
    //Define variables
    var activeNote = 0;
    //Load notes
    $.ajax({
      url: "includes/loadnotes.php",
      success: function (data){
         $('#notes').html(data); 
         // console.log(data);
      },
        error: function(){  //Failure of the ajax call
          toastr.error("There was an error with the ajax call.", "Error:", {"closeButton": true, "preventDuplicates": true, "showEasing": "swing"});   
        }    
    });
    //Add a new note: ajax call creatnote.php
    //Clicking on the addNotes button
    $("#addNotes").click(function(){
        //Load notes
       $.ajax({
        url: "includes/createnote.php",
        success: function (data){   //Success of the ajax call
          if(data == 'error'){
            toastr.error("There was an issue inserting your notes. Try again later.", "Error:", {"closeButton": true, "preventDuplicates": true, "showEasing": "swing"});  
           }else{
               activeNote = data;
               //Empty the textarea
               $("textarea").val("");
               //Show or hide element
               showHide(["#notepad", "#allNotes", ".picker-wrapper"],["#addNotes", "#notes", "#editNotes", "#doneNotes"]);
               //Focus in the textarea
               $("textarea").focus();
            }
         },
          error: function(){  //Failure of the ajax call
          toastr.error("There was an error. Try again later", "Error:", {"closeButton": true, "preventDuplicates": true, "showEasing": "swing"});   
        } 
       });      
     });
    
    //Type note: ajax call to updatenote.php
    $("textarea").keyup(function(){
         //Update notes
        $.ajax({
          url: "includes/updatenote.php",
          type: "POST",
          //Send the current note with its ID to updatenote php file
          data: {note: $(this).val(), header: $('#header').val(), id: activeNote},    
          success: function (data){
             if(data == 'error'){
            toastr.error("There was an issue updating the notes in the database", "Error:", {"closeButton": true, "preventDuplicates": true, "showEasing": "swing"});  
           }
              
          },
            error: function(){  //Failure of the ajax call
              toastr.error("There was an error with the ajax call.", "Error:", {"closeButton": true, "preventDuplicates": true, "showEasing": "swing"});   
           }    
      }); 
    });
    
    //click on all notes button
     //Clicking on the allNotes button
    $("#allNotes").click(function(){
        //Load notes
        $.ajax({
          url: "includes/loadnotes.php",
          success: function (data){
             $('#notes').html(data); 
             //Show or hide element
             showHide(["#addNotes", "#notes" , "#editNotes"],[".picker-wrapper", "#allNotes", "#notepad"]);
          },
            error: function(){  //Failure of the ajax call
              toastr.error("There was an error with the ajax call.", "Error:", {"closeButton": true, "preventDuplicates": true, "showEasing": "swing"});   
            }    
      });      
     });
    
    //Click on done button after editing all notes 
    //Click on edit: go to edit mode (show delete button at end of the note)
    //Functions for clicking on a note/ delete button
    //Function to hide elements
    function showHide(array1, array2){
       for(var i = 0; i < array1.length; i++){
         $(array1[i]).show();   
       }
        
       for(var i = 0; i < array2.length; i++){
         $(array2[i]).hide();   
       }  
    };
    
})