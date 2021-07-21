<?php
$con = mysqli_connect("localhost","root","","mychat");
	
	$user = $_SESSION['user_email'];
						$s_current=mysqli_query($con,"SELECT user_id from users WHERE user_email='$user'");
						$s_current1=mysqli_fetch_array($s_current);
						$s_current2=$s_current1['user_id'];
						

	$user = "select * from users where user_id != '$s_current2'";
			
	$run_user = mysqli_query($con,$user);
			
	while ($row_user=mysqli_fetch_array($run_user)){
			
	$user_id = $row_user['user_id'];
	$user_name = $row_user['user_name'];
	$user_profile = $row_user['user_profile'];
	$login = $row_user['log_in'];



		echo"
		<li>
			<div class='chat-left-img'>
				<img src='$user_profile'>
			</div>
			<div class='chat-left-detail'>

				<p><a href='home.php?user_name=$user_name'>$user_name</a></p>";
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
?>			