<!DOCTYPE html>
<html lang="en">
<head>
<title>Project Blood and Oxygen Supply</title>
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
  border-color:black;
  border-size:3px;
}
th, td {
  padding-top: 5px;
  padding-bottom: 5px;
  padding-left: 20px;
  padding-right: 20px;
}
</style>
<?php 
$_SESSION['user'] = "";
$user = $_SESSION['user'];
$con = mysqli_connect("localhost","root","","bloodoxy");
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

    $sql = "SELECT * FROM bloodstock where name = '".$user."'";
    $result = $con->query($sql);
   
    // if ($result->num_rows > 0) 
    // {
    //     $row1 = $result -> fetch_row();
    // }
    //mysqli_close($con);    
?>
<body>
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
<?php include "menu.php" ?>
    
<?php include "home.php" ?> 
<div id="about">
    <div class="container-fluid1"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
            <h2><span class="merabi">Welcome to</span> HEALTHCARE <span class="meraba">SUPPLIES</span></h2>
            <p class="mecoo">Our medical supplies are meant to care about you & your family's health</p>
            <p class="mecoo">We are a dedicated team of </p>
        </div>
    </div>
    
</div>
        <!--about in lg-->
    
      <div class="modal-body row">
            
                <div class="col-lg-6" style="width:500px; height:200px;margin-left: 200px;">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                  <i class="fa fa-user-md fa-5x"></i>
                    <h4>HealthCare Professionals</h4> 
                    
                </div>
                <div class="col-lg-6" style="width:500px; height:200px; margin-top: -200px; margin-left: 700px;">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <i class="fa fa-medkit fa-6x"></i>
                    <h4>Medical Excellence</h4> 
                                    </div>
                </div>
   </div> 

    <div class="container-fluid">
    
</div>
</div>
</div>
    </div>


    
    <div id="feedbacks"></div>
    
    <div class="container" style="margin-top:-100px">
            <div class="row">
        
        <div class="col-md-12">
            <center><h2><span class="merabi">Our</span> Remarkable <span class="meraba">Feedback</span> </h2></center><br>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          User Feedbacks
        </a>
      </h4>
      
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
            <div class="row" >
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="images/bb.jpg">
            </a>
        </div>
                <p class="text">
                                  
                   
                  <?php
                      $sql = "SELECT * FROM feedback";
                      $result = $con->query($sql);
                       
                      if ($result->num_rows > 0) 
                      {
                        $n = $result->num_rows;
                        $i = 0;
                        while($i<$n)
                        {
                          $row1 = $result->fetch_row();
                          echo "<span style=font-size:13px>".($i+1)." : ".$row1['3']."</span>
                          -     <span style=font-size:13px;font-style:italic;font-weight:bold;>".$row1['2']."</span>
                                <hr>";
                          $i++;
                        } 
                      }                   
                  
                  ?>
                      
                </table>
            </p>
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

   
<div id="suppliersoxy"></div>
    
    <div class="container" style="margin-top:-100px">
            <div class="row">
        
        <div class="col-md-12">
            <center><h2><span class="merabi">Our</span> Valuable <span class="meraba">Suppliers</span> </h2></center><br>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Oxygen Suppliers
        </a>
      </h4>
      
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
            <div class="row" >
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="images/bb.jpg">
            </a>
        </div>
                <p class="text">
                <table style="margin-left:300px;border:2px;" border="2">
                <tr> 
                   

                  </tr> 
                  <tr style="background-color:lightgrey"> 
                   <td width="250">
                      Name of Supplier
                    </td>
                    <td width="250">
                      Address
                    </td>
                    <td width="150">
                      Phone No
                    </td>
                    <td width="150">
                      Email Id
                    </td>

                  </tr>
                   
                  <?php
                      $sql = "SELECT * FROM profile where type = 'Oxygen Supplier'";
                      $result = $con->query($sql);
                       
                      if ($result->num_rows > 0) 
                      {
                        $n = $result->num_rows;
                        $i = 0;
                        while($i<$n)
                        {
                          $row1 = $result->fetch_row();
                          echo "<tr><td>".$row1['1']."</td><td>".$row1['2']."</td><td>".$row1['3']."</td><td>".$row1['4']."</td></tr>";
                          $i++;
                        } 
                      }                   
                  
                  ?>
                      
                </table>
            </p>
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

            <div id="suppliers"></div>
    
    <div class="container" style="margin-top:-100px">
            <div class="row">
        
        <div class="col-md-12">
            <center><h2><span class="merabi">Our</span> Valuable <span class="meraba">Suppliers</span> </h2></center><br>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Blood Banks
        </a>
      </h4>
      
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
            <div class="row" >
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="images/bb.jpg">
            </a>
        </div>
                <p class="text">
                <table style="margin-left:300px;border:2px;" border="2">
                <tr> 
                   

                  </tr> 
                  <tr style="background-color:lightgrey"> 
                   <td width="250">
                      Name of Blood Bank
                    </td>
                    <td width="250">
                      Address
                    </td>
                    <td width="150">
                      Phone No
                    </td>
                    <td width="150">
                      Email Id
                    </td>

                  </tr>
                   
                  <?php
                      $sql = "SELECT * FROM profile where type = 'Blood Supplier'";
                      $result = $con->query($sql);
                       
                      if ($result->num_rows > 0) 
                      {
                        $n = $result->num_rows;
                        $i = 0;
                        while($i<$n)
                        {
                          $row1 = $result->fetch_row();
                          echo "<tr><td>".$row1['1']."</td><td>".$row1['2']."</td><td>".$row1['3']."</td><td>".$row1['4']."</td></tr>";
                          $i++;
                        } 
                      }                   
                  
                  ?>
                      
                </table>
            </p>
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

            <div id="services"></div>
    
    <div class="container" style="margin-top:-100px">
            <div class="row">
        
        <div class="col-md-12">
            <center><h2><span class="merabi">Our</span> Healthcare <span class="meraba">Services</span> </h2></center><br>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Blood Supply
        </a>
      </h4>
      
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
            <div class="row" >
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="images/bb.jpg">
            </a>
        </div>
            <p class="text">
            Blood banking is the process that takes place in the lab to make sure that donated blood, or blood products, are safe before they are used in blood transfusions and other medical procedures. Blood banking includes typing the blood for transfusion and testing for infectious diseases.
                <br><br>
                Each unit of blood is broken down into components, such as red blood cells, plasma, cryoprecipitated AHF, and platelets. One unit of whole blood, once it's separated, may be transfused to several patients, each with different needs.
                <br><br>
                <span style="font-size:15px"> Blood Donation </span> <br><br>
                Most blood donors are volunteers. However, sometimes, a patient may want to donate blood a couple of weeks before undergoing surgery, so that his or her blood is available in case of a blood transfusion.
            </p>
            </div>
        </div>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Oxygen Supply 
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <div class="row">
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="images/oc.jpg">
            </a>
        </div>
                <p class="text">
                Oxygen cylinders and oxygen concentrators offer oxygen therapy to patients who are unable to inhale enough oxygen into their bodies on their own. Cylinders and concentrators specifically, are especially designed to supply oxygen to patients at hospitals, home, on the go, or when they are being transferred between medical sites.
                <br><br>
                The human body cannot sustain without the oxygen that we breathe in through the air. Owing to lung diseases, one may not be able to breathe enough oxygen and they might be left short of breath and cause problems with their heart, brain, and other parts of a patient’s body. This is where Oxygen Cylinders step into the picture with Oxygen Therapy.    
                <br><br>
                As the effects of Covid-19 came to the fore, researchers and medical professionals observed that coronavirus causes such damage to the lung that impacts its most essential respiratory function, i.e. taking in oxygen and letting out carbon dioxide from the body. The membrane that executes the transfer of oxygen and carbon dioxide is heavily affected, leading to oxygen deficiency, which is then managed by an external oxygen administration system. Oxygen cylinders and concentrators assist the patient’s breathing.
                <br>
                An oxygen cylinder is a storage container which supplies oxygen to a patient through a surgical mask over the nasal cannula. Oxygen cylinders are available in different capacities and they are chosen depending upon the condition of the patient.
            </p>
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

<div id="users"></div>
    
    <div class="container" style="margin-top:-250px">
            <div class="row">
        
        <div class="col-md-12">
            <center><h2><span class="merabi">Users</span> Login-Signup <span class="meraba">Area</span> </h2></center><br>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-primary" style="height:340px">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Users Area for Login/Signup
        </a>
      </h4>
      
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body" style="height:320px">
            <div class="row" >
        <div class="col-xs-6 col-md-3">
            
        </div>
             <center>
             <div style="height:250px; width:500px; background-color:#EBF5FB;border-width:3px;border: 3px solid pink;">
             <form method="post" action="login.php">
                <table >
                 <br>
                  <tr> 
                    <td width="70"> Email ID </td>
                    <td width="100"><input size="30" type="email" name="txtemail1" placeholder="Enter Email" required /></td>

                  </tr>
                  <tr> 
                    <td width="70"> Password </td>
                    <td width="100"><input size="30" type="password" name="txtpass1" placeholder="Enter Password" required /></td>

                  </tr>  
                  <tr colspan="2"> 
                    
                    <td colspan="2">
                      <center>
                      <br>  
                      <input class="btn-default btn-cf-submit" style="background-color:lightblue"type="submit" value="Login" />
                      <br><br>Not user ? <a href="newuser.php">Signup Here</a>
                    </center>
                    </td>
                  </tr>  
                </table>
              </form>
              </div>
              </center>
              <!-- <div style="border: 2px solid pink;margin-top:-220px; margin-left:550px;height:220px; width:550px; background-color:#EBF5FB;border-width:3px">
               <form method="post" action="signup.php">
                <table >
                  <tr>
                    <td colspan="2" style="text-align:center; font-size:15px;font-weight:bold"> Signup </td>
                  </tr>  
                  <tr> 
                    <td width="100"> Email ID </td>
                    <td width="150"><input size="40" type="email" name="temail1" placeholder="Enter Email" required /></td>

                  </tr>
                  <tr> 
                    <td width="100"> User Type </td>
                    <td width="150">
                        <select name="txttype">
                            <option>User</option>
                            <option>Hospital</option>
                            <option>Oxygen Supplier</option>
                            <option>Blood Bank</option>
                        </select>
                    </td>

                  </tr>
                  <tr> 
                    <td width="100"> Password </td>
                    <td width="150"><input size="40" type="password" name="tpass1" placeholder="Enter Password" required /></td>

                  </tr>
                  <tr> 
                    <td width="150"> Re-Password </td>
                    <td width="150"><input size="40" type="password" name="tpass2" placeholder="Enter Password" required /></td>

                  </tr>  
                  <tr> 
                    <td width="100"> </td>
                    <td width="100"><input type="submit" value="Signup" /></td>

                  </tr>  
                </table>
              </form>
              </div> -->
            
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