<?php
	require_once('conn.php');



	extract($_POST);
	if(isset($_POST['update_std']))
	{

		echo $sname; echo "</br>";
		echo $htno; echo "</br>";
		echo $branch; echo "</br>";


		$s_key = $_GET['key'];
		echo $s_key;
		$gml = '@cvsr.ac.in';


$duplicate=mysqli_query($conn,"select ht_no from std_info where ht_no='$htno'");

if (mysqli_num_rows($duplicate)>0)
{
			  echo "<script>alert('htno Already Exists');</script>";
              echo("<script>window.location = 'Students.php';</script>");
}
else{



		$sql = "UPDATE std_info SET s_name = '$sname', ht_no = '$htno', branch = '$branch', email = '$htno$gml' WHERE s_id = $s_key";

        $qry = mysqli_query($conn, $sql);
        echo $sql; echo "</br>";

        if("$qry")
        {
        	echo "inserted";
              echo "<script>alert('Inserted successfully');</script>";
              echo("<script>window.location = 'Students.php';</script>");
                
            }
            else
            {
            	echo "failed";
             echo "<script>alert('failed');</script>";
             echo("<script>window.location = 'Students.php';</script>");
                
            }


            }


     }



?>