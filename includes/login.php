    <!-- Login form -->
     <form action="" method="post" id="loginform">
      <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
               <div class="modal-content">
                
                 <!-- Header -->
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <!-- /Header -->
                  
                  <!-- Body -->
                  <div class="modal-body">
                     
                      <!-- Email Address -->
                       <div class="form-group">
                        <label for="loginemail" class="sr-only">Email Address:</label>
                        <input type="email" name="loginemail" class="form-control" id="loginemail" placeholder="Email" maxlength="30">
                        <!--<small id="passwordHelp" class="text-danger">Must be 8-20 characters long.</small>-->
                      </div>
                      
                      <!-- Password -->   
                       <div class="form-group">
                        <label for="loginpassword" class="sr-only">Password:</label>
                        <input type="password" name="loginpassword" class="form-control" id="loginpassword" placeholder="Password" maxlength="30">
                      </div>
                      
                      <!-- Remember me checkbox -->
                      <div class="form-check" style="width: 100%;">
                        <input type="checkbox" class="form-check-input" id="rememberme" name="rememberme">
                        <label class="form-check-label" for="rememberme">Remember me</label>
                         <a href="" style="cursor: pointer;" class="float-right" data-dismiss="modal" data-target="#forgotForm" data-toggle="modal">Forgot password?</a>
                      </div>
                      
                  </div>
                  <!-- /Body -->
                  
                  <!-- Footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary mr-auto" data-target="#signupModal" data-toggle="modal" data-dismiss="modal">Register</button>
                    <input type="submit" name="login" class="btn btn-success" value="Login">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                  <!-- /Footer -->
            </div>
        </div>
     </div>           
    </form>
   <!-- /Login form -->