
<?php
include 'header.php';
include_once('conn.php');
?>
<style>
<?php include("css/custom.css"); ?>
</style>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
<?php 
		
$year  = date("Y");
$month = date("F");	
$day   = date("j");




include 'sidebar.php';  
include 'modal.php';
display_message();

?>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5 centered-div">
      	<?php 
/*      	echo $year." ".$month." ".$day ."<br>"; 
      	echo $day;*/
      	?>
		<!-- <h1>IV B.Tech I Semester</h1> -->
        <h2 class="mb-4 centered-text">Faculty Information</h2>
        <!-- <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p> -->
  <input class="form-control search-msg mb-3" style="width: 40rem;" id="myInput" type="text" placeholder="Search..">
        <table class="table table-responsive table-hover">
    <thead>
      <tr>
        <th>Sno</th>
        <th>Name</th>
        <th>Mobile</th>
 
        <!-- <th>Branch</th> -->
        <th>Email</th>
        <!-- <th>Action</th> -->
      </tr>
    </thead>
     <tbody id="myTable">
    	<?php	
    	  if(logged_in())
    	   { /*echo  $_SESSION['email'];*/ }
    	else
    		{
    			echo "<script>alert('please login!!');</script>";
    			echo("<script>window.location = 'login.php';</script>");
    		}
    	$sql = "select * from users where email like '%it@cvsr%'";
		$res = mysqli_query($conn,$sql);
		$no_of_results = mysqli_num_rows($res);	
		if($no_of_results==0)
		{
	echo "<div class='alert alert-danger alert-dismissible' role='alert'>
  	<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  	<strong>Warning!</strong> Oops! No Messages Found.
 </div>";

				//echo "Oops! No Messages Found.";
		}	

		$del="del";
		$update="update"; 
		//$message = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

//echo $year." ".$month." ".$day ."</br>";


				 $i=1;
				while($row = mysqli_fetch_array($res))
				{
				echo "<tr>"; 
				echo "<td>" . $i. "</td>";
				echo "<td><b>" . ucfirst($row["username"])."</b></td>";
				echo "<td><b>" . ucfirst($row["mobile"])."</b></td>";
                echo "<td><b>" . ucfirst($row["email"])."</b></td>";
                // echo "<td><b>" . ucfirst($row["email"])."</b></td>";
          
               

	// echo "<td>
	// <a class='btn btn-info' href='std_info_up.php?email=".$row['email']."&skey=".$row['id']."&action=$update'>Update</a>
	// </td>";
				echo  "</tr>";



				
	$i++;
	}


?>

      </tbody>
  </table>





</div>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    <script src="js/jquery.min.js"></script>

    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>



