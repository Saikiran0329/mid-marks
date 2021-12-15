<?php
include 'header.php';
?>
<body>		
<div class="wrapper d-flex align-items-stretch">
<?php 
include 'sidebar.php';  
include 'modal.php';
display_message();
validate_code(); 
?>
<?php  ?>

			<?php ?>

        <!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
		<h2 class="mb-4">Reminder</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">	
		
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert">
					<span aria-hidden="true">×</span><span class="sr-only">Close</span>
				</button>We have a sent a security code to your email <span>@edwin@email.com</span>
			</div>					
		</div>
	</div>

 <div class="card mt-3">
    <div class="card-body">


<form id="register-form"  method="post" role="form" autocomplete="off">
<div class="form-groups">
<label for="code">Enter Code</label>
<input type="text" name="code" id="code" class="form-control" placeholder="*************">
</div>
<div class="form-groups py-1">
<button type="cancel" name="cancel_submit" id="cencel-submit" class="btn btn-danger">Cancel</button>
<button type="submit" name="recover-submit" id="recover-submit"class="btn btn-success">Submit</button>
	

</div>
<input type="hidden" class="hide" name="token" id="token" value="">
</form>



  </div>
</div>




</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>