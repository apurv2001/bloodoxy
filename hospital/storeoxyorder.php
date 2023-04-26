<?php
session_start();
?>
<?php
   
    $con = mysqli_connect("localhost","root","","bloodoxy");
  
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $mat = $_SESSION['mat'];
    $uname = $_SESSION['user'];
	$qty = $_POST['txtqty'];
	$gas = $_POST['gas'];
    $purity = $_POST['purity'];
    $id = $_SESSION['id'];
    $date = date("d/m/Y");
    $status = 'Pending';
    $supplier = 'Super Industries';
    $price = $_POST['txtprice'];
    $qty1 = $qty;
    $sql = "SELECT * FROM oxystock where material='".$mat."' and gascapacity='".$gas."'";
    $result = $con->query($sql);
    $row = $result->fetch_row();
    $q = $row['7'];

    $sql = "SELECT * FROM profile where email='".$uname."'";
    $result = $con->query($sql);
    $row = $result->fetch_row();
    $name1 = $row['1'];
    $_SESSION['name1'] = $name1;
    
    if($q>=$qty)
    {
            mysqli_query($con,"insert into oxyorder (pid, user, supplier, gascapa, purity, qty, price, dateord, status) 
                        values('','$uname','$supplier','$gas','$purity','$qty1','$price','$date','$status')");
            $sql = "SELECT * FROM oxyorder order by pid desc limit 1";
            $result = $con->query($sql);
            $row = $result->fetch_row();
            $ordid = $row['0'];            
            mysqli_query($con,"insert into messages (msgid,ordid, user, supplier, dateord, status) 
                        values('','$ordid','$uname','$supplier','$date','$status')");   
            mysqli_query($con,"update oxystock set qty = qty - '".$qty."' where material='".$mat."'");                     
            #echo $uname, $qty, $size, $type, $date, $status, $supplier, $price;
            #echo $uname."','".$supplier."','".$type."','".$size."','".$qty."','".$price."','".$date."','".$status."';  
            echo $qty;  
            $message = "Order added successfully !!!";
            mysqli_close($con);
            $_SESSION['message'] = $message;
            $total = $qty * $price;
            $_SESSION['total'] = $total;
            header('Location: paymentoxy.php');
    }
    else
    {
        $message = "That item is out of stock !!!";
        $_SESSION['message'] = $message;
        header('Location: usermessage.php');        
    }    

?>