<?php
session_start();
?>
<?php
   
    $con = mysqli_connect("localhost","root","","bloodoxy");
  
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $id=$_SESSION["id"];
    $email=$_SESSION['user'];
    $fname = $_FILES["file"]["name"];
    $file_tmp =$_FILES['file']['tmp_name'];
    $array = explode(".",$fname);
    
    $fn = $id.".".$array[1];
    move_uploaded_file($file_tmp,"profilepics/".$fn);
    echo $fn;
    mysqli_query($con,"update profile set ppic='$fn' where email='$email'");
    $message = "Profile picture updated successfully !!!";
        
mysqli_close($con);
$_SESSION['message'] = $message;
header('Location: usermessage.php');
?>