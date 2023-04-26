<?php
session_start();
?>
<?php
   
    $con = mysqli_connect("localhost","root","","bloodoxy");
  
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $email1 = $_POST['txtemail'];
	$name = $_POST['txtname'];
	$amt = $_POST['txtamt'];
    $date = $_POST['txtdate'];
    $mode = $_POST['mode'];
    mysqli_query($con,"insert into payment values ('','".$email1."','".$name."','".$amt."','".$mode."','".$date."')" );
    $message = "Payment made successfully !!!";
        
mysqli_close($con);
$_SESSION['message'] = $message;
header('Location: usermessage.php');