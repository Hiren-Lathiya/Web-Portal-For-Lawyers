 <?php
include "connection.php";
session_start();
	
	if(!isset($_SESSION['log']))
	{
		header("location:registration/login.php");
	}
	
	else
	{
	
	if(isset($_POST['submit']))
	{
		
		
				
		
		if($_FILES["image"]["name"] != "")
		{
	
	$name = $_POST['name'];
	$phone = $_POST['phone'];

	$email = $_POST['email'];
	$add = $_POST['add'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	$gender = $_POST['gender'];

	$log=$_SESSION['log']; 
	$q1="SELECT l_id FROM tbl_login WHERE email='$log'";
	$e1=mysqli_query($con,$q1);
	$id1=mysqli_fetch_array($e1);
	$id=$id1['l_id'];

	if($pass1!=$pass2)
	{
		echo "<script>alert('Both Passwords are different')</script>";
		header("Refresh:0; url=add_client.php");
	
	}
		
		$file = $_FILES['image']['tmp_name'];
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$location="photos/" . $_FILES["image"]["name"];
			
			/*if(!$_FILES['image']['name'])
			{
				$location="photos/Default.png";
				
			}*/
			
			$law =mysqli_query($con,"SELECT law_id from lawyer WHERE l_id='$id' ");
			$law1=mysqli_fetch_array($law);
			$law2=$law1['law_id']; 

				$qry2="SELECT email from tbl_login WHERE email='$email'";
		
				$result2 = mysqli_query($con,$qry2);
				$c=mysqli_num_rows($result2);
				if($c>=1)
				{
				echo "<script>alert('Same Email Address Exists in Database')</script>";
				header("Refresh:0; url=add_client.php");
				}
				else{

		
		$query = "INSERT INTO tbl_login(l_id,email,phone,pass,status,type,active) VALUES('','$email','$phone','$pass1',1,3,1)";
		
		$result = mysqli_query($con,$query);
		
		
		$rowsql = mysqli_query($con,"SELECT MAX(l_id) AS max FROM tbl_login WHERE email='$email'");
			
		$row = mysqli_fetch_array($rowsql);
		$id2 = $row['max'];
		
		
		
		$sql = "INSERT INTO tbl_client(c_id,name,address,gender,img,l_id,law_id) 
				VALUES('','$name','$add','$gender','$location','$id2','$law2')";
				
			if(!mysqli_query($con,$sql))
			{
				echo "<script>Not Inserted</script>";
			}
			
			else
			{
				
				
				header("refresh:0; url=add_client.php?flag=1");
				
			}
		}
	
}
else{

			$name = $_POST['name'];
	$phone = $_POST['phone'];

	$email = $_POST['email'];
	$add = $_POST['add'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	$gender = $_POST['gender'];

	$log=$_SESSION['log']; 
	$q1="SELECT l_id FROM tbl_login WHERE email='$log'";
	$e1=mysqli_query($con,$q1);
	$id1=mysqli_fetch_array($e1);
	$id=$id1['l_id'];

	if($pass1!=$pass2)
	{
		echo "<script>alert('Both Passwords are different')</script>";
		header("Refresh:0; url=add_client.php");
	
	}
		
		/*$file = $_FILES['image']['tmp_name'];
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$location="photos/" . $_FILES["image"]["name"];
			
			if(!$_FILES['image']['name'])
			{
				$location="photos/Default.png";
				
			}*/
			
			$law =mysqli_query($con,"SELECT law_id from lawyer WHERE l_id='$id' ");
			$law1=mysqli_fetch_array($law);
			$law2=$law1['law_id']; 

				$qry2="SELECT email from tbl_login WHERE email='$email'";
		
				$result2 = mysqli_query($con,$qry2);
				$c=mysqli_num_rows($result2);
				if($c>=1)
				{
				echo "<script>alert('Same Email Address Exists in Database')</script>";
				header("Refresh:0; url=add_client.php");
				}
				else{

		
		$query = "INSERT INTO tbl_login(l_id,email,phone,pass,status,type,active) VALUES('','$email','$phone','$pass1',1,3,1)";
		
		$result = mysqli_query($con,$query);
		
		
		$rowsql = mysqli_query($con,"SELECT MAX(l_id) AS max FROM tbl_login WHERE email='$email'");
			
		$row = mysqli_fetch_array($rowsql);
		$id2 = $row['max'];
		
		
		
		$sql = "INSERT INTO tbl_client(c_id,name,address,gender,img,log_in,l_id,law_id) 
				VALUES('','$name','$add','$gender','photos/Default.png','offline','$id2','$law2')";
				
			if(!mysqli_query($con,$sql))
			{
				echo "<script>Not Inserted</script>";
			}
			
			else
			{
				
				
				header("refresh:0; url=add_client.php?flag=1");
				
			}
		}

}
}
}
?>