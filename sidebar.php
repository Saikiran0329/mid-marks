<?php if(logged_in()){ $email=$_SESSION['email']; }
			$exten='admin@cvsr.ac.in';
 ?>
		<nav id="sidebar" style="min-height: 100vh;">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1 style='font-size: 1.8rem'><a href="#" class="logo">
		  			Anurag <br>Mid Marks Portal
		  			<span style="color:#ffffff99;">
		  			<?php if(logged_in())

		  			{ echo $email ."<br>";  
		  			 
		  			}	
		  			// else { echo "";}
		  			?>
		  			</span></a></h1>
	        <ul class="list-unstyled components mb-5">
				<li class="active">
					<?php
						if(!logged_in()) {
							echo "<a href='index.php'><span style='color:white;' class='fa fa-home mr-3'></span> Home</a>";
						}
					?>
					<!-- <a href="index.php"><span class="fa fa-home mr-3"></span> Home</a> -->
				</li>
				<li>
					<?php
						if(!logged_in()) {
							echo "<a href='login_admin.php'><span style='color:white;' class='fa fa-sign-in mr-3'></span> Admin Login</a>";
						}
					?>
					<!-- <a href="index.php"><span class="fa fa-home mr-3"></span> Home</a> -->
				</li>
	          	<li>
				  	<?php
						if(!logged_in()) {
							echo "<a href='login.php'><span style='color:white;' class='fa fa-sign-in mr-3'></span> Faculty Login</a>";
						}
					?>
				</li>
				<li>
					<?php
						if(!logged_in()) {
							echo "<a href='results.php'><span style='color:white;' class='fa fa-sign-in mr-3'></span> Student Login</a>";
					}
					?> 
				</li>
				<li>
					<?php
						if(logged_in()) {
							echo "<a href='admin.php'><span style='color:white;' class='fa fa-user-circle mr-3'></span> Profile</a>";
						}
					?>
					<!-- <a href="admin.php"><span class="fa fa-user-circle mr-3"></span> Profile</a> -->
				</li>
				<?php if(logged_in()):?>	
					<?php if(!endsWith($email,$exten)){
						echo '<li>
							<a href="students.php"><span  style="color:white;" class="fa fa-graduation-cap mr-3"></span>Students</a>
						</li>
						<li>
							<a href="marks.php"><span  style="color:white;" class="fa fa-pencil mr-3"></span>  Enter Marks</a>
						</li>';
					} 
					else{
						echo '
						<li>
							<a href="register.php"><span  style="color:white;" class="fa fa-user-plus mr-3"></span>Faculty Registration</a>
						</li>
						<li>
							<a href="faculty.php"><span  style="color:white;" class="fa fa-user mr-3"></span> Faculty Details</a>
						</li>';
					}
					?>

					<li>
						<a href="marks_data.php"><span  style="color:white;" class="fa fa-bar-chart mr-3"></span>View Marks</a>
					</li>
					<li>
						<a href="logout.php"><span  style="color:white;" class="fa fa-sign-out mr-3"></span> Logout</a>
					</li>
	           	<?php endif; ?>
	        </ul>

	        <!-- <div class="mb-5">
						<h3 class="h6 mb-3">Subscribe for newsletter</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div> -->

	        <!-- <div class="footer">
	        	<p>
						  Copyright &copy; <script>document.write(new Date().getFullYear());</script> | All rights reserved | <a class="link" href ="http://www.techways.in">techways.in </a>
						  </p>
	        </div> -->

	      </div>
    	</nav>