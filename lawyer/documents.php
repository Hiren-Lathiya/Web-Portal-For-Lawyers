<!DOCTYPE html>
<body>
<?php
include "connection.php";
$cid="";
include "header1.php";
if(isset($_GET['id']))
		   {
			$cid=$_GET['id']."";
			
		
		   }
 
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Case Document
        <small>Lawyer panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Case Document</li>
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
              <h3 class="box-title">Manage Document</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Document Title</th>
				  <th>Description</th>
				  <th>Date</th>
				  <th>Doc</th>
				  <th>Size</th>
			      <th>Download</th>
				  <th></th>
				 
				  <th>Delete</th>
                </tr>
				


				<?php
				
				
					$log=$_SESSION['log'];
		$idx="SELECT * FROM tbl_login where email ='$log'";
		$ffetch=mysqli_query($con,$idx);
		$data=mysqli_fetch_array($ffetch);
		$idnew=$data['l_id'];
		

					$case="SELECT * FROM tbl_case where ca_id ='$cid'";
		$case1=mysqli_query($con,$case);
		$case2=mysqli_fetch_array($case1);
		$case3=$case2['c_id'];
						

					$query="SELECT * FROM document WHERE c_id='$case3'";
					$result2 = mysqli_query($con,$query);
					
					$seq=1;
					while($value2 = mysqli_fetch_array($result2))
					{
				?>
                <tr>
                  <td><?php echo $seq;?></td>
                  <td><?php echo $value2['title'];?></td>
                  <td><?php echo $value2['description'];?></td>
				 
				  <td><?php echo $value2['upload_date'];?></td>
				   <td><?php echo $value2['doc'];?></td>
				   <td><?php echo $value2['size']; ?></td>
				   <td><?php echo $value2['download']; ?></td>
				  <?php $val=$value2['document_id'];?>	
				   <td> 
				  <a href="insert_document.php?file_id=<?php echo $value2['document_id'] ?>">Download</a></td>
				  <td><a class="btn btn-danger btn-xs" href="?del=<?php echo $value2['document_id'];?>" 
					onclick="return confirm('sure to delete?');">DELETE</a>
					</td>
				</tr>
				
				<?php
					$seq++;
					}
			if(isset($_GET['del']))
		   {
			$sql="DELETE FROM document WHERE document_id=".$_GET['del']."";
			$resultt=mysqli_query($con,$sql);
			echo ("<script>location.href='open_cases.php'</script>");
		
		   }
				
				?>

              </table>
            </div>
</body>
</html>