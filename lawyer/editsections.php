<?php
include "connection.php";
include "header1.php";
if(isset($_GET['id']))
       {
      $cid=$_GET['id']."";
      $qry1="SELECT act FROM tbl_case WHERE ca_id='$cid'";
	  $result1=mysqli_query($con,$qry1);
			$value1=mysqli_fetch_array($result1); 
			$act=$value1['act'];
			
		}
	?>
	 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Acts
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
<h3 class="box-title"><b>Acts</b></h3>

              
            
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
			<form method="POST">
              <table class="table table-hover">
			   <tr> 
					<th>Under Sections </th>
					<td> <input type="text" name="act" value=<?php echo $act;?> required></td>	
				</tr>
				<tr> 
					<th> </th> 
					<td> <input type="submit" name="update" value="Update" class="btn btn-success btn-xs"></td>	
				</tr>
			</table>
			</form>
		</div>

	
<?php
if(isset($_GET['id']))
		{
			$cid=$_GET['id'];
if (isset($_POST['update']))
		{
			//echo "<script>alert('hii')</script>";
			$act=$_POST['act'];
			
				$eqry="UPDATE tbl_case SET act='$act' WHERE ca_id='$cid'";
					
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