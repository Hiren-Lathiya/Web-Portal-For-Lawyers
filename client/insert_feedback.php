 <?php
// connect to the database
include "connection.php";
     
    session_start();
   
    if(!isset($_SESSION['log']))
    {
        header("location:registration/login.php");
    }

    else{


    		$log=$_SESSION['log'];
        $idx="SELECT * FROM tbl_login where email ='$log'";
        $ffetch=mysqli_query($con,$idx);
        $data=mysqli_fetch_array($ffetch);
        $idnew=$data['l_id'];

        $client="SELECT * FROM tbl_client where l_id ='$idnew'";
        $client1=mysqli_query($con,$client);
        $client2=mysqli_fetch_array($client1);
        $client3=$client2['c_id'];
        
         $description = $_POST['description'];

      
    	if (isset($_POST['submit'])) 
    	{

    		
    		
    		  $sql = "INSERT INTO feedback(f_id,f_description,c_id) VALUES('','$description','$client3')";
          
            if (mysqli_query($con, $sql)) 
            {
                
                  header("Refresh:0; url=dashboard.php?scuccessfully_upload");
            }
        }
        else {
           	echo "<script>alert('Not Added')</script>";
        	header("Refresh:0; url=feedback.php");
        }
    }