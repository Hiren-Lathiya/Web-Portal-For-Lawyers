<?php
	include "connection.php";
	
	
					
		if(isset($_GET['id']))
		   {
			$cid=$_GET['id']."";
			
		
		   }
	$qry1="UPDATE tbl_case SET status='0' WHERE ca_id='$cid'";
	$res1=mysqli_query($con,$qry1);
	echo $res1;
	header("Refresh:0; url=open_cases.php");
?>