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
        <h2 class="mb-4">
        Reset Password</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore Rt Password dolore magna aliqua.</p>

            <?php display_message(); ?>

            <?php password_reset(); ?>

            <div class="row">
                            <div class="col-lg-12">
                                <form id="register-form" method="post" role="form" >

                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirm_password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="reset-password-submit" id="reset-password-submit" tabindex="4" class="form-control btn btn-register" value="Reset Password">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="hide" name="token" id="token" value="<?php echo token_generator(); ?>">
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