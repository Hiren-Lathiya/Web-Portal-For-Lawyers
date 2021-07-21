<?php
include "connection.php";
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$enrol=$_POST['enrol'];
$message=$_POST['message'];

$sql=mysqli_query($con,"INSERT INTO contact(contact_id,name,email,phone,enrol,msg)VALUES('','$name','$email','$phone','$enrol','$message')");
if($sql)
{
	echo "<script>alert('Message Send')</script>";
	header("Refresh:0; url=contactus.php");
}

?>