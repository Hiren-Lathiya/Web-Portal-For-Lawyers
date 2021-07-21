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
$court=$_POST["court"];
$cnr=$_POST["cnr"];
$casetype=$_POST["casetype"];
$filldate=$_POST["filldate"];
$regno=$_POST["regno"];
$fillno=$_POST["fillno"];
$act=$_POST["act"]; 
$title=$_POST["title"];
$model=$_POST["model"];
$police=$_POST["police"];
$firno=$_POST["firno"];
$year=$_POST["year"];
$casedesc=$_POST["casedesc"];
$client=$_POST["client"];


$q1="SELECT l_id FROM tbl_login WHERE email='$log'";
		$e1=mysqli_query($con,$q1);
		$id1=mysqli_fetch_array($e1);
		$id=$id1['l_id'];
		
$qry1="SELECT * FROM tbl_client WHERE name='$client'";
					$res1=mysqli_query($con,$qry1);
					
					while($value2 = mysqli_fetch_array($res1))
					{
						$value=$value2['c_id'];
					}
					



$sql2="INSERT INTO tbl_case(ca_id,court,cnr,casetype,filldate,regno,fillno,act,title,model,police,firno,year,casedesc,l_id,c_id,status)VALUES('','$court','$cnr','$casetype','$filldate','$regno','$fillno','$act','$title','$model','$police','$firno','$year','$casedesc','$id','$value',1)";
$result2=mysqli_query($con,$sql2);
if($result2)
{
echo "<script>alert('Case Added Succesfully')</script>";
	header("Refresh:0; url=add_cases.php");
}
else{
	echo "<script>alert('Case Not Added')</script>";
	header("Refresh:0; url=add_cases.php");
}
	}


?>