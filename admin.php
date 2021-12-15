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
        <h2 class="mb-4">Profile</h2>
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
        <h1 class="r">
            <?php 

          if(logged_in())
           { /*echo  $_SESSION['email'];*/ }
        else
            {
                echo "<script>alert('please login!!');</script>";
                echo("<script>window.location = 'login.php';</script>");
            }
               ?>
                   </h1>


<?php
$sql = 'SELECT * FROM users WHERE email = "'.$_SESSION['email'].'" ';
//echo $sql;
$res = query($sql);
$row = fetch_array($res);  
$count = mysqli_num_rows($res); 

//echo $count;
?>

<div class="card">
  <div class="card-body">
    <h4 class="card-title"><?php echo ucfirst($row['username']); ?></h4>
    <p class="">Email : <?php echo $row['email']; ?></p>
    <p class="">Mobile : <?php echo $row['mobile']; ?></p>
    <!-- < -->
    <!-- <a href="#" class="card-link">Update</a>
    <a href="#" class="card-link">Upgrade</a> -->
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