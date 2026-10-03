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
                  <a href="#" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
         <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="active-link">
                        <a href="dashboard" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">x</span></a>
                    </li>
                    <li>
                        <a href="data_gejala"><i class="fa fa-edit "></i>Data Gejala  <span class="badge"></span></a>
                    </li>
                    <li>
                        <a href="data_kerusakan"><i class="fa fa-edit "></i>Data Kerusakan  <span class="badge"></span></a>
                    </li>
                    <li>
                        <a href="data_solusi"><i class="fa fa-edit "></i>Data Solusi  <span class="badge"></span></a>
                    </li>
                </ul>
               </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>READ DATA </h2>   
                    </div>
                </div>              
                <hr />
                  <!-- Core  -->
                  
<?php
include "connect.php";
$name= $_POST['name']; //get the nama value from form
$q = "SELECT * from gejala where Nama like '%$name%' "; //query to get the search result
$result = mysqli_query($connect, $q); //execute the query $q salah dimari, tambah $connect
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'>
<td>Kode</td>
<td>Nama Gejala</td>
</tr>";
while ($data = mysqli_fetch_array($result)) {  //fetch the result from query into an array
echo "
<tr>
<td>".$data['Kode']."</td>
<td>".$data['Nama']."</td>
</tr>";
}
echo "</table>";
?>
     <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2018 Aldi Renaldi | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
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