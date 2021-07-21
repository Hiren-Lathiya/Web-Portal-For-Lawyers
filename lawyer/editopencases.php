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

<head>
<style>



#button {
width:60px;
height:35px;
border-radius:3px;
background-color:#4CAF50;
color:#fff;
font-family:'Raleway',sans-serif;
font-size:18px;
cursor:pointer
}
</style>
 
<body>


  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Open Cases
        <small>Lawyer panel</small>
      </h1>
	  
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Open Cases</li>
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
			
              <h3 class="box-title">Open Cases</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
			<form method="post">
              <table class="table table-hover">

                <tr>
                 
				  <th>Case Title</th>
				  <th>Case Description</th>
				  <th>Update</th>
				                 </tr>
                
		
		<tr>
<?php
		$log=$_SESSION['log'];

					$q1=mysqli_query($con,"SELECT * FROM tbl_login WHERE email='$log'");
					$value = mysqli_fetch_array($q1);
					$xyz=$value['l_id'];
					
			$qry1="SELECT 
    tbl_client.name,tbl_case.title,tbl_case.casedesc
FROM 
    tbl_client
INNER JOIN 
    tbl_case
ON
    tbl_client.c_id=tbl_case.c_id
WHERE 
    tbl_case.l_id='$xyz' && status='1' && ca_id='$cid'";
			$seq=1;
			$result2 = mysqli_query($con,$qry1);
					while($value2 = mysqli_fetch_array($result2))
					{
						//echo "<script>alert('$value2[title]')</script>";
						?>
						
						<td><input type="text" name="title" value="<?php echo $value2['title']?>"></td>
						<td><input type="text" name="desc" value="<?php echo $value2['casedesc']?>"></td>
						<?php
						$seq++;
						 
					
		?>
		<?php }?>
		
					 
				
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
			
			
			$title=$_POST['title'];
			$desc=$_POST['desc'];
			
			$eqry="UPDATE tbl_case SET title='$title',casedesc='$desc' WHERE ca_id='$cid'";	
					$updated=mysqli_query($con,$eqry);
					if($updated)	
					{
						echo "<script>window.location.href='open_cases.php?id=$cid'</script>";  
					}
					else
					{
						echo "error:something went wrong!";
					}
		}
		}
?>
