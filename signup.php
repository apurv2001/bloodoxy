<?php
session_start();
?>
<?php
   
    $con = mysqli_connect("localhost","root","","bloodoxy");
  
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $email1 = $_POST['txtemail1'];
	$pass1 = $_POST['tpass1'];
	$pass2 = $_POST['tpass2'];
    $type = $_POST['txttype'];
    $x = '';
    $y = 0;
    $img ='None';
    if($pass1 != $pass2)
        $message="Password does not match !!";
    else 
    {    
        $sql = "SELECT * FROM users where emailid = '".$email1."'";
        $result = $con->query($sql);
        if ($result->num_rows > 0) 
            $message="Email already exists !!";
        else
        {
            mysqli_query($con,"insert into users values ('".$email1."','".$pass1."','".$type."')" );
            mysqli_query($con,"insert into profile values ('".$y."','".$x."','".$x."','".$x."','".$email1."','".$type."','".$img."')" );
            
            $message = "Signup Successful !!!";
        }    
    }    
mysqli_close($con);
$_SESSION['message'] = $message;
header('Location: message.php');
?>