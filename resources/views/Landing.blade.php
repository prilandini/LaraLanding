<!doctype html>
<html lang="en">

<head>
  <link rel="icon" href={{asset("img/dds_icon.ico")}} type="image/gif" sizes="16x16">
  <!--[if lt IE 9]> <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script> <![end]-->
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}}>
  <link rel="stylesheet" href={{asset("css/style.css")}}>
  <title>Divisi Digital Service</title>
</head>

<body>

  <div class="bg-dasar"  background-image = {{asset('img/bg.svg')}}>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#"><img src={{asset("/img/logo.png")}} alt="logo-telkom"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <div class="pagination">
              <a class="nav-item nav-link ilink" href="#" data-target="#carouselExampleFade" data-slide-to="0">Home</a>
              <a class="nav-item nav-link ilink" href="#" data-target="#carouselExampleFade" data-slide-to="1">Internship</a>
              <a class="nav-item nav-link ilink" href="#" data-target="#carouselExampleFade" data-slide-to="2">Visit</a>
              <a class="nav-item nav-link ilink" href="#" data-target="#carouselExampleFade" data-slide-to="3">About Us</a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- Endnavbar -->
    <br>

    <div id="carouselExampleFade" class="carousel slide" data-ride="carousel" data-interval="false">
      <div class="carousel-inner" style="z-index:2;">
        <div class="carousel-item active">

          <!-- Content -->
          <div class="container content dds">
            <div class="row">
              <div class="col-md-6 order-3">
                <p class="title">Telkom Divisi Digital Service</p>

                <p class="deskripsi">
                  Merupakan divisi terpusat untuk penyelenggaraan aktivitas bisnis yang berfokus pada pengelolaan
                  inovasi produk digital melalui coherence inovation, Discovery, Incubation & Acceleration (DIA)
                  Process, Research, Standardization dan Quality Assurane (RSQA) process dan Big data analytic.
                </p>
              </div>
              <div class="col-md-6 order-md-12">
                <img src={{asset("/img/dds.png")}} alt="dds" class="img-fluid img-resp">
              </div>
            </div>
          </div>
          <!-- End Content -->

        </div>

        <div class="carousel-item">

          <!-- Content -->
          <div class="container content internship">
            <div class="row">
              <div class="col-md-6 order-3">
                <p class="title">Internship Divisi Digital Service</p>

                <p class="deskripsi">
                  Program Internship PT. Telekomunikasi Indonesia Tbk Divisi Digital Service memberikan kesempatan bagi
                  mahasiswa/i untuk melakukan penelitian atau mendukung program kerja di lingkungan bisnis Telkom DDS
                  dalam jangka waktu 6 (enam) bulan sampai dengan 1 (satu) tahun.
                </p>
                <button class="buttonmore" onclick="window.location.href='https://internship.ddstelkom.id/'">MORE INFO</button>
              </div>
              <div class="col-md-6 order-md-12">
                <img src={{asset("/img/internship.png")}} alt="dds" class="img-fluid img-resp"
                  style="width: 90%; margin-top: 60px; margin-left: 30px;">
              </div>
            </div>
          </div>
          <!-- End Content -->

        </div>

        <div class="carousel-item">

          <!-- Content -->
          <div class="container content">
            <div class="row">
              <div class="col-md-6 order-3">
                <p class="title">Visit Divisi Digital Service Telkom</p>

                <p class="deskripsi">
                  Visit Telkom DDS merupakan program kunjungan bagi kalangan pelajar (SMA/SMK), Perguruan Tinggi maupun
                  Institusi dalam rangka studytour, penelitian, benchmarking, dan lainnya. Visit berperan sebagai media
                  pembelajaran kepada peserta dalam bidang Digital Product Innovation.
                </p>

                <button class="buttonmore"onclick="window.location.href='https://visit.ddstelkom.id/'" >MORE INFO</button>

              </div>
              <div class="col-md-6 order-md-12">
                <img src={{asset("/img/vectorvisitdds.png")}} alt="dds" class="img-fluid img-resp">
              </div>
            </div>
          </div>
          <!-- End Content -->

        </div>

        <div class="carousel-item">

          <!-- Content -->
          <div class="container content">
            <div class="row">
              <div class="col-md-6 order-3">
                <p class="title">Location</p>

                <p>
                  <h3 class="deskripsi" style="font-weight: bold; text-align: left;">Telkom Divisi Digital Service
                    Bandung</h3>
                  Jl. Gegerkalong Hilir no. 47, Sukasari, Kota Bandung, Jawa Barat
                  40152
                  <p>(022) 4571050<br><br></p>
                  <h4 class="deskripsi" style="font-weight: bold; text-align: left;">Telkom Divisi Digital Service
                    Jakarta</h4>
                  Menara Multimedia lt 15
                  Jl. Kebon Sirih No.12 Jakarta Pusat 10110
                  <p>(022) 3860500</p>
                </p>

              </div>
              <div class="col-md-6 order-md-12">
                <!--<img src="/img/location.png" alt="dds" class="img-fluid img-resp"
                  style="margin-left: 25%; width: 45%;">--><hr>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1177.6553736781307!2d107.58727422961773!3d-6.87325660138534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb46a9d0a7ce2d0ef!2sDivisi%20Digital%20Service%20Telkom!5e0!3m2!1sid!2sid!4v1583143166546!5m2!1sid!2sid" 
                  width="450" height="250"></iframe>
              </div>
            </div>
          </div>
          <!-- End Content -->

        </div>

      </div>

      <!-- Footer -->

      <div class="footer" style="z-index:1;">
        <a>
          <img src={{asset("/img/footer.png")}} class="img-fluid" alt="Responsive image">
        </a>
      </div>

      <!-- End Footer -->

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src={{asset("js/jquery-3.4.1.min.js")}}></script>
    <script src={{asset("js/popper.min.js")}}></script>
    <script src={{asset("js/bootstrap.js")}}></script>
    <script src={{asset("js/script.js")}}></script>
  </div>

</body>

</html>