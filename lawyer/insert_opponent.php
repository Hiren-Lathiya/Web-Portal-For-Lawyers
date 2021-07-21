<?php
include "connection.php";
session_start();
	
	if(!isset($_SESSION['log']))
	{
		header("location:registration/login.php");
	}
	
	else
	{
	
	
	$opp_name = $_POST['opp_name'];
	$opp_email = $_POST['opp_email'];
	$opp_phone_no = $_POST['opp_phone_no'];
	$oadv_name = $_POST['oadv_name'];
	$oadv_email = $_POST['oadv_email'];
	$oadv_phone = $_POST['oadv_phone'];
	$client=$_POST["client"];

	$log=$_SESSION['log'];
	$q1="SELECT l_id FROM tbl_login WHERE email='$log'";
	$e1=mysqli_query($con,$q1);
	$id1=mysqli_fetch_array($e1);
	$id=$id1['l_id'];

	$qry1="SELECT * FROM tbl_client WHERE name='$client'";
					$res1=mysqli_query($con,$qry1);
					
					while($value2 = mysqli_fetch_array($res1))
					{
						$value=$value2['c_id'];
					}
					
					$query = "INSERT INTO tbl_opponent(opp_id,opp_name,opp_email,opp_phone_no,oadv_name,oadv_email,oadv_phone,c_id) VALUES('','$opp_name','$opp_email','$opp_phone_no','$oadv_name','$oadv_email','$oadv_phone','$value')";
	
					if(!mysqli_query($con,$query))
					{
						echo "<script>Not Inserted</script>";
					}
			
					else
					{
						header("refresh:0; url=add_opponent.php?flag=1");
					}
		
		
				
	
}
?>