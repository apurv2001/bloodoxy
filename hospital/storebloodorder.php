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
	$size = $_POST['size'];
    $type = $_POST['btype'];
    $id = $_SESSION['id'];
    $date = date("d/m/Y");
    $status = 'Pending';
    $supplier = 'Prime Blood Bank';
    $price = 200;
    $qty1 = $qty;
    $sql = "SELECT * FROM bloodstock where type='".$type."'";
    $result = $con->query($sql);
    $row = $result->fetch_row();
    $q = $row['3'];

    $sql = "SELECT * FROM profile where email='".$uname."'";
    $result = $con->query($sql);
    $row = $result->fetch_row();
    $name1 = $row['1'];
    $_SESSION['name1'] = $name1;
    
    if($q>=$qty)
    {
            mysqli_query($con,"insert into bloodorder (ordid, user, supplier, type, size, qty, price, dateord, status) 
                        values('','$uname','$supplier','$type','$size','$qty1','$price','$date','$status')");
            $sql = "SELECT * FROM bloodorder order by ordid desc limit 1";
            $result = $con->query($sql);
            $row = $result->fetch_row();
            $ordid = $row['0'];            
            mysqli_query($con,"insert into messages (msgid,ordid, user, supplier, dateord, status) 
                        values('','$ordid','$uname','$supplier','$date','$status')");   
            mysqli_query($con,"update bloodstock set qty = qty - '".$qty."' where type='".$type."'");                     
            #echo $uname, $qty, $size, $type, $date, $status, $supplier, $price;
            #echo $uname."','".$supplier."','".$type."','".$size."','".$qty."','".$price."','".$date."','".$status."';  
            echo $qty;  
            $message = "Order added successfully !!!";
            mysqli_close($con);
            $_SESSION['message'] = $message;
            $total = $qty * $price;
            $_SESSION['total'] = $total;
            header('Location: payment.php');
    }
    else
    {
        $message = "That item is out of stock !!!";
        $_SESSION['message'] = $message;
        header('Location: usermessage.php');        
    }    

?>