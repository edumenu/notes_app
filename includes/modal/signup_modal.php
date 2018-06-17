    <!-- Sign up form -->
    <form method="post" id="signupform">
      <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
               <div class="modal-content">
                
                 <!-- Header -->
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Sign up today to start using the Online Notes App</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <!-- /Header -->
                  
                  <!-- Body -->
                  <div class="modal-body">
                    
                     <!-- Username -->
                      <div class="form-group">
                        <label for="username" class="sr-only">Username:</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" maxlength="30" required>
                        <div id="usernameMessage" class="text-danger"></div>
                      </div>
                      <!-- Email Address -->
                       <div class="form-group">
                        <label for="signupemail" class="sr-only">Email Address:</label>
                        <input type="email" name="signupemail" class="form-control" id="signupemail" placeholder="Enter email" maxlength="30" required>
                        <div id="emailMessage" class="text-danger"></div>
                      </div>
                      <!-- Password -->   
                       <div class="form-group">
                        <label for="signuppassword" class="sr-only">Password:</label>
                        <input type="password" name="signuppassword" class="form-control" id="signuppassword" placeholder="Enter your password" maxlength="30" required>
                        <div id="passwordMessage" class="text-danger"></div>
                      </div>
                      <!-- Confirm Password -->
                       <div class="form-group">
                        <label for="confirmPassword" class="sr-only">Confirm Password:</label>
                        <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Confirm your password" maxlength="30" required>
                        <div id="confpasswordMessage" class="text-danger"></div>
                      </div>
                      
                  </div>
                  <!-- /Body -->
                  
                  <!-- Footer -->
                  <div class="modal-footer">
                    <input type="submit" name="signup" class="btn btn-success" value="Sign up">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                  <!-- /Footer -->
            </div>
        </div>
     </div>           
    </form>
    <!-- Sign up form -->