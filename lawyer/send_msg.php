<?php
if(isset($_POST['submit']))
{
require('./textlocal.class.php');

$no=$_POST["no"];
$msg=$_POST["msg"];

$textlocal = new Textlocal("hirenroyal123@gmail.com", 'b590707d982a18ded86da882ded560be9acc84ebde1180a438cfe865af15053d');

$numbers = array("$no");
$sender = "TXTLCL";
$message = $msg;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    echo "<script>alert('Message Send')</script>";
    header("Refresh:0; url=msg.php");
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
}
?>