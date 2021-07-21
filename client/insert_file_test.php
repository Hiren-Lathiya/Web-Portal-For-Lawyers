<?php
// connect to the database
include "connection.php";
     
    session_start();
   
    if(!isset($_SESSION['log']))
    {
        header("location:registration/login.php");
    }

    else{




$sql = "SELECT * FROM document";
$result = mysqli_query($con, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'photos/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx','jpg','jpeg','png'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {

$log=$_SESSION['log'];
        $idx="SELECT * FROM tbl_login where email ='$log'";
        $ffetch=mysqli_query($con,$idx);
        $data=mysqli_fetch_array($ffetch);
        $idnew=$data['l_id'];


        $client="SELECT * FROM tbl_client where l_id ='$idnew'";
        $client1=mysqli_query($con,$client);
        $client2=mysqli_fetch_array($client1);
        $client3=$client2['c_id'];
        $client4=$client2['law_id'];

        $lawyer1="SELECT * FROM lawyer where law_id ='$client4'";
        $lawyer2=mysqli_query($con,$lawyer1);
        $lawyer3=mysqli_fetch_array($lawyer2);
        $lawyer=$lawyer3['law_id'];



        $title = $_POST['title'];
        
        $description = $_POST['description'];
        $upload_date=$_POST['upload_date'];
            $sql = "INSERT INTO document(document_id,title,description,doc,size,download,upload_date,c_id,law_id) VALUES('','$title','$description','$filename','$size',0,'$upload_date','$client3','$lawyer')";
          
            if (mysqli_query($con, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

// Downloads files
if (isset($_GET['file_id'])) { 
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM document WHERE document_id=$id";
    $result = mysqli_query($con, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'photos/' . $file['doc'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('photos/' . $file['doc']));
        
        //This part of code prevents files from being corrupted after download
        ob_clean();
        flush();
        
        readfile('photos/' . $file['doc']);

        // Now update downloads count
        $newCount = $file['download'] + 1;
        $updateQuery = "UPDATE document SET download=$newCount WHERE document_id='$id'";
        mysqli_query($con, $updateQuery);
        exit;
    }

}
}
?>