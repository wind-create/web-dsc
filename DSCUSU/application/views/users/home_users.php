<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DSC Universitas Sumatera Utara</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>main.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css"> 
  <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>
  <?php include "alert.php" ?>
  <style type="text/css">
    .form_err{font-size: 13px; font-family: Arial; color: red; font-style: Italic;}
  </style>
</head>
<body>
  <nav class="nav navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 bg-white rounded justify-content-end">
    <a class="navbar-brand" href="<?php echo base_url();?>"> <img src="<?php echo base_url();?>img/Use this DSC Universitas Sumatera Utara Logo x1.png" style="width: 150px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ">

        <li class="nav-item navbar">
          <a class="nav-link active" href="<?php echo base_url();?>Home">Beranda</a>
        </li>
        <li class="nav-item navbar">
          <a class="nav-link col" href="<?php echo base_url(); ?>Home/events">Event<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item navbar">
          <a class="nav-link col" href="<?php echo base_url(); ?>Home/news">Berita</a>
        </li>

      </ul>
      <div class="col-md-7"></div>
      <ul class="navbar-nav  navbar-right">
        <?php if($this->session->userdata('status') != "Login" ): ?>
          <li class="nav-item  navbar">
            <a class="nav-link" data-toggle="modal" data-target="#onphpidLogin" href="">Login</a>
          </li>
          <li class="nav-item  navbar">
            <a class="nav-link" data-toggle="modal" data-target="#onphpidRegister" href="">Register</a>
          </li>
          <?php else: ?>
            <?php foreach ($client as $fetch){ ?>
              <li class="nav-item  navbar">
                <a class="nav-link" href="<?php echo base_url();?>Home/profile"><?php echo $fetch->nama; ?></a>
              </li>
            <?php } ?>
            <li class="nav-item  navbar">
              <a class="nav-link" data-toggle="modal" data-target="#onphpidLogout" href="">Logout</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" style="background: url(img/dsc_cover.jpeg); background-size: 100%;">
      <div class="col-md-5 p-lg-5 mx-auto my-5" >
       <img src="<?php echo base_url(); ?>img/dsc.png" width="200px;">
       <p class="lead font-weight-normal" style="color: white;">Developer Student Club Universitas Sumatera Utara (DSC) adalah program dari Google Developers untuk mahasiswa yang didesain untuk membantu meningkatkan kemampuan dan pengetahuan mahasiswa dalam mengembangkan aplikasi Mobile dan Web.</p>
     </div>
     <div class="product-device shadow-sm d-none d-md-block"></div>
     <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
   </div>


   <hr class="featurette-divider">
   <h2 align="center">More About US</h2>
   <div class="p-5 p-md-5 m-md-5">
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row" align="center">
        <div class="col-lg-4">

          <h2>Early Estabilish</h2>
          <p>USU telah menjadi bagian dari komunitas DSC pada tahun 2017. Menjadikannya debut pertama sebagai komunitas mahasiswa pengembang pertama di Universitas Sumatera Utara.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">

          <h2>What We Do</h2>
          <p>Jadi nantinya bakalan ada kegiatan-kegiatan seperti workshop,event atau lainnya. Disini siswa akan dibekali dengan keterampilan pemrograman untuk digunakan untuk menciptakan solusi bagi masalah masyarakat.</p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">

          <h2>Our Purpose</h2>
          <p>Developer Student Club (DSC) adalah program Google Developers bagi mahasiswa untuk mempelajari keterampilan pengembangan seluler dan web.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>
    <hr class="featurette-divider">
    <h1 align="center">Find US</h1>
    <br>
    <div class="container">
      <table cellpadding="20">
        <tr>
          <td>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.108478535767!2d98.6596266!3d3.5624909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313020778f7f61%3A0xf6f49ab3d64d60ff!2sFakultas+Ilmu+Komputer+dan+Teknologi+Informasi+-+USU!5e0!3m2!1sid!2sid!4v1546359905333" width="450" height="450" frameborder="0" style="border:0 " allowfullscreen></iframe> 
         </td>
         <TD VALIGN ="Top" Align ="Left">
          <h5>Alamat</h5>
          <p>Pusat Unggulan Iptek, University of Sumatera Utara, Jl. Universitas No.9,<br> Padang Bulan, Medan Baru, Medan City, North Sumatra 20222</p>
          <br>
          <h5>Instagram</h5>
          <p>dsc.usu</p>
          <br>
          <h5>E-Mail</h5>
          <p>dscusumedan@gmail.com</p>
          <br>
          <h5>Contact Person</h5>
          <p>085277056878 (WA) -  Willi Nardo</p>
        </td>
      </tr>
    </table>

  </div>
</div>

<?php include "modalLogin.php" ?>
<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">

    </div>


    <div class="col-6 col-md">

      <img src="<?php echo base_url(); ?>img/DSC.png" width="50px;">
      <small class="d-block mb-3 text-muted">&copy; 2019-2020</small>
    </div>
  </div>
</footer>


<script>
  window.onscroll = function() {myFunction()};

  var header = document.getElementById("myHeader");
  var sticky = header.offsetTop;

  function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
</script>
</body>
</html>