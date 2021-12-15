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
        <h2 class="mb-4">Reminder</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

<?php
activate_user();
?> 

        </div>

</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>