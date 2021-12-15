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
		    <h1>IV B.Tech I Semester</h1>
        <h2 class="mb-4">Student Info</h2>
        <?php validate_user_registration(); ?>
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
      <div class="btn-group">
       <a href="std_details.php" type="button" class="btn btn-success">Add Student</a>
       <a href="marks.php" type="button" class="btn btn-outline-primary">Enter marks</a>    
      </div>

<!-------------form------------------>
<div class="card mt-3">
    <div class="card-body">
               <form id="register-form" method="post" role="form" action="insert_std.php">


            <div class="form-group">
                <label for="sname">Student Name:</label>
                <input type="text" class="form-control" placeholder="Enter Student Name" id="sname" name="sname" required>
              </div>


            <div class="form-group">
                <label for="htno">Hall Ticket:</label>
                <input type="text" class="form-control" placeholder="Enter Hall Ticket no" id="htno" name="htno" required>
              </div>

            <div class="form-group">
                <label for="branch">Branch:</label>
                <input type="text" class="form-control" placeholder="Enter branch" id="branch" name="branch" required>
              </div>              



              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> -->

              <button type="submit" class="btn btn-primary" id="register-submit" name="register_submit">Submit</button>
            </form>
    </div>
  </div> 





<!-------------form------------------>



        </div>
</div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>