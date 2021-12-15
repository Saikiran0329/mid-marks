<?php include("functions/init.php");?>
<!doctype html>
<html lang="en">
  <head>
  	<title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="images/plane-fav.png">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">		
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/custom.css">

  </head>
  <body style="height: 100vh;background:rgba(0,0,0,0.1);" class="d-flex flex-column justify-content-center align-items-center">
<div class="container">
<div class="row">
  <div class="col-sm-2"></div>
       <div class="col-sm-8">
<div class="card text-center">
  <div class="card-header">
    <a href="index.php"><button type="button" class="btn btn-primary">Home</button></a>
  </div>
  <div class="card-body">
    <h5 class="card-title">Anurag College | Results</h5>
    <div id='close' class='alert alert-danger alert-dismissible' style='display: none' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <strong>Warning!</strong> Oops! No Data Found
    </div>
<div class="card mt-3">
      <div class="card-body">
                 <form id="result-form" method="post" role="form" >
                <div class="form-group">
                  <label for="htno">Hall Ticket No:</label>
                  <input type="text" class="form-control" placeholder="Enter Hall Ticket" id="htno" name="htno" required>
                </div>
                
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" id="password" name="password" required>
                </div>
<!--                 <div class="form-group" >
                  <label class="form-check-label">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember"> Remember me
                  </label>
    
                </div>
                   <div class="form-group">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="mb-2">
                            <a href="recover.php" tabindex="5" class="forgot-password">Forgot Password?</a>
                          </div>
                        </div>
                      </div>
                    </div> -->
                <button type="submit" class="btn btn-primary" name="result-submit" id="result-submit">Submit</button>
              </form>
      </div>
    </div> 
    </div>  




  </div>
  <!-- <div class="card-footer text-center">
    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
  </div> -->
</div>
    <div class="col-sm-2"></div>

</div>
</div>
</div>

<?php
require_once('conn.php');

extract($_POST);

if(isset($_POST['result-submit'])){
  $sql4 = "SELECT * FROM std_info WHERE ht_no='$htno' AND ht_no='$htno'";
  $res4 = mysqli_query($conn,$sql4);
  $no_of_results4 = mysqli_num_rows($res4);
  if($no_of_results4==0){
    echo "<script>
      const close = document.getElementById('close');
      close.style.display = 'block';
    </script>";
  }
  else{
    echo "<script>
    const e=document.getElementById('result-form');
    e.action='results_info.php';
    e['htno'].value='$htno';
    e['password'].value='$htno';
    e.submit();
    </script>";
  }
}
?>
</body>