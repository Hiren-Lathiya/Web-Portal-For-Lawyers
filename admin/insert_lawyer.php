<?php 

		include "connection.php";


		$name=$_POST["name"];
		$phone=$_POST["phone"];
		$email=$_POST["email"];
		$gender=$_POST["gender"];
		$add=$_POST["add"];
	
		$enr=$_POST["enrol"];
		$pwd1=$_POST["pass1"];
		$pwd2=$_POST["pass2"];
		
	
	
		$sql3="SELECT email FROM tbl_login WHERE email='$email';";
        $res=mysqli_query($con,$sql3);
		if (mysqli_num_rows($res) > 0) 
		{
			echo "<script>alert('Email Address already exists in Database')</script>";
			header("Refresh:0; url=add_lawyer.php");
		}
        
		else
		{				
	
		$sql1 = "INSERT INTO tbl_login (l_id,email,phone,pass,status,type,active)VALUES('','$email','$phone','$pwd1',1,2,1)";
		$result1=mysqli_query($con,$sql1);
		
		$rowsql = mysqli_query($con,"SELECT MAX(l_id) AS max FROM tbl_login");
		$row = mysqli_fetch_array($rowsql);
		$id = $row['max'];
		$sql2 = "INSERT INTO tbl_register (r_id,l_id,name,gender,address,enrol)VALUES('','$id','$name','$gender','$add','$enr')";
				
		 $result2=mysqli_query($con,$sql2);

		 $sql90 = "INSERT INTO lawyer(l_id) VALUES('$id')";
				
		 $sql80 = mysqli_query($con,$sql90);
			
		 header ("location:add_lawyer.php");
		}
	
	
?>