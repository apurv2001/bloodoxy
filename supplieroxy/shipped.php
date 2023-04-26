<?php
session_start();
?>
<?php
   
    $con = mysqli_connect("localhost","root","","bloodoxy");
  
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $uname = $_SESSION['user'];
	$qty = $_POST['txtqty'];
	
    $id = $_GET['id'];
    
              
    mysqli_query($con,"update oxyorder set status = 'Shipped' where pid = '".$id."'");   
      
    $message = "Order added successfully !!!";
        
mysqli_close($con);
$_SESSION['message'] = $message;
header('Location: orders.php');
?>