<?php

		include "connection.php";
		
		if(isset($_POST['submit']))
		{
			
		session_start();
	
		$log=$_POST['email'];
		
		$pass = $_POST['pass'];
		
		
		$qry = "SELECT * FROM tbl_login WHERE (email='$log' AND pass='$pass')";

		$result = mysqli_query($con,$qry);
		
		$value = mysqli_fetch_array($result);
	
		$count = mysqli_num_rows($result);
		
		if($count==1 && $value['pass']==$pass)
		{
			if($value['active']==1 && $value['type']==1)
			{
					$_SESSION['log'] = $value['email'];
					
					$status = $value['status'];
				
					if($status==0)
					{
						$id = $value['l_id'];
							
						$otp = rand(100000,999999);
							
						$sql = "INSERT INTO otp_tbl(otp_id,login_id,otp) VALUES('','$id','$otp')";
							
						$result1 = mysqli_query($con,$sql);
							
							if($result1)
							{
								header("location:verification.php");
							}
							
					}
						
					else
					{
						header("location:../admin/dashboard.php");
					}
			}
			else if($value['active']==1 && $value['type']==2 )
			{
					$_SESSION['log'] = $value['email'];
					
					$status = $value['status'];
				
					if($status==0)
					{
						$id = $value['l_id'];
							
						$otp = rand(100000,999999);
							
						$sql = "INSERT INTO otp_tbl(otp_id,login_id,otp) VALUES('','$id','$otp')";
							
						$result1 = mysqli_query($con,$sql);
							
							if($result1)
							{
								header("location:verification.php");
							}
							
					}
						
					else
					{
						header("location:../lawyer/dashboard.php");
					}
			}
			else if($value['active']==1 && $value['type']==3)
			{
					$_SESSION['log'] = $value['email'];
					
					$status = $value['status'];
				
					if($status==0)
					{
						$id = $value['l_id'];
							
						$otp = rand(100000,999999);
							
						$sql = "INSERT INTO otp_tbl(otp_id,login_id,otp) VALUES('','$id','$otp')";
							
						$result1 = mysqli_query($con,$sql);
							
							if($result1)
							{
								header("location:verification.php");
							}
							
					}
						
					else
					{
						header("location:../client/dashboard.php");
					}
			}
			else
						{
							echo "<script>  alert('Incorrect Details'); </script>";
						header("Refresh: 0; url=signin.php");
						}
	
		}
		}
?>