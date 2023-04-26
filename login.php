<?php
session_start();
?>
<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect("localhost","root","","bloodoxy");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

	$email = $_POST['txtemail1'];
	$pass1 = $_POST['txtpass1'];

    if($email=='admin@gmail.com' && $pass1=='admin')
    {
        $_SESSION["user"] = $email;
        $_SESSION["id"] = 0;
        $_SESSION["type"] = "admin";
        $_SESSION["pic"] = "None";
        header('Location: admin/adminhome.php');
    }
    else
    {
    $sql = "select * from users where emailid = '".$email."'";
    $result = $con->query($sql);
    
    if ($result->num_rows == 0) 
    {
        $message = "It's Wrong EmailId !!!";
        $_SESSION['message'] = $message;
        header('Location: message.php');
    }
    else
    {
        $message = "";
        $sql = "SELECT * FROM users where emailid = '".$email."' and password='".$pass1."'";
        $result = $con->query($sql);
    
        if ($result->num_rows > 0) 
        {
            $row = $result -> fetch_row();
            $id = $row['0'];
            $type = $row['2'];
            $sql = "SELECT * FROM profile where email = '".$email."'";
            $result = $con->query($sql);
            $row = $result->fetch_row();
            $pic = $row['6'];
            $_SESSION["user"] = $email;
            $_SESSION["id"] = $id;
            $_SESSION["type"] = $type;
            $_SESSION["pic"] = $pic;
            if($type=="Patient")
                header('Location: user/userhome.php');
            else
                if($type=="Hospital")
                    header('Location: hospital/hosphome.php');
                else
                    if($type=="Blood Supplier")
                        header('Location: supplier/supphome.php');
                    else
                        if($type=="Oxygen Supplier")
                            header('Location: supplieroxy/supphome.php');              
        }
  
        else
        {
            $message = "Wrong Password Entered !!!";    
            $_SESSION['message'] = $message;
            header('Location: message.php');
        }
    }
}    
        mysqli_close($con);
    
?>