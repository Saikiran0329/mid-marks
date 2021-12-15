<?php
include 'header.php';
?>
<body>    
<div class="wrapper d-flex align-items-stretch">
<?php 
include 'sidebar.php';  
include 'modal.php';
 ?>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Sudent Info</h2>
        <?php validate_user_registration(); ?>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="btn-group">
       <a href="login.php" type="button" class="btn btn-outline-success">Details</a>
       <a href="register.php" type="button" class="btn btn-outline-primary">Insert marks</a>    
      </div>


    
  <div class="card mt-3">
    <div class="card-body">
               <form id="register-form" method="post" role="form">
<!-- 
              <div class="form-groups">
              <label for="First Name">First Name:</label>
              <input type="text" class="form-control" placeholder="Enter First Name" id="first_name" name="first_name" required>
              </div> 
            
              <div class="form-groups">
              <label for="Last Name">Last Name:</label>
              <input type="text" class="form-control" placeholder="Enter Last Name" id="last_name" name="last_name" required>
              </div>    -->   

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" placeholder="Enter username" id="username" name="username" required>
              </div>


            <div class="form-group">
                <label for="mobile">Mobile No:</label>
                <input type="number" class="form-control" placeholder="Enter mobile no" id="mobile" name="mobile" required>
              </div>

              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="register-email" name="register_email" required>
              </div>

              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="password" name="password" required>
              </div>

              <div class="form-group">
                <label for="pwd">Confirm:</label>
                <input type="password" class="form-control" placeholder="Re-Enter password" name="confirm_password" id="confirm-password" required>
              </div>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

              <button type="submit" class="btn btn-primary" id="register-submit" name="register_submit">Register</button>
            </form>
    </div>
  </div> 

        </div>
</div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>