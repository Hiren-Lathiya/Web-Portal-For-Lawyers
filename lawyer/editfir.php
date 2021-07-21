<?php
include "connection.php";
	


include "header1.php";
if(isset($_GET['id']))
       {
      $cid=$_GET['id']."";
      $qry1="SELECT * FROM tbl_case WHERE ca_id='$cid'";
	  $result1=mysqli_query($con,$qry1);
			$value1=mysqli_fetch_array($result1); 
			$police=$value1['police'];
			$firno=$value1['firno'];
			$year=$value1['year'];
		}
	?>
	 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Details
        <small>Lawyer panel</small>
      </h1>
	  
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Open Cases</li>
		<li class="active">Case Details</li>
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
<h3 class="box-title"><b>FIR Details</b></h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
			<form method="POST">
              <table class="table table-hover">
				<tr> 
					<th>Police Station </th>
					<td> <input type="text" name="police" value=<?php echo $police;?> required></td>	
				</tr>
				<tr> 
					<th>FIR No </th> 
					<td><input type="text" name="firno" value=<?php echo $firno;?> required>
							</td>	
				</tr>
				<tr> 
					<th>Year </th> 
					<td> <input type="text" name="year" value=<?php echo $year;?> required></td>	
				</tr>
			<tr> 
					<th> </th> 
					<td> <input type="submit" name="update" value="Update" class="btn btn-success btn-xs"></td>	
				</tr>
			</table>
			</form>
		</div>
	</div>
	
<?php
if(isset($_GET['id']))
		{
			$cid=$_GET['id'];
if (isset($_POST['update']))
		{
			//echo "<script>alert('hii')</script>";
			$police=$_POST['police'];
			$firno=$_POST['firno'];
			$year=$_POST['year'];
			
				$eqry="UPDATE tbl_case SET police='$police',firno='$firno',year='$year' WHERE ca_id='$cid'";
					
					$updated=mysqli_query($con,$eqry);
					if($updated)	
					{
						 echo "<script>window.location.href='case_details.php?id=$cid'</script>"; 
					}
					else
					{
						echo "error:something went wrong!";
					}
		}
		}
?>