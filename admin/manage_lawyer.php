<!doctype html>

<body>
<?php
include "connection.php";

include "header1.php";

 
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Lawyer	
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
      	<input id="myInput" type="text" placeholder="Search..">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage Lawyer</li>
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
              <h3 class="box-title">Manage Lawyer</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Lawyer Name</th>
				  <th>Phone</th>
				  <th>Email</th>
				  <th>Address</th>
				  <th>Gender</th>
				  <th>Clients Added</th>
                  <th>Action</th>
                </tr>
				


				<?php
				
					$log=$_SESSION['log'];

					$q1=mysqli_query($con,"SELECT * FROM tbl_login WHERE email='$log'");
					$value = mysqli_fetch_array($q1);
					$xyz=$value['l_id'];

					$q4=mysqli_query($con,"SELECT * FROM admin WHERE l_id='$xyz'");
					$value4 = mysqli_fetch_array($q4);
					$xyz4=$value4['admin_id'];
					

					$query="SELECT tbl_register.l_id,tbl_register.name,tbl_register.address,tbl_register.gender,tbl_login.phone,tbl_login.email FROM tbl_register,tbl_login WHERE  tbl_login.l_id=tbl_register.l_id";
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
				  <td><?php echo $value2['address'];?></td>
				  <td><?php echo $value2['gender'];?></td>
				  <?php $val=$value2['l_id'];?>
                 <td>  <a href="view_client.php?id=<?php echo $val; ?>" class="btn btn-success btn-xs">View</a> </td>
					
				  <td> 
				  <a class="btn btn-success btn-xs" href="editprofile.php?id=<?php echo $value2['c_id'];?> " 
					onclick="return confirm('sure to edit?');">EDIT</a> &nbsp;&nbsp;
				  <a class="btn btn-danger btn-xs" href="?del=<?php echo $value2['c_id'];?>" 
					onclick="return confirm('sure to delete?');">DELETE</a>
					</td>
				</tr>
				
				<?php
					$seq++;
					}
			if(isset($_GET['del']))
		   {
			$sql="DELETE FROM tbl_admin WHERE id=".$_GET['del']."";
			$resultt=mysqli_query($con,$sql);
			echo ("<script>location.href='manage_admin.php'</script>");
		
		   }
				
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
