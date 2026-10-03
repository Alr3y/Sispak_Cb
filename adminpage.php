<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
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
                        <a href="index.php" > <img src="assets/img/logo.png" />
                    </a>
                </div>
                <span class="logout-spn" >
                  <a href="login.php" style="color:#fff;">LOGOUT</a>  
                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="active-link">
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">x</span></a>
                    </li>
                    <li>
                        <a href="ui.html"><i class="fa fa-table "></i>Data Gejala <span class="badge"></span></a>
                    </li>
                    <li>
                        <a href="blank.html"><i class="fa fa-edit "></i>Data Kerusakan  <span class="badge"></span></a>
                    </li>
                    <li>
                        <a href="tambah_barang.php"><i class="fa fa-qrcode "></i>Data Solusi</a>
                    </li>
                    <li>
                        <a href="cek_data.php"><i class="fa fa-bar-chart-o"></i>Data Kritik & Saran</a>
                    </li>
                    <li>
                        <a href="update_data.php"><i class="fa fa-edit "></i>Jumlah User </a>
                    </li>
                    <li>
                        <a href="hapus_data.php"><i class="fa fa-edit"></i>Deleate Data</a>
                    </li>
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             WELCOME ADMIN</b>
                        </div>
                    </div>
                    </div>
                  <!-- /. ROW  -->  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="readuser" >
 <i class="fa fa-users fa-5x"></i>
                      <h4>Tambah Admin</h4>
                      </a>
                      </div>
                  </div>

                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" >
 <i class="fa fa-key fa-5x"></i>
                      <h4>Ubah Kata Sandi </h4>
                      </a>
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