<?php

include "connection.php";
include "header1.php";
$cid='';
/*$log=$_SESSION['log'];

					$q1=mysqli_query($con,"SELECT * FROM tbl_login WHERE email='$log'");
					$value = mysqli_fetch_array($q1);
					$xyz=$value['l_id'];*/
					
		if(isset($_GET['id']))
		   {
			$cid=$_GET['id']."";
			$q2=mysqli_query($con,"SELECT law_id FROM lawyer WHERE l_id='$cid'");
			$run=mysqli_fetch_array($q2);
			$exe=$run['law_id'];
			//echo "<script>alert($exe)</script>";
		
		   }
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Clients
        <small>Admin panel</small>
      </h1>
	  
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage Lawyers</li>
        <li class="active">Client</li>
      </ol>
	  
    </section>
	

    <!-- Main content -->
    <section class="content">
	
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
	    <div class="col-xs-12">
		
         
          
 

 


</div>
</div>


	
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
	    <div class="col-xs-12">
		
          <div class="box">
		  
            <div class="box-header">
			
              <h3 class="box-title">Client Details</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
			
              <table class="table table-hover">
			  <tr>
                  <th>Sr No</th>
                  <th>Name</th>
				  <th>Phone</th>
				  <th>Email</th>
				  <th>Address</th>
                  <th>Gender</th> 
                                
				  </tr>
                
<tr>
<?php

$qry1="SELECT tbl_client.c_id,tbl_client.l_id,tbl_client.name,tbl_login.phone,tbl_login.email,tbl_client.address,tbl_client.gender FROM tbl_client,tbl_login WHERE  tbl_login.l_id=tbl_client.l_id AND law_id='$exe'";

			$seq=1;
			$result2 = mysqli_query($con,$qry1);
					while($value2 = mysqli_fetch_array($result2))
					{
						echo "<td>".$seq."</td>";
						echo "<td>".$value2['name']."</td>";
						echo "<td>".$value2['phone']."</td>";
						echo "<td>".$value2['email']."</td>";
						echo "<td>".$value2['address']."</td>";
						echo "<td>".$value2['gender']."</td>";
						
						echo "</tr>";
						$seq++;
					}
						
					
		?>
				  
</table>
</div>
</div>
<html>

