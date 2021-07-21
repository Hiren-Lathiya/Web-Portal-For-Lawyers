<?php
	include "connection.php";


	
	if(!isset($_SESSION['log']))
	{
		header("location:../registration/login.php");
	}
	else{

		$log = $_SESSION['log'];
		
		$sql = "SELECT l_id FROM tbl_login WHERE email='$log'";
		$result = mysqli_query($con,$sql);
		$value = mysqli_fetch_array($result);
		
		$id = $value['l_id'];

		$sql2 = "SELECT law_id FROM lawyer WHERE l_id='$id'";
		$result2 = mysqli_query($con,$sql2);
		$value2 = mysqli_fetch_array($result2);
		
		$id2 = $value2['law_id'];



	/*$lawyer_email = $_SESSION['log'];
						$s_current=mysqli_query($con,"SELECT law_id from lawyer WHERE user_email='$lawyer_email'");
						$s_current1=mysqli_fetch_array($s_current);
						$s_current2=$s_current1['user_id'];*/
						

	$user = "select * from tbl_client where law_id = '$id2'";
			
	$run_user = mysqli_query($con,$user);
			
	while ($row_user=mysqli_fetch_array($run_user)){
			
	$user_id = $row_user['c_id'];
	$user_name = $row_user['name'];
	$user_profile = $row_user['img'];
	$user_gender = $row_user['gender'];
	$login = $row_user['log_in'];



		echo"
		<li>
			<div class='chat-left-img'>
				<img src='$user_profile'>
			</div>
			<div class='chat-left-detail'>

				<p><a href='home1.php?user_name=$user_name'>$user_name</a></p>";
				if($login == 'Online'){
				echo "<span><i class='fa fa-circle' aria-hidden='true'></i> Online</span>";
				}else{
				echo "<span><i class='fa fa-circle-o' aria-hidden='true'></i> Offline</span>";
				}

				"
			</div>
		</li>

	";

	
	}
}
?>			