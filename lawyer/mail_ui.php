<!doctype html>
<body>
<?php include "header1.php";?>
<?php 
if(isset($_POST['sendmail'])) {

$email=$_POST['email'];
$message=$_POST['message'];



require('PHPMailerAutoload.php'); 
$mail = new PHPMailer();
$mail->IsSMTP(true);
$mail->Host = 'smtp.gmail.com'; // not ssl://smtp.gmail.com
$mail->SMTPAuth= true;
$mail->Username='rockdock274@gmail.com';
$mail->Password='rockdock0101';
$mail->Port = 465; // not 587 for ssl 
$mail->SMTPDebug = 0; 
$mail->SMTPSecure = 'ssl';
$mail->SetFrom('rockdock274@gmail.com', 'Rock');
$mail->AddAddress($email);
$mail->Subject = 'your Password :';

$mail->Body    = "<b>haha!".$message."</b>";
$mail->AltBody = "<b>haha!".$message."</b>";
if(!$mail->Send()) {
echo 'Error : ' . $mail->ErrorInfo;
} else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Send');
    window.location='mail_ui.php';
    </script>");
} }

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Send Mail
        <small>Lawyer Panel Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Send Mail</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="row">
	   <div class="box box-warning">
            <div class="box-header with-border">
            
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST" action="">
			  <div class="col-xs-12">   
            <div class="col-xs-6">
                        <label>Select Client EmIL <span  style="color:red"> *</span></label>
                          <select name="email" id="SSS" class="form-control" required  >
              <option selected="selected" value="">Select Client</option>
                         <?php 
            $log=$_SESSION['log'];

          $q1=mysqli_query($con,"SELECT * FROM tbl_login WHERE email='$log'");
          $value = mysqli_fetch_array($q1);
          $xyz=$value['l_id'];

          $qry1=mysqli_query($con,"SELECT law_id FROM lawyer WHERE l_id='$xyz'");
          $value2 = mysqli_fetch_array($qry1);
          $abc=$value2['law_id'];


          $qry6=mysqli_query($con,"SELECT l_id FROM tbl_client  WHERE law_id='$abc'");
          $value6 = mysqli_fetch_array($qry6);
          $abc6=$value6['l_id'];
          

         /* $query="SELECT email FROM tbl_client WHERE l_id=(SELECT l_id FROM tbl_login WHERE l_id='$abc6') AND law_id='$abc'";*/
         $query="SELECT tbl_login.email FROM tbl_client,tbl_login WHERE tbl_client.l_id=tbl_login.l_id AND tbl_client.law_id=$abc";
          $result2 = mysqli_query($con,$query);
          while($value3 = mysqli_fetch_array($result2))
          {
        ?>
                 <option  value="<?php echo $value3['email']; ?>"><?php echo $value3['email']; ?></option>
          <?php }     
          ?>
          
            
            
                          </select>
                      </div>
               </div>

                <div class="col-xs-12">        
                    
                     <div class="col-xs-6">
                        <label>Description <span  style="color:red"> *</span></label>
                         <textarea class="form-control" rows="1" name="message" placeholder="Enter Description..." required></textarea>
                
                      </div>
                 </div>
                 <div class="col-xs-12">   
                     <div class="col-xs-6">
                        <div class="box-footer">
                            <input type="submit" name="sendmail" value="submit" class="btn btn-primary">
                
                           </div>
                      </div>
                    </div>
                  </form>
              </div>



	
	

 </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>               
           
  