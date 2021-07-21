<!DOCTYPE html>
<html>

<body>
<?php include "header1.php";

  $log=$_SESSION['log'];

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add opponent
        <small>Lawyer Panel Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add opponent</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="row">
	   <div class="box box-warning">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			
			<?php
				if(isset($_GET['flag'])){
				if($_GET['flag']==1)
					{
						echo "<center><font style='color:green; text-align:center'>User Added Successfully</font></center><br/>";
					
					}
				}

			?>	
			
              <form role="form" method="POST" action="insert_opponent.php" enctype="multipart/form-data" >
			  <?php 
          
           
          $q1=mysqli_query($con,"SELECT * FROM tbl_login WHERE email='$log'");
          $value = mysqli_fetch_array($q1);
          $xyz=$value['l_id'];
        
          $law_fetch=mysqli_query($con,"SELECT * FROM lawyer WHERE l_id='$xyz'");
          $law_fetch1 = mysqli_fetch_array($law_fetch);
          $law_fetch2=$law_fetch1['law_id'];
          

          $query="SELECT name FROM tbl_client WHERE law_id='$law_fetch2'";
          $result2 = mysqli_query($con,$query); ?>
                <div class="form-group">
                        <label>Select Client <span  style="color:red"> *</span></label>
                          <select name="client" id="SSS" class="form-control" required  >
              <option selected="selected" value="">Select Client</option>

                       <?php   
          while($value2 = mysqli_fetch_array($result2))
          {
        ?>
                 <option  value="<?php echo $value2['name']; ?>"><?php echo $value2['name']; ?></option>
          <?php }     
          ?>
          
          
            
            
                          </select>
                      </div>
            
                <!-- text input -->
                <div class="form-group">
                  <label>Opponent Name</label>
                  <input type="text" name="opp_name" class="form-control" placeholder="Enter name ..." required />
                </div>
				<div class="form-group">
                  <label>Opponent Email</label>
                  <input type="email" name="opp_email" class="form-control" placeholder="Enter Email ..." required />
                </div>
				<div class="form-group">
                  <label>Opponent Phone No</label>
                  <input type="text" name="opp_phone_no" class="form-control" placeholder="Enter Phone no ..." pattern="[6789][0-9]{9}" oninput="setCustomValidity('')" title='Enter 10 Digit mobile
number starting with 7 or 8 or 9' required />
                </div>

                <div class="form-group">
                  <label>Opponent Advocate Name</label>
                  <input type="text" name="oadv_name" class="form-control" placeholder="Enter name ..." required />
                </div>
        <div class="form-group">
                  <label>Opponent Advocate Email</label>
                  <input type="email" name="oadv_email" class="form-control" placeholder="Enter Email ..." required />
                </div>
        <div class="form-group">
                  <label>Opponent Advocate Phone No</label>
                  <input type="text" name="oadv_phone" class="form-control" placeholder="Enter Phone no ..." pattern="[6789][0-9]{9}" oninput="setCustomValidity('')" title='Enter 10 Digit mobile
number starting with 7 or 8 or 9' required />
                </div>

              <div class="box-footer" style="float:left;">
                <input type="submit" name="submit" value="ADD" class="btn btn-primary btn-lg">
              </div>
			  
              </form>
			  

			 
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row (main row) -->

    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
     
    </div>
    
  </footer>

  <!-- Control Sidebar -->
   <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
