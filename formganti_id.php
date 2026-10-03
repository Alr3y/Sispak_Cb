<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings</title>
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
                       <a href="Dashboard" > <img src="assets/img/logo.png" />
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="logout" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
         <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="active-link">
                        <a href="dashboard" ><i class="fa fa-desktop "></i>Dashboard <span class="badge"></span></a>
                    </li>
                    <li>
                        <a href="formganti_id"><i class="fa fa-edit "></i>Ubah ID Admin  <span class="badge"> </span></a>
                    </li>
                </ul>
              </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data Admin </h2>   
                    </div>
                </div>              
                <hr />
                  <!-- Core  -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Daftar Data</title>
</head>
<body>
  <?php
      include "connect.php";
      $nama_tbl = "admin";
      $tampil = "SELECT * FROM $nama_tbl";
      $sql = mysqli_query($connect, $tampil);
      if(mysqli_num_rows($sql) == 0)
      {
        echo "<b>Tidak Ada Data Yang Tersedia</b>";
      }
  ?>
      <table border="1" cellspacing="0" cellpadding="400">
        <tr>
          <td align="center" width="100">Id Admin</td>
          <td align="center" width="200">Nama Admin</td>
          <td align="center" width="200">Kata Sandi</td>
          <td align="center">Ubah ID Pakar</td>
        </tr>
    <?php
      while($data = mysqli_fetch_array($sql))
      {
    ?>
    <tr>
    <td align="center"><?=$data['id'];?></td>
    <td align="center"><?=$data['nama'];?></td>
    <td align="center"><?=$data['password'];?></td>
    <td align="center"><a href="ubah_id?id=<?=$data['id'];?>">Ubah</a></td>
    </tr> 

    <?php
      }
    ?>
      </table>
</body>
</html>
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