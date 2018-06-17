<!-- Update username -->
 <form action="" method="post" id="updateusernameform">
  <div class="modal fade" id="updateUsername" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
           <div class="modal-content">

             <!-- Header -->
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Edit username</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!-- /Header -->

              <!-- Body -->
              <div class="modal-body">

                  <!-- Email Address -->
                   <div class="form-group">
                    <label for="loginemail" class="sr-only">Username:</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Email" maxlength="30" value="usernamevalue">
                    <!--<small id="passwordHelp" class="text-danger">Must be 8-20 characters long.</small>-->
                  </div>

              </div>
              <!-- /Body -->

              <!-- Footer -->
              <div class="modal-footer">
                <input type="submit" name="updateUsername" class="btn btn-success" value="Submit">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              <!-- /Footer -->
        </div>
    </div>
 </div>           
</form>
<!-- /update username form -->
    
    
<!-- Update email -->
 <form action="" method="post" id="updateemailform">
  <div class="modal fade" id="updateEmail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
           <div class="modal-content">

             <!-- Header -->
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Enter new email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!-- /Header -->

              <!-- Body -->
              <div class="modal-body">

                  <!-- Email Address -->
                   <div class="form-group">
                    <label for="loginemail" class="sr-only">Email:</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" maxlength="50" value="emailvalue">
                    <!--<small id="passwordHelp" class="text-danger">Must be 8-20 characters long.</small>-->
                  </div>

              </div>
              <!-- /Body -->

              <!-- Footer -->
              <div class="modal-footer">
                <input type="submit" name="updateUsername" class="btn btn-success" value="Submit">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              <!-- /Footer -->
        </div>
    </div>
 </div>           
</form>
<!-- /update email -->
    
     
<!-- Update password -->
 <form action="" method="post" id="updatepasswordform">
  <div class="modal fade" id="updatePassword" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
           <div class="modal-content">

             <!-- Header -->
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Enter current and New password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!-- /Header -->

              <!-- Body -->
              <div class="modal-body">

                  <!-- Current paasword -->
                   <div class="form-group">
                    <label for="currentpassword" class="sr-only">Current Password:</label>
                    <input type="password" name="currentpassword" class="form-control" id="currentpassword" placeholder="Your current password" maxlength="30" value="">
                    <!--<small id="passwordHelp" class="text-danger">Must be 8-20 characters long.</small>-->
                   </div> 
                  
                  <!-- New password -->
                   <div class="form-group">
                    <label for="password" class="sr-only">Choose a password:</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Choose password" maxlength="30" value="">
                    <!--<small id="passwordHelp" class="text-danger">Must be 8-20 characters long.</small>-->
                   </div>
                   
                   <!-- New password 2 -->
                   <div class="form-group">
                    <label for="password2" class="sr-only">Confirm Password:</label>
                    <input type="password" name="password2" class="form-control" id="password2" placeholder="Confirm password" maxlength="30" value="">
                    <!--<small id="passwordHelp" class="text-danger">Must be 8-20 characters long.</small>-->
                   </div>

              </div>
              <!-- /Body -->

              <!-- Footer -->
              <div class="modal-footer">
                <input type="submit" name="updateUsername" class="btn btn-success" value="Submit">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              <!-- /Footer -->
        </div>
    </div>
 </div>           
</form>
<!-- /update password -->