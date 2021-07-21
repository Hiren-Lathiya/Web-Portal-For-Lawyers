<?php

include "connection.php";
include "header1.php";
$cid='';
$log=$_SESSION['log'];

					$q1=mysqli_query($con,"SELECT * FROM tbl_login WHERE email='$log'");
					$value = mysqli_fetch_array($q1);
					$xyz=$value['l_id'];
					
		if(isset($_GET['id']))
		   {
			$cid=$_GET['id']."";
			
		
		   }
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hearing
        <small>Lawyer panel</small>
      </h1>
	  
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Hearing</li>
      </ol>
	  
    </section>
	

    <!-- Main content -->
    <section class="content">
	
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
	    <div class="col-xs-12">
		
          <div class="box">
		  
            <div class="box-header">
			
              <h3 class="box-title">Add Hearing</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
 <form method="POST">			
              <table class="table table-hover">

<tr>
                  <th>Sr No</th>
                  <th>Court No and Judge</th>
				  <th>Business on Date</th>
				  <th>Hearing Date</th>
				  <th>Purpose</th>
                  <th>Action</th>              
 </tr>
 

 
<tr>
 <td>1 </td>
 <td><input type="text" name="courtno" required/></td>
 <td><input type="date" name="bdate" required/></td>
 <td><input type="date" name="hdate" required/></td>
 <td><textarea rows="1" cols="19" name="purpose" required/></textarea>
<td><input type="submit" class="btn btn-success btn-xs" name="add" value="Add"></td>




</tr>				  
</table>
</form>
<?php
	if(isset($_POST["add"]))
	{
		$courtno=$_POST['courtno'];
		$bdate=$_POST['bdate'];
		$hdate=$_POST['hdate'];
		$purpose=$_POST['purpose'];
		$qry="INSERT INTO hearing(h_id,courtno,bdate,hdate,purpose,ca_id)VALUES('','$courtno','$bdate','$hdate','$purpose','$cid')";
		$run=mysqli_query($con,$qry);
		if($run)
		{
			echo "<script>alert('Added Succesfully')</script>";
			echo "<script> location.href('hearing_details.php'); </script>";
			/*header("Refresh:0; url=hearing_details.php");
*/		}
		else
		{
			echo "<script>alert('Not Added')</script>";
			echo "<script> location.href('hearing_details.php'); </script>";
		}
	}
?>
</div>
</div>


	
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
	    <div class="col-xs-12">
		
          <div class="box">
		  
            <div class="box-header">
			
              <h3 class="box-title">Hearing Details</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
			
              <table class="table table-hover">
			  <tr>
                  <th>Sr No</th>
                  <th>Court No and Judge</th>
				  <th>Business on Date</th>
				  <th>Hearing Date</th>
				  <th>Purpose</th>
				  
                  <th>Action</th>              
				  </tr>
                
<tr>
<?php

$qry1="SELECT * FROM hearing WHERE ca_id='$cid'";

			$seq=1;
			$result2 = mysqli_query($con,$qry1);
					while($value2 = mysqli_fetch_array($result2))
					{
						echo "<td>".$seq."</td>";
						echo "<td>".$value2['courtno']."</td>";
						echo "<td>".$value2['bdate']."</td>";
						echo "<td>".$value2['hdate']."</td>";
						echo "<td>".$value2['purpose']."</td>";
						$val=$value2['h_id'];
						echo "<td><a href='edit_hearing_details.php?id=".$val."'class='btn btn-success btn-xs'>Edit</a></td>";
						$val=$value2['ca_id'];
						echo "</tr>";
						$seq++;
					}
						
					
		?>
				  
</table>
</div>
</div>
<html>

