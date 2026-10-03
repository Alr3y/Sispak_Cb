<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proses Diagnosis Sedang Berjalan</title>

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
              <a class="nav-link text-uppercase text-expanded" href="login">Login</a>
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
                  <span class="section-heading-upper">Isi gejala yang anda alami</span>
                  <span class="section-heading-lower">Proses Diagnosis </span>
                </h2>
                <!-- Sistem pakar begin-->
<script type="text/javascript">
function batascheckbox(checkgroup, limit){
    var checkgroup=checkgroup
    var limit=limit
    for (var i=0; i<checkgroup.length; i++){
        checkgroup[i].onclick=function(){
        var checkedcount=0
        for (var i=0; i<checkgroup.length; i++)
            checkedcount+=(checkgroup[i].checked)? 1 : 0
        if (checkedcount>limit){
            alert("Pilihan tidak boleh lebih dari "+limit+"")
            this.checked=false
            }
        }
    }
}
</script>
<p>Pilih Salah Satu:</p>
<form id="f" name="f" method="POST" action="">

  <input type="checkbox" name="status"  value="B01">
  <?php
    include "connect.php";
    $query = mysqli_query($connect, "SELECT * FROM gejala WHERE Kode='B01'") or die (mysqli_error());
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
  ?> <br />

  <input type="checkbox" name="status"  value="B02">
  <?php
    $query = mysqli_query($connect, "SELECT * FROM gejala WHERE Kode='B02'") or die (mysqli_error());
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
  ?> <br />

  <input type="checkbox" name="status"  value="B03">
  <?php
    $query = mysqli_query($connect, "SELECT * FROM gejala WHERE Kode='B03'") or die (mysqli_error());
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
  ?> <br />

<input type="checkbox" name="status"  value="B04">
  <?php
    $query = mysqli_query($connect, "SELECT * FROM gejala WHERE Kode='B04'") or die (mysqli_error());
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
  ?> <br />
<input type="checkbox" name="status"  value="B05">
  <?php
    $query = mysqli_query($connect, "SELECT * FROM gejala WHERE Kode='B05'") or die (mysqli_error());
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
  ?> <br />
</form>

<script type="text/javascript">
batascheckbox(document.forms.f.status, 1)
</script>
 
<input type="button" value="Next" onclick=get() >
</form>
<!-- If Javascript -->

<script type="text/javascript">// get_value from radio
  function get()
  {
    var get_status;
    if(document.f.status[0].checked) //ambil value form name "status"
    {
        window.location = "level_cb01"
    }
    else if(document.f.status[1].checked)
    {
        window.location = "level_cb02"
    }
    else if(document.f.status[2].checked)
    {
        window.location = "level_cb03"
    }
    else if(document.f.status[3].checked)
    {
        window.location = "level_cb04"
    }
    else if(document.f.status[4].checked)
    {
        window.location = "level_cb05"
    }
  }
</script>
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