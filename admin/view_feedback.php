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
        View Feedback	
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
      	<input id="myInput" type="text" placeholder="Search..">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">View Feedback</li>
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
              <h3 class="box-title">View Feedback</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Feedback Description</th>
				  
				  <th>Client Name</th>
				  <th>Client Email</th>
				 
                </tr>
				


				<?php
				
					$log=$_SESSION['log'];

					$q1=mysqli_query($con,"SELECT * FROM tbl_login WHERE email='$log'");
					$value = mysqli_fetch_array($q1);
					$xyz=$value['l_id'];
						

					$q4=mysqli_query($con,"SELECT * FROM admin WHERE l_id='$xyz'");
					$value4 = mysqli_fetch_array($q4);
					$xyz4=$value4['admin_id'];
									

					$query="SELECT feedback.f_description , feedback.c_id , tbl_client.name , tbl_login.email ,tbl_login.phone FROM feedback,tbl_client,tbl_login WHERE  feedback.c_id=tbl_client.c_id AND tbl_client.l_id=tbl_login.l_id";
					$result2 = mysqli_query($con,$query);
					
					$seq=1;
					while($value2 = mysqli_fetch_array($result2))
					{
				?>
                <tr>
                	<?php echo "<tbody id='myTable'>"; ?>
                  <td><?php echo $seq;?></td>
                  <td><?php echo $value2['f_description'];?></td>
                  <td><?php echo $value2['name'];?></td>
				  <td><?php echo $value2['email'];?></td>
				 
				<?php
					$seq++;
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
