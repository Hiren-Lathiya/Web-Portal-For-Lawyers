<?php
include "connection.php";
	


include "header1.php";
if(isset($_GET['id']))
       {
      $cid=$_GET['id']."";
      $qry1="SELECT * FROM tbl_case WHERE ca_id='$cid'";
	  $result1=mysqli_query($con,$qry1);
			$value1=mysqli_fetch_array($result1); //divide output row in array
			
		
			$casetype=$value1['casetype'];
			$fillno=$value1['fillno'];
			$filldate=$value1['filldate'];
			$regno=$value1['regno'];
			$cnr=$value1['cnr'];
			$court=$value1['court'];
			$model=$value1['model'];
			//echo "<script>alert('$model')</script>";
    
       }
	   ?>
	 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Case Details
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
 <h3 class="box-title"><b>Case Details</b></h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
			<form method="POST">
              <table class="table table-hover">

                <tr> 
					<th>Case Type </th>
					<td> <input type="text" name="casetype" value=<?php echo $casetype;?> required></td>	
				</tr>
				<tr> 
					<th>Filling Number </th> 
					<td><input type="text" name="fillno" value=<?php echo $fillno;?> required>
							</td>	
				</tr>
				<tr> 
					<th>Filling Date </th> 
					<td> <input type="text" name="filldate" value=<?php echo $filldate;?> required></td>	
				</tr>
				<tr> 
					<th>Registration Number </th> 
					<td><input type="text" name="regno" value=<?php echo $regno;?> required>
								</td>	
				</tr>
				<tr> 
					<th>CNR </th> 
					<td><input type="text" name="cnr" value=<?php echo $cnr;?> required></td>	
				</tr>
				<tr> 
					<th>Court </th> 
					<td><input type="text" name="court" value=<?php echo $court;?> required></td>	
				</tr>
				<tr> 
					<th>Appering Model </th> 
					<td><input type="text" name="model" value=<?php echo $model;?> required></td>	
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
			$casetype=$_POST['casetype'];
			$fillno=$_POST['fillno'];
			$filldate=$_POST['filldate'];
			$regno=$_POST['regno'];
			$cnr=$_POST['cnr'];
			$court=$_POST['court'];
			$model=$_POST['model'];
				$eqry="UPDATE tbl_case SET casetype='$casetype',fillno='$fillno',filldate='$filldate',
				regno='$regno',cnr='$cnr',court='$court',model='$model' WHERE ca_id='$cid'";
					
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