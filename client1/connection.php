<?php
	
	$con = mysqli_connect('localhost','root','','lawyer1');
	
	if(!$con)
	{
		echo "Server not found...";
	}else{mysqli_select_db($con,'lawyer1');}	
	/*
	if(!mysqli_select_db($con,'lawyer'))
	{
		echo "Database not found...";
	}*/

?>