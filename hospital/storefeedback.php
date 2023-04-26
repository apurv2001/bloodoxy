<?php
session_start();
?>
<?php
   
    $con = mysqli_connect("localhost","root","","bloodoxy");
  
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $email1 = $_POST['txtemail1'];
	$name = $_POST['txtname'];
	$feed = $_POST['feed'];
  
    mysqli_query($con,"insert into feedback values ('','".$email1."','".$name."','".$feed."')" );
    $message = "Feedback sent successfully !!!";
        
mysqli_close($con);
$_SESSION['message'] = $message;
header('Location: usermessage.php');
?>