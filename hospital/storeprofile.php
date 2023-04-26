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
	$addr = $_POST['txtaddr'];
    $phone = $_POST['txtphone'];
    $type = $_POST['txttype'];
    $id = $_SESSION['id'];
    mysqli_query($con,"update profile set id='$id', uname='$name', address='$addr', phone='$phone',  type='$type' where email='$email1'");
    $message = "Profile updated successfully !!!";
        
mysqli_close($con);
$_SESSION['message'] = $message;
header('Location: usermessage.php');
?>