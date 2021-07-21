<?php
include "connection.php";
	$section_no=$_POST['no'];
	$section_title=$_POST['title'];
	$section_desc=$_POST['desc'];
	$sql="INSERT INTO tbl_rule(id,s_no,title,s_desc)VALUES('','$section_no','$section_title','$section_desc')";
	$result=mysqli_query($con,$sql);
	if(!$result)
	{
		echo "<script>alert('Not Added')</script>";
		header("Refresh:0; url=addsection.php");
	}
	else
	{
		echo "<script>alert('Added Succesfully')</script>";
	header("Refresh:0; url=addsection.php");	
	}


?>