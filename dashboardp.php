<?php
error_reporting(0);
session_start();
if(($_SESSION['id']))
{
  
  ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Pakar</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body> 
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <a href="dashboardp.php" > <img src="assets/img/logo.png" />
                    </a>
                </div>
                <span class="logout-spn" >
                  <a href="logout_p" style="color:#fff;">LOGOUT</a>  
                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="active-link">
                        <a href="dashboardp" ><i class="fa fa-desktop "></i>Dashboard <span class="badge"> </span></a>
                    </li>
                    <li>
                        <a href="readinformasi_p"><i class="fa fa-table "></i>Lihat Data Informasi <span class="badge"></span></a>
                    </li>
                    <li>
                        <a href="readkamus_p"><i class="fa fa-table "></i>Lihat Data Kamus Istilah <span class="badge"></span></a>
                    </li>
                    <li>
                        <a href="dashboard_p"><i class="fa fa-qrcode"></i>Settings</a>
                    </li>                  
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>PAKAR DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                            <b> WELCOME PAKAR</b>
                        </div>
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                  <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                  <div class="div-square">
                  <a href="readinformasi_p.php" >
 <i class="fa fa-circle-o-notch fa-5x"></i>
                  <h4>Lihat Data Informasi</h4>
                  </a>
                  </div>
                  </div> 

                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                  <div class="div-square">
                   <a href="readkamus_p" >
 <i class="fa fa-clipboard fa-5x"></i>
                  <h4>Lihat Data Kamus Istilah</h4>
                  </a>
                  </div>
                  </div>

                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="dashboard_ap" >
 <i class="fa fa-gear fa-5x"></i>
                      <h4>Settings</h4>
                      </a>
                      </div>            
                  </div>     
              </div> 
              </div>
              </div>
              </div>
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2018 Aldi Renaldi | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
                </div>
            </div>
        </div>
          
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php
}else{
?>
<script language="JavaScript">alert('Anda tidak boleh mengakses halaman ini, Silahkan login dahulu');
document.location=('login_pakar')</script>
<?php
}
?>