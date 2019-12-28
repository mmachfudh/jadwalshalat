n<?php require 'index.v04.php'; ?>


<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jadwal Shalat</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!--link href="vendor/fontGoogleapis/fontGoogleApis.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontGoogleapis/fontGoogleApis1.css" rel="stylesheet" type="text/css"-->

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <script src="real_time.js"></script>
    <link href="css/freelancer.min.css" rel="stylesheet"></head><?php
    if(isset($_GET['days'])) { ?>
    <script type="text/javascript">window.location.href='#portfolio';</script><?php
  } ?>
    <style type="text/css">
      .display-jadwal {
        /*box-shadow: #ddd 0px 0px 0.3px 2px;*/
        padding: 20px;
      }

      .display-jadwal .jadwal {
        padding: 40px 0;
        box-shadow: #666 3px 3px 3px 0.4px;
        font-size: 2.5em;
        text-align: center;
        font-family: Montserrat;
        font-weight: 700;
        border: 1px solid #999;
        color:#666;
      }

      .display-jadwal .jadwal .warna {
        color:  #3a4858;
        font-size: 1.75em;
      }

      .datePicker {
        margin-top: 20px;
      }

      #submit_position {
        text-align: right;
      }
      /*Monstreet*/
      @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        src: local('Montserrat Bold'), local('Montserrat-Bold'), url('/font/Montserrat-Bold.woff2') format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
      }

      /*Lato*/
      @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 400;
        src: local('Lato Regular'), local('Lato-Regular'), url('/font/Lato-Regular.woff2') format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
      }

    </style>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Jadwal Shalat<br><h6><span id="date_time" style="text-align: right; color: #999; font-size:13px;"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
        </h6></a>
        
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Hari ini</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Lokasi</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Periode</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" style="width: 300px; height: 300px; border-radius: 50%" src="img/pray.png" alt="">
        <h1 class="text-uppercase mb-0">Yukk Shalat!!!</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Jadwal untuk semua tempat, dimanapun anda berada</h2>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light rounded js-scroll-trigger" href="#portfolio">
            <h4>Hari ini!</h4>
          </a>
        </div>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h1 class="text-center text-uppercase"style="color: #666;"><?php echo($row['namaKota']); ?></h1>
        <h1 class="text-center text-uppercase text-secondary" style="font-size: 3em;" value="Hari ini "><?php echo($tanggal."-".$bulan."-".$tahun." "); ?></h1>
        <hr class="star-dark mb-5">
        <div class="row">
           <div class="col-lg-4 display-jadwal">
            <div class="jadwal">Subuh<br> <span class="warna"><?php echo($shalat[0]); ?></span></div>
          </div>
          <div class="col-lg-4 display-jadwal">
            <div class="jadwal">Terbit<br><span class="warna"><?php echo($shalat[1]); ?></span></div>
          </div>
          <div class="col-lg-4 display-jadwal">
            <div class="jadwal">Dhuhur<br><span class="warna"><?php echo($shalat[2]); ?></span></div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 display-jadwal">
            <div class="jadwal">Ashar<br><span class="warna"><?php echo($shalat[3]); ?></span></div>
          </div>
          <div class="col-lg-4 display-jadwal">
            <div class="jadwal">Magrib<br><span class="warna"><?php echo($shalat[4]); ?></span></div>
          </div>
          <div class="col-lg-4 display-jadwal">
            <div class="jadwal">Isya'<br><span class="warna"><?php echo($shalat[5]); ?></span></div>
          </div>
        </div>

      </div>
     
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Lokasi</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">

          <form target="" method="GET">
            <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Kota</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="idKota">
          <?php $id = isset($_GET['idKota']) ? $_GET['idKota'] : 1; ?>
          <?php foreach($kota as $item): ?>
            <option value="<?php echo $item['ID']; ?>" <?php echo $id == $item['ID'] ? 'selected' : ''; ?>><?php echo $item['namaKota'] ?></option>
          <?php endforeach; ?>
        </select>
        <!-- Tanggal -->
        <div class="datePicker input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Tanggal</span>
          </div>
          <input type="date" name="days" value="<?php echo($tahun."-".$bulan."-".$tanggal); ?>">

       </div>   
  
      </div>
    </div>  

         <div class="col-lg-4 mr-auto">
            <div class="input-group mb-3">
      <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Metode</label>
        </div>
        <select class="custom-select form-control" id="inputGroupSelect01" name="KA" onchange="changeKA(this.value)">
          <option value="1" <?php echo isset($_GET['KA']) && $_GET['KA'] == 1 ? 'selected' : ''; ?>>Imam Syafi'i      </option>
          <option value="2" <?php echo isset($_GET['KA']) && $_GET['KA'] == 2 ? 'selected' : ''; ?>>Imam Hanafi       </option>
        </select>
        <input type="text" aria-label="Last name" class="form-control" id="labelKA" value="KA=<?php echo($KA) ?>"disabled>
      </div>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">Sudut Subuh dan Isya'</span>
        </div>
        <input type="text" aria-label="sudutSubuh" class="form-control" name="sudutSubuh" value="<?php echo($sudutSubuh) ?>">
        <input type="text" aria-label="SudutIsya" class="form-control" name="sudutIsya" value="<?php echo($sudutIsya) ?>">
      </div>
          </div>          
        </div>
        <div class="text-center">
          <input class="btn btn-xl btn-outline-light rounded js-scroll-trigger" type="submit">
        </div>
    </form>

    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <?php   
          $month =array("1"=>"Januari","2"=>"Februari","3"=>"Maret","4"=>"April","5"=>"Mei","6"=>"Juni","7"=>"Juli","8"=>"Agustus","9"=>"September","10"=>"Oktober","11"=>"November","12"=>"Desember");
          $tanggalAwal=jdToTgl($Jd);
          $monthNum=$tanggalAwal['1'];
          $monthNew= $month[$monthNum];
             ?>
        <h2 class="text-center text-uppercase text-secondary mb-0">Periode <?php echo $monthNew." ".$tahun; ?></h2>
        <br>
        <?php require 'periode.php';?>
        
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">Jl Sarimun Beji Kota Batu
              <br>Machfudh, Kode Pos 65326</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Yukk Shalat</h4>
            <p class="lead mb-0">Aplikasi ini dibuat untuk memenuhi tugas Komputasi Astronomi</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy;2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

   
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

    <script>
      function changeKA(value) {
        var labelKA = document.getElementById('labelKA');
        labelKA.value = 'KA='+value;
      }
    </script>

  </body>

</html>

