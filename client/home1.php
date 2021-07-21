 <?php

include "connection.php";

session_start();
	
	if(!isset($_SESSION['log']))
	{
		header("location:../registration/login.php");
	}
	
	else
	{
		$log = $_SESSION['log'];
		
		$sql = "SELECT l_id FROM tbl_login WHERE email='$log'";
		$result = mysqli_query($con,$sql);
		$value = mysqli_fetch_array($result);
		
		$id = $value['l_id'];

		$sql2 = "SELECT c_id FROM tbl_client WHERE l_id='$id'";
		$result2 = mysqli_query($con,$sql2);
		$value2 = mysqli_fetch_array($result2);
		
		$id2 = $value2['c_id'];
		
	}
	?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lawyer| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
	#myDiv {
	border: 2px solid lightgray;
	height:210px;
	width:210px;
	float: left;
	}
	</style>
</head>

<body>
	<div class="container main-section">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12 left-sidebar">
				<div class="input-group searchbox">
					<div class="input-group-btn">
						<form method="POST">
						<center><button class="btn btn-default search-icon" name="back" type="submit">Back To Dashboard</button></center>
						<?php

								if(isset($_POST['back'])){
									$update_msg = mysqli_query($con, "UPDATE tbl_client SET log_in='Offline' WHERE c_id='$id2'");
									echo("<script>location.href = 'dashboard.php';</script>");
									
									exit();

								}
							?>
							</form>
					</div>
					
				</div>
				<div class="left-chat">
					<ul>
						<?php include("get_users_data.php"); ?>
					</ul>
				</div>
			</div>
			<div class="col-md-9 col-sm-9 col-xs-12 right-sidebar">
				<div class="row">
					<!-- getting the user information who is logged in -->
					<?php 
					$update_seen = mysqli_query($con, "UPDATE tbl_client SET log_in='Online' WHERE c_id='$id2'");
						$log = $_SESSION['log'];
		
		$sql = "SELECT l_id FROM tbl_login WHERE email='$log'";
		$result = mysqli_query($con,$sql);
		$value = mysqli_fetch_array($result);
		
		$id = $value['l_id'];

		$sql2 = "SELECT c_id,law_id FROM tbl_client WHERE l_id='$id'";
		$result2 = mysqli_query($con,$sql2);
		$value2 = mysqli_fetch_array($result2);
		
		$id2 = $value2['c_id'];
		$id3 = $value2['law_id'];

		$sql3 = "SELECT l_id FROM lawyer WHERE law_id='$id3'";
		$result3 = mysqli_query($con,$sql3);
		$value3 = mysqli_fetch_array($result3);
		$id3 = $value3['l_id'];


						$get_user = "select * from tbl_client where c_id ='$id2'"; 

						$run_user = mysqli_query($con,$get_user);
						$row=mysqli_fetch_array($run_user);
									
						$user_id = $row['l_id']; 
						$user_name = $row['name'];
					?>

					<!-- getting the user data on which user click -->
					<?php
					$get_username="";
					$get_user="";
					$run_user="";
					$row_user="";
					$username="";
					$user_profile_image="";
						if(isset($_GET['user_name'])){

						global $con; 
								
						$get_username = $_GET['user_name'];
									
						$get_user = "select * from tbl_register where name='$get_username'";
								
						$run_user = mysqli_query($con,$get_user);
						
						$row_user=mysqli_fetch_array($run_user);
						
						$username = $row_user['name'];
						$user_profile_image = $row_user['img'];
						}

						$total_messages = "select * from users_chat where (sender_username='$user_name' AND receiver_username='$username') OR (receiver_username='$user_name' AND sender_username='$username')"; 
						$run_messages = mysqli_query($con,$total_messages); 
						$total = mysqli_num_rows($run_messages);
					

					?>
					<div class="col-md-12 right-header">
						<div class="right-header-img">
							<img src="<?php echo '$user_profile_image' ;?>">
						</div>
						
						
						<div class="right-header-detail">
							<form method="post">
								<p><?php echo"$username";?></p>
								<span><?php echo $total; ?> messages</span>&nbsp &nbsp
								<button name="logout" class="btn btn-danger">Logout</button>
							</form>
							<?php

								if(isset($_POST['logout'])){
									$update_msg = mysqli_query($con, "UPDATE tbl_client SET log_in='Offline' WHERE c_id='$id2'");
									echo("<script>location.href = 'logout.php';</script>");
									
									exit();

								}
							?>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="scrolling_to_bottom" class="col-md-12 right-header-contentChat">
						<?php

						$update_msg = mysqli_query($con, "UPDATE users_chat SET msg_status='read' WHERE sender_username='$username' AND receiver_username='$user_name'");

						$sel_msg = "select * from users_chat where (sender_username='$user_name' AND receiver_username='$username') OR (receiver_username='$user_name' AND sender_username='$username') ORDER by 1 ASC"; 
						$run_msg = mysqli_query($con,$sel_msg);		

						
						while($row=mysqli_fetch_array($run_msg)){
			
						$sender_username = $row['sender_username'];
						$receiver_username = $row['receiver_username'];
						$msg_content = $row['msg_content'];
						$msg_status = $row['msg_status'];
						$msg_date = $row['msg_date'];

						?>
						<ul>
						<?php

						if($user_name == $sender_username AND $username == $receiver_username){

							echo"
								<li>
									<div class='rightside-right-chat'>
										<span> $user_name <small>$msg_date</small> </span><br><br>
										<p>$msg_content</p>
									</div>
								</li>
							";
						}

						else if($user_name == $receiver_username AND $username == $sender_username){
							echo"
								<li>
									<div class='rightside-left-chat'>
										<span> $username <small>$msg_date</small> </span><br><br>
										<p>$msg_content</p>
									</div>
								</li>

							";
						}


						?>
						</ul>
						<?php

						}

						?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 right-chat-textbox">
						<form method="post">
						<input autocomplete="off" type="text" name="msg_content" placeholder="Write your message...">
						<button class="btn" name="submit"><i class="fa fa-telegram" aria-hidden="true"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		if(isset($_POST['submit'])){
			$msg = htmlentities($_POST['msg_content']);
				
			if($msg == ""){
				echo"

				<div class='alert alert-danger'>
				  <strong><center>Message was unable to send!</center></strong>
				</div>

				";
			}else if(strlen($msg) > 100){
				echo"

				<div class='alert alert-danger'>
				  <strong><center>Message is Too long! Use only 100 characters</center></strong>
				</div>

				";
			}
			else
			{
			$insert = "insert into users_chat(sender_username,receiver_username,msg_content,msg_status,msg_date) values ('$user_name','$username','$msg','unread',NOW())";
			
			
			if(!mysqli_query($con,$insert))
			{
				echo "<script> alert('not inserted')</script>";
				
			}
			else{
				
				 echo "<script>window.open('home1.php?user_name='$get_username' ','_self')</script>";
			}
			

			}
			echo("<script>location.href = 'home1.php?user_name=$get_username';</script>");
		
		}

	?>

	<script>
		$('#scrolling_to_bottom').animate({
		scrollTop: $('#scrolling_to_bottom').get(0).scrollHeight}, 1000);
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
	    	var height = $(window).height();
	    	$('.left-chat').css('height', (height - 92) + 'px');
	    	$('.right-header-contentChat').css('height', (height - 163) + 'px');
	    });
	</script>
</body>
</html>
