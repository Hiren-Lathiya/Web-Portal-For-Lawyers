<!doctype html>
<body>
<form method="POST">
<label>Court No and Judge :</label>
<input type="text" name="courtno" placeholder="Enter Court No and Judge"><br/>
<label>Business on Date :</label>
<input type="date" name="bdate" placeholder="Enter Business on Date"><br/>
<label>Hearing Date :</label>
<input type="date" name="hdate" placeholder="Enter Hearing Date"><br/>
<label>Purpose of Hearing :</label>
<textarea rows="7" cols="15" name="purpose" placeholder="Enter Purpose"></textarea><br/>
<input type="submit" value="Add" name="add">
</form>
</body>
</html>

<?php
include "connection.php";
if(isset($_POST['add']))
{
$courtno=$_POST['courtno'];
$bdate=$_POST['bdate'];
$hdate=$_POST['hdate'];
$purpose=$_POST['purpose'];
$sql="INSERT INTO hearing(id,courtno,bdate,hdate,purpose)VALUES('','$courtno','$bdate','$hdate','$purpose')";
$result=mysqli_query($con,$sql);
if(!$result)
{
	echo "<script>alert('Date not Added')</script>";
	header("Refresh:0; url=addhearing.php");
}
else
{
	echo "<script>alert('Data Added Succesfully')</script>";
	header("Refresh:0; url=addhearing.php");
}
}

?>