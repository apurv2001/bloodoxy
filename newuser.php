<!DOCTYPE html>
<html lang="en">
<head>
<title>Project medicine</title>
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
    

        <!--about in lg-->
    


<div id="users"></div>
    
    <div class="container" style="margin-top:200px">
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
             <form method="post" action="signup.php">
                <table >
                  <br>  
                  <tr> 
                    <td width="70"> Email ID </td>
                    <td width="100"><input size="30" type="email" name="txtemail1" placeholder="Enter Email" required /></td>

                  </tr>
                  <tr> 
                    <td width="100"> User Type </td>
                    <td width="150">
                        <select name="txttype" style="height:25px">
                            <option>Patient</option>
                            <option>Hospital</option>
                            <option>Oxygen Supplier</option>
                            <option>Blood Supplier</option>
                        </select>
                    </td>

                  </tr>
                  <tr> 
                    <td width="100"> Password </td>
                    <td width="100"><input size="30" type="password" name="tpass1" placeholder="Enter Password" required /></td>

                  </tr>
                  <tr> 
                    <td width="150"> Re-Password </td>
                    <td width="100"><input size="30" type="password" name="tpass2" placeholder="Enter Password" required /></td>

                  </tr>  
                  <tr colspan="2"> 
                      <td colspan="2">  
                      <center>
                      <br>  
                      <input class="btn-default btn-cf-submit" style="background-color:lightblue" type="submit" value="Signup" />
                      
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