<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Project Blood and Oxygen SUpply</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/superslides.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/isotope.css" rel="stylesheet">
<link rel="stylesheet" href="css/animate.min.css">
<link href="css/style.css" rel="stylesheet">
<link href="css/media.css" rel="stylesheet">

<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/superfish.js"></script>

<script src="js/jquery.queryloader2.js"></script>

<script src="js/jquery.superslides.js"></script>

<script src="js/jquery.caroufredsel.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>

<script src="js/jquery.ui.totop.js"></script>
<script src="js/jquery.equalheights.js"></script>

<script src="js/jquery.parallax-1.1.3.resize.js"></script>

<script src="js/SmoothScroll.js"></script>

<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>

<script src="js/cform.js"></script>

<script src="js/scripts.js"></script>

</head>
<style>
table, th, td {
  /* border: 1px solid black; */
  border-collapse: collapse;
}
th, td {
  padding-top: 5px;
  padding-bottom: 5px;
  padding-left: 20px;
  padding-right: 20px;
}
</style>
<body>
<?php 
  $total = $_SESSION['total'];
  $date = date("d/m/Y");  
  $name1 = $_SESSION['name1'];
  $con = mysqli_connect("localhost","root","","bloodoxy");
  // Check connection
  if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $em = $_SESSION['user'];
  $sql = "SELECT * FROM profile where email = '".$em."'";
  $result = $con->query($sql);
  $row = $result -> fetch_row();

?>

<div class="container">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <!-- blue line -->
        <div class="col-lg-12-top">
        
        </div> 
         <!-- End of blue line -->
        
        <div class="navbar navbar-merab">
           <div class="container">
            <div class="col-lg-12">
                
            </div>
</div>
        </div>
<?php include "usermenu.php" ?>
    
<div id="users"></div>
    
    <div class="container" style="margin-top:100px; height:600px;">
            <div class="row">
        
        <div class="col-md-12">
            <center><h2><span class="merabi">Users</span> Login-Signup <span class="meraba">Area</span> </h2></center><br>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-primary" style="height:450px;margin-top:0px;">
    <div class="panel-heading" role="tab" id="headingOne" >
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Proceed for payment
        </a>
      </h4>
      
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body" style="height:300px">
            <div class="row" >
        <div class="col-xs-8 col-md-6">
            
        </div>
             <div style="height:370px; width:1100px;background-color:#EBF5FB;border: 3px solid blue; ">
                  <br>
                   <h5 style="margin-left:20px;font-size:15px; font-weight:bold;text-align:left;color:black"> 
                   <?php 
                        echo "<span style='color:red'> Welcome back, ".$_SESSION["user"]." !! </span>";
                   ?>      
                    <?php 
                      if($_SESSION['pic']=='None')
                      $fn="profilepics/logo.png";
                   else        
                      $fn = "profilepics/".$_SESSION['pic'];
                       echo "<img src=".$fn." height=30 width=30 />";
            
                   ?>
                  </h5>                
                  <hr>
                  <form method="post" action="storepayment.php">
                  <table >
                  <tr> 
                    <td width="150"> Buyer's Name </td>
                    <td width="150">
                    <input size="30" type="text" name="txtname" value="<?php echo $name1; ?>" required />
                    </td>

                  </tr>
                  <tr> 
                    <td width="150"> Email ID </td>
                    <td width="150">
                    <input size="30" type="text" name="txtemail" value="<?php echo $em; ?>" required />
                    </td>

                  </tr> 
                  <tr> 
                    <td width="150"> Total amount </td>
                    <td width="150">
                    <input size="30" type="text" name="txtamt" value="<?php echo $total; ?>" required />
                    </td>

                  </tr>
                  <tr> 
                    <td width="150"> Date </td>
                    <td width="150">
                    <input size="30" type="text" name="txtdate" value="<?php echo $date; ?>" required />
                    </td>

                  </tr>
                  <tr> 
                    <td width="150"> Mode of payment </td>
                    <td width="150">
                        <select name="mode">
                                <option>COD</option>
                                <option>Net-Banking</option>
                                <option>UPI</option>
                                <option>Debit-Card</option>
                                <option>Credit-Card</option>
                        </select>
                    </td>

                  </tr>

                    
                  <tr> 
                    <td width="100"> </td>
                    <td width="100"><input type="submit" value="Submit" /></td>

                  </tr>  
                </table>
                </form>
                
              </div>


            
         </div>
        </div>
    </div>
  </div>

  </div>

    </div>
  </div>           
          <p class="text"> <br><br>
          </p>
            </div>
      </div>
    </div>
    </div>
</div>
</div>
</div>
 </div>
  
    <script src="js/bootstrap.min.js"></script>
</body>
</html>