<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kerusakan Yang Dialami</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="diagnosis">Diagnosis</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="kamus_istilah">Kamus Istilah</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="form_kritik_saran">Kritik & Saran</a>
            </li>
             <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about">About</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="login"> Login</a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <p>Kerusakan Yang Dialami</p>
                  <span class="section-heading-upper"></span>
                  <span class="section-heading-lower">
                  <!--  Core -->
                  <?php
                  include "connect.php";
                  $query = mysqli_query($connect, "SELECT * FROM Kerusakan WHERE Kode='K16'") or die (mysqli_error());
                  if(mysqli_num_rows($query) == 0)
                    {
                      echo "<b>Tidak ada data yang tersedia</b>";
                    }
                  else
                    {
                  while($r = mysqli_fetch_array($query)):?>
                  <td><?php echo $r['Nama'] ?></td>
                  <?php
                    endwhile;
                    }
                  ?> 
                </span>
                <br />
             
                </h2>
              <!-- Solusi -->
             <script type="text/javascript">
              function showhide(toggle) {
              //change target element mode
              var elementmode = document.getElementById(toggle).style;
              elementmode.display = (!elementmode.display) ? 'none' : '';
              }
              function openclose(toggle) {
                  showhide(toggle);
              }
            </script>
            <a href="javascript:openclose('toggle');" style="text-decoration: none; padding: 3px 7px 3px 7px; border: 1px solid #ccc;"><font size="5" color="#cf3721">Lihat Solusi</font></a>
            <div id='toggle' style='display: none; padding: 10px; background: #c3c3a2;'>
              <em><?php
                  include "connect.php";
                  $query = mysqli_query($connect, "SELECT * FROM Solusi WHERE Kode='S15'") or die (mysqli_error());
                  if(mysqli_num_rows($query) == 0)
                    {
                      echo "<b>Tidak ada data yang tersedia</b>";
                    }
                  else
                    {
                  while($r = mysqli_fetch_array($query)):?>
                  <td><font size="4"><?php echo $r['Nama'] ?></font></td>
                  <?php
                    endwhile;
                    }
                  ?> 
              </em>
</div>
              <form>
              <p></p>
              <input type="button" value="Selesai" onclick="window.location.href='Thanks'" />
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Aldi Renaldi 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
