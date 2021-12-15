<?php include("functions/init.php");
?>
<style>
<?php include("css/custom.css"); ?>
</style>
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
  <body style="background:rgba(0,0,0,0.1);" class="d-flex justify-content-center align-items-center">

<?php

  require_once('conn.php');

  extract($_POST);

  if(isset($_POST['result-submit'])){

/*  echo $htno; echo "</br>";
  echo $password; echo "</br>";*/






}
?>


<div class="container ">
<div class="row">
  <div class="col-sm-1"></div>
       <div class="col-sm-10">
<div class="card text-center">
  <!-- <div class="card-header">
    Contrary to popular belief, Lorem Ipsum is not simply random text.
  </div> -->
  <div class="card-body">		
    <!-- <h1>IV B.Tech I Semester</h1> -->
    <h1 class="card-title">Anurag College | Results (2018-2022)</h1>
    <?php
        $sql4 = "SELECT * FROM std_info WHERE ht_no='$htno'";
        $res4 = mysqli_query($conn,$sql4);
        
        $no_of_results4 = mysqli_num_rows($res4); 
        
        $row = mysqli_fetch_array($res4);
        // echo "<div style='margin-top:10px; margin-bottom:-15px; margin-left:6rem;' class='d-flex'><p style='color:black;'><b>Student Name: ".$row["s_name"]."</p><p style='color:black;margin-left:16rem;'>Branch: ".$row["branch"]."</b><br></p></div>";
        // echo "<div class='d-flex'><p style='color:black;margin-left:6rem;'><b>Roll Number: ".$row['ht_no']."</p><p style='color:black;margin-left:16rem;'>Year/Sem: IV/I"."</b><br></p></div>";
        echo "<div style=''><p style='color:black;'><b>Student Name: ".$row["s_name"]."</p><p style='color:black;'>Branch: ".$row["branch"]."</b><br></p></div>";
        echo "<div><p style='color:black;'><b>Roll Number: ".$row['ht_no']."</p><p style='color:black;'>Year/Sem: IV/I"."</b><br></p></div>";
        // while($row = mysqli_fetch_array($res))
        // {
        //   echo "<tr>"; 
          
        //   echo "<td class='text-center'><b>" . $row["mid"]."</b></td>";
        //   echo "<td class='text-center'><b>" . $row["htno"]."</b></td>";
        //   echo "<td class='text-center'><b>" . $row["cloud_computing"]."/20"."</b></td>";
        //   echo "<td class='text-center'><b>" . $row["sdatabase"]."/20"."</b></td>";
        //   echo "<td class='text-center'><b>" . $row["bigdata"]."/20"."</b></td>";
        //   echo "<td class='text-center'><b>" . $row["project_mngmnt"]."/20"."</b></td>";
        //   echo "<td class='text-center'><b>" . $row["iot"]."/20"."</b></td>";
        //   echo "<td class='text-center'><b>" . $row["s5"]."/20"."</b></td>";
          
        // }
      ?>
       <table class="table table-responsive table-hover">
    <thead>
      <tr>
  
        <th class='text-center'>Mid</th>
 
        <th class='text-center'>CloudComp</th>
        <th class='text-center'>R Programming</th>
        <th class='text-center'>Bigdata</th>
        <th class='text-center'>Project Management</th>
        <th class='text-center'>IOT</th>
        <th class='text-center'>Management Science</th>
 
      </tr>
    </thead>
    <tbody id="myTable">
      <?php 
        
        $sql = "select * from marks where htno = '$htno' ";
        $res = mysqli_query($conn,$sql);
        $no_of_results = mysqli_num_rows($res); 
        if($no_of_results==0)
        {
          echo "<div class='alert alert-danger alert-dismissible' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <strong>Warning!</strong> Oops! No Data Found
          </div>";
          // echo "<script>alert('Invalid credentials')</script>";
          // redirect('results.php');
          
          //echo "Oops! No Messages Found.";
        }
        
        
        // $sql4 = "SELECT * from marks where htno = '$htno' and htno = '$password' ";
        // $res4 = mysqli_query($conn,$sql4);
        
        // $no_of_results4 = mysqli_num_rows($res4); 
        
        
        while($row = mysqli_fetch_array($res))
        {
          echo "<tr>"; 
          
          echo "<td class='text-center'><b>" . $row["mid"]."</b></td>";
          echo "<td class='text-center'><b>" . $row["cloud_computing"]."/20"."</b></td>";
          echo "<td class='text-center'><b>" . $row["sdatabase"]."/20"."</b></td>";
          echo "<td class='text-center'><b>" . $row["bigdata"]."/20"."</b></td>";
          echo "<td class='text-center'><b>" . $row["project_mngmnt"]."/20"."</b></td>";
          echo "<td class='text-center'><b>" . $row["iot"]."/20"."</b></td>";
          echo "<td class='text-center'><b>" . $row["s5"]."/20"."</b></td>";
          
        }
        

        // function getAverage($subject, $htno) {
        //   require_once('conn.php')
        //   $sql = "SELECT sum(".$subject.") as cc from marks where htno = ".$htno;
        //   $result = mysqli_query($conn, $sql);
        //   while($row = mysqli_fetch_array($result)){
        //     $sum = $row['cc'];
        //   }
        //   echo "<script>console.log('$sql')</script>";
        //   $sqlm = "SELECT min(".$subject.") as mm from marks where htno = ".$htno;
        //   $resultm = mysqli_query($conn,$sqlm);
        //   while($row = mysqli_fetch_array($resultm)){
        //     $min = $row['mm'];
        //   }
        //   return ($sum - $min)/2;
        // }
        
        
        /*    $result = mysqli_query($conn,'select sum(cloud_computing) as cc from marks');
        
        $res5= mysqli_fetch_assoc($conn,$result);*/
        
        
        //function avgg($subject,$htno){
          // require_once('conn.php');
          
          // echo 'hi';
          
          /* SUM OF MID MARKS */
          
          $sql = "SELECT sum(cloud_computing) as cc from marks where htno = '$htno'";
          // $sql5 = "SELECT htno FROM marks";
          $result = mysqli_query($conn, $sql);
          // echo 'hello';
          // echo $sql;
          //display data on web page
          while($row = mysqli_fetch_array($result)){
            $sum = $row['cc'];
          }
          // echo "hw ru ";
          
          
          $sqlm = "select min(cloud_computing) as mm from marks where htno = '$htno'";
          $resultm = mysqli_query($conn,$sqlm);
          
          //display data on web page
          while($row = mysqli_fetch_array($resultm)){
            $min = $row['mm'];
          }
          /* MIN OF MID MARKS */
          
          
          // echo $min;
          // echo "<br>";
          $cc = ($sum - $min)/2;
          //echo $avg;
          // $cc = getAverage('cloud_computing', $htno);
          // return $avg;
          
        // }
        $sql = "SELECT sum(sdatabase) as cc from marks where htno = '$htno'";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
            $sum = $row['cc'];
          }
          $sqlm = "select min(sdatabase) as mm from marks where htno = '$htno'";
          $resultm = mysqli_query($conn,$sqlm);
          while($row = mysqli_fetch_array($resultm)){
            $min = $row['mm'];
          }
          if($no_of_results<=2)
          {
            $min=0;
          }
          $rpro = ($sum - $min)/2;
        $sql = "SELECT sum(bigdata) as cc from marks where htno = '$htno'";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
            $sum = $row['cc'];
          }
          $sqlm = "select min(bigdata) as mm from marks where htno = '$htno'";
          $resultm = mysqli_query($conn,$sqlm);
          while($row = mysqli_fetch_array($resultm)){
            $min = $row['mm'];
          }
          if($no_of_results<=2)
          {
            $min=0;
          }
          $bigg = ($sum - $min)/2;
        $sql = "SELECT sum(sdatabase) as cc from marks where htno = '$htno'";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
            $sum = $row['cc'];
          }
          $sqlm = "select min(sdatabase) as mm from marks where htno = '$htno'";
          $resultm = mysqli_query($conn,$sqlm);
          while($row = mysqli_fetch_array($resultm)){
            $min = $row['mm'];
          }
          if($no_of_results<=2)
          {
            $min=0;
          }
          $big = ($sum - $min)/2;
        $sql = "SELECT sum(project_mngmnt) as cc from marks where htno = '$htno'";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
            $sum = $row['cc'];
          }
          $sqlm = "select min(project_mngmnt) as mm from marks where htno = '$htno'";
          $resultm = mysqli_query($conn,$sqlm);
          while($row = mysqli_fetch_array($resultm)){
            $min = $row['mm'];
          }
          if($no_of_results<=2)
          {
            $min=0;
          }
          $pm = ($sum - $min)/2;
        $sql = "SELECT sum(iot) as cc from marks where htno = '$htno'";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
            $sum = $row['cc'];
          }
          $sqlm = "select min(iot) as mm from marks where htno = '$htno'";
          $resultm = mysqli_query($conn,$sqlm);
          while($row = mysqli_fetch_array($resultm)){
            $min = $row['mm'];
          }
          if($no_of_results<=2)
          {
            $min=0;
          }
          $iot = ($sum - $min)/2;
        $sql = "SELECT sum(s5) as cc from marks where htno = '$htno'";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
            $sum = $row['cc'];
          }
          $sqlm = "select min(s5) as mm from marks where htno = '$htno'";
          $resultm = mysqli_query($conn,$sqlm);
          while($row = mysqli_fetch_array($resultm)){
            $min = $row['mm'];
          }
          if($no_of_results<=2)
          {
            $min=0;
          }
          $ms = ($sum - $min)/2;
      ?>
        <tr style="font-weight=bold;" class="css_marks">
          <td class="text-center"><b>Average Marks</td>
          <td class="text-center <?php if ($cc <=9 ) { echo "warning"; } ?>">
            <?php 
            echo "<b>";
            echo  $cc;
            echo "/20";
            ?>
            </td>
            <td class="text-center <?php if ($rpro <= 9 ) { echo "warning"; } ?>">
            <?php 
            echo "<b>";
            echo $rpro;
            echo "/20";
            ?>
            </td>
            <td class="text-center <?php if ($bigg <= 9 ) { echo "warning"; } ?>">
            <?php 
            echo "<b>";
            echo $bigg;
            echo "/20";
            ?>
            </td>
            <td class="text-center <?php if ($pm <= 9 ) { echo "warning"; } ?>">
            <?php 
            echo "<b>";
            echo $pm;
            echo "/20";
            ?>
            </td>
            <td class="text-center <?php if ($iot <= 9 ) { echo "warning"; } ?>">
            <?php 
            echo "<b>";
            echo $iot;
            echo "/20";
            ?>
            </td>
            <td class="text-center <?php if ($ms <= 9 ) { echo "warning"; } ?>">
            <?php 
            echo "<b>";
            echo $ms;
            echo "/20";
            ?>
            </td>
            </tr>
  </tbody>
</table>
<button style="float:right;" id="print" class='btn btn-info' onClick="window.print();">Print Report</button>

<a href="results.php"><button type="submit" class="btn btn-primary" name="result-submit" id="result-submit">Logout</button></a>




<!-- select sum(cloud_computing) as cc from marks where htno = '18H61A1285'; 

select min(cloud_computing) from marks where htno = '18H61A1285';  -->



<!-- <div class="card mt-3">
  <div class="card-body">
    <form id="result-form" method="post" role="form" action="results_info.php">
      <div class="form-group">
        <label for="htno">Hall Ticket No:</label>
        <input type="text" class="form-control" placeholder="Enter Hall Ticket" id="htno" name="htnod" required>
      </div>
      
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" id="password" name="password" required>
      </div>
      <div class="form-group" >
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
      </div>
      <button type="submit" class="btn btn-primary" name="result-submit" id="result-submit">Submit</button>
    </form>
  </div>
</div>  -->
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

</body>