<?php
session_start();
?>
<?php
   
    $con = mysqli_connect("localhost","root","","bloodoxy");
  
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $uname = $_SESSION['user'];
	$old = $_POST['told1'];
    $new1 = $_POST['tpass1'];
    $new2 = $_POST['tpass2'];
	
    if($new1 != $new2)
    {
        $message = "Password does not match !!!";
        $_SESSION['message'] = $message;
        header('Location: usermessage.php');        
    }
    else
    {          
        mysqli_query($con,"update users set password = '".$new1."' where emailid = '".$uname."'");   
        $message = "Order added successfully !!!";
        mysqli_close($con);
        $_SESSION['message'] = $message;
        header('Location: usermessage.php'); 
    }       

?>