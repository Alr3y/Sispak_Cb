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
                        <a href="data_gejala"><i class="fa fa-edit "></i>Data Gejala  <span class="badge">x</span></a>
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
                     <h2>EDIT DATA GEJALA</h2>   
                    </div>
                </div>              
                <hr />
                  <!-- Core  -->
                  <html>
	<head>
		<title>Edit Data</title>
	</head>
	<body>
		<?php
			include "connect.php";
			$nama_tbl = "gejala";
			$coba = $_GET['Kode']; // variabelcoba-coba
			$tampil = "SELECT * FROM $nama_tbl where `Kode`='$_GET[Kode]'";
			$sql = mysqli_query($connect, $tampil);

			while($data = mysqli_fetch_array($sql))
			{
				$kodenya  = $data['Kode'];
				$namanya = $data['Nama'];
				//echo $coba;
			}
		?>
		Masukkan Data
		Masukkan Data
    <h1>Masukkan Data </h1>
    <br>
    <form method='post' action='gejala_simpan_edit'>
      <b>Kode Kerusakan : </b><br/> 
      <td><input type='text' name='kodenya'  value="<?=$kodenya;?>" readonly></td>
      <br>
      <br>
            <b>Nama Kerusakan : </b><br/> 
            <textarea required rows="10" cols="100" name="namanya" ><?php echo $namanya; ?> </textarea>
            <br>
						<input type="submit" name="submit" value="Simpan Edit">
		</form>
		<a href='daftar_data.php'>Kembali</a>
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