<!-- Forgot password form -->
   <form action="" method="post" id="forgotform">
      <div class="modal fade" id="forgotForm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
               <div class="modal-content">
                
                 <!-- Header -->
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Forgot your password?Enter your email address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <!-- /Header -->
                  
                  <!-- Body -->
                  <div class="modal-body">
                     
                      <!-- Email Address -->
                       <div class="form-group">
                        <label for="forgotemail" class="sr-only">Email Address:</label>
                        <input type="email" name="forgotemail" class="form-control" id="forgotemail" placeholder="Email" maxlength="30" required>
                        <div id="emailForgotMessage" class="text-danger"></div>
                      </div>
                          
                  </div>
                  <!-- /Body -->
                  
                  <!-- Footer -->
                  <div class="modal-footer">
                    <input type="submit" name="forgotpassword" class="btn btn-success" value="Submit">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                  <!-- /Footer -->
            </div>
        </div>
     </div>           
    </form>
<!-- /Forgot password form -->    