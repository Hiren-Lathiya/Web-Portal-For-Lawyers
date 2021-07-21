<?php

	include "connection.php";
		
	session_start();
	
	if(!isset($_SESSION['log']))
	{
		header("location:../regstration/login.php");
	}
	
	else
	{
		
		$title = $_POST['title'];
		$desc=$_POST['desc'];
		$file = $_FILES['image']['tmp_name'];
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$location="photos/" . $_FILES["image"]["name"];
			
			if(!$_FILES['image']['name'])
			{
				$location="photos/Default.png";
				
			}
			
		$qry2="SELECT email_id from tbl_login WHERE email_id='$email'";
		
				$result2 = mysqli_query($con,$qry2);
				$c=mysqli_num_rows($result2);
				if($c>=1)
				{
				echo "<script>Same Email Address Exists in Database</script>";
				}
				else{
			
		$query = "INSERT INTO tbl_login(login_id,email_id,phone_no,password,status,type,active) VALUES('','$email','$phone','$pass1','0','$user_type','1')";
		
		$result = mysqli_query($con,$query);
		
		$rowsql = mysqli_query($con,"SELECT MAX(login_id) AS max FROM tbl_login");
			
		$row = mysqli_fetch_array($rowsql);
		$id = $row['max'];
		
		$sql = "INSERT INTO tbl_detail(detail_id,login_id,name,dob,gender,address,profile_pic) 
				VALUES('','$id','$name','$dob','$gender','$address','$location')";
				
			if(!mysqli_query($con,$sql))
			{
				echo "<script>Not Inserted</script>";
			}
			
			else
			{
				
				
				header("refresh:0; url=adduser.php?flag=1");
				
			}
	}
	
}
?>