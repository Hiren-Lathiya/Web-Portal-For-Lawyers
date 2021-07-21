<!DOCTYPE html>
<body>
<?php
include "connection.php";

include "header.php"; 
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


<?php
// connect to the database

// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM document WHERE document_id='$id'";
    $result = mysqli_query($con, $sql);

    $file = mysqli_fetch_array($result);
    $filepath = 'uploads/' . $file['doc'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['doc']));
        
        //This part of code prevents files from being corrupted after download
        ob_clean();
        flush();
        
        readfile('uploads/' . $file['doc']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}?>
 <tr>
      <td><?php echo $file['document_id']; ?></td>
      <td><?php echo $file['doc']; ?></td>
     
     
      <td><a href="download.php?file_id=<?php echo $file['document_id'] ?>">Download</a></td>
    </tr>

</div>
</body>
