<?php
	
	$con = mysqli_connect('localhost','root','','lawyer2');
	
	if(!$con)
	{
		echo "Server not found...";
	}else{mysqli_select_db($con,'lawyer2');}	
	/*
	if(!mysqli_select_db($con,'lawyer'))
	{
		echo "Database not found...";
	}*/

?>