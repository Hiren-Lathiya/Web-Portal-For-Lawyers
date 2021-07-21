

<?php
				include "connection.php";
				
				session_start();
	
	if(!isset($_SESSION['log']))
	{
		header("location:registration/login.php");
	}
	
	else
	{
$log=$_SESSION['log'];

$q1=mysqli_query($con,"SELECT * FROM tbl_login WHERE email='$log'");
$value = mysqli_fetch_array($q1);
$xyz=$value['l_id'];


				$query="SELECT * FROM tbl_client WHERE l_id='$xyz'";
					
					$result2 = mysqli_query($con,$query);
					
					while($value2 = mysqli_fetch_array($result2))
					{
						
						echo $value2['c_name'];
						echo $value2['c_phone'];
						echo $value2['c_email'];
					}
	}
						
				?>
               