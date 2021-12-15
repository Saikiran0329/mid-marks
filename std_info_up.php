<?php include 'header.php'; ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Message Update</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/custom.css">

<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
   function submit()
   {
    alert('hello');
   } 
</script>
</head>
<body>
<?php 

 
$ht_no = $_GET['ht_no']; 
$std_key = $_GET['skey'];

echo $ht_no;
echo $std_key; 



$sql = "select * from std_info where s_id = $std_key";
$res = query($sql);
$row = fetch_array($res);        

?>


 <div id="myModal" class="modal fade">
    <div class="modal-dialog">
                <div class="modal-content">
 
              <div class="modal-body">
                <div class="modal-body">

            <form id="register-form" method="post" role="form" action="up_std_det.php?key=<?php echo $row['s_id'];?>">


            <div class="form-group">
                <label for="sname">Student Name:</label>
                <input type="text" class="form-control" placeholder="Enter Student Name" id="sname" name="sname" value="<?php echo $row['s_name'];?>" required>
              </div>


            <div class="form-group">
                <label for="htno">Hall Ticket:</label>
                <input type="text" class="form-control" placeholder="Enter Hall Ticket no" id="htno" name="htno" value="<?php echo $row['ht_no'];?>"required>
              </div>

            <div class="form-group">
                <label for="branch">Branch:</label>
                <input type="text" class="form-control" placeholder="Enter branch" id="branch" name="branch" value="<?php echo $row['branch'];?>"required>
              </div>              


              <button type="submit" class="btn btn-primary" id="update_std" name="update_std">Update</button>
            </form> 


      </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
</div>
</div> 




  </body>
</html>
                      