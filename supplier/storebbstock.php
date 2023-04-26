<?php
session_start();
?>
<?php
   
    $con = mysqli_connect("localhost","root","","bloodoxy");
  
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $type = $_POST['type'];
    $size = $_POST['size'];
	$price = $_POST['txtprice'];
	$qty = $_POST['txtqty'];
    $name = $_SESSION['user'];
    $id = $_SESSION['id'];
    mysqli_query($con,"update bloodstock set name='".$name."', qty='".$qty."', price='".$price."',size='".$size."' where type = '".$type."'");
    
    $message = "Stock added successfully !!!";
        
mysqli_close($con);
$_SESSION['message'] = $message;
header('Location: addstock.php');