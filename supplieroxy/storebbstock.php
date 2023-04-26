<?php
session_start();
?>
<?php
   
    $con = mysqli_connect("localhost","root","","bloodoxy");
  
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $type = $_POST['type'];
    $water = $_POST['water'];
	$gas = $_POST['gas'];
	$purity = $_POST['purity'];
    $qty = $_POST['txtqty'];
    $price = $_POST['txtprice'];
    $tp = 1;
    $name = $_SESSION['user'];
    $id = $_SESSION['id'];
    mysqli_query($con,"insert into oxystock values 
    ('".$id."','".$name."','".$type."','".$water."','".$gas."','".$purity."','".$tp."','".$qty."','".$price."')");
    $message = "Stock added successfully !!!";
        
mysqli_close($con);
$_SESSION['message'] = $message;
header('Location: addstock.php');