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
    .overlay {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      height: 200px;
      width: 200px;
      opacity: 0;
      border-radius: 50%;
      transition: .5s ease;
      background-color: #008CBA;
    }
    tr, td {
      border-right: : 1px solid #ddd;
    }
    .kontener {
      position: relative;
      
    }
    .kontener:hover .overlay {
      opacity: 1;
    }

    .text {
      color: white;
      font-size: 20px;
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      text-align: center;
    }
    .custom-pagination{
      margin-top:20px;
    }
    .custom-pagination a{
      background:#FFF;
      color:#444;
      padding:10px;
    }
    .custom-pagination a:hover{
      background:#FFF;
      color:#444;
      padding:10px;
      text-decoration: none;
    }
    .custom-pagination strong{
      background:#FFF;
      color:#444;
      padding:10px;
    }
  </style>
</head>
<body><div></div>
  <nav class="nav navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 bg-white rounded justify-content-end">
    <a class="navbar-brand" href="<?php echo base_url(); ?>"> <img src="<?php echo base_url(); ?>img/Use this DSC Universitas Sumatera Utara Logo x1.png" style="width: 150px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ">
        
        <li class="nav-item navbar">
          <a class="nav-link col" href="<?php echo base_url(); ?>Home">Beranda</a>
        </li>
        <li class="nav-item navbar">
          <a class="nav-link col" href="<?php echo base_url(); ?>Home/events">Event</a>
        </li>
        <li class="nav-item navbar">
          <a class="nav-link active" href="<?php echo base_url(); ?>Home/news">Berita<span class="sr-only">(current)</span></a>
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
    

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto justify-content-center">
          <div class="site-heading ">
            <h1 align="center">Berita Acara</h1>
            <p align="center" class="subheading"><hr></p>
          </div>
        </div>
      </div>
    </div>
    <?php $no = 1; foreach($blog as $u) {?>
      <div class="container ">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
              <a href="<?php echo base_url()?>Home/post/<?php echo $u->id?>">
                <h3 class="post-title">
                 <?php echo $u->judul?>
               </h3>
             </a>
             <p class="post-meta">Posted by
              <?php echo $u->penulis?>
              on <?php echo $u->tgl_terbit?></p>
            </div>
            <hr>
            
            
            
          </div>
        </div>
        
        


      </div>
    <?php } ?>
    <!-- Pager -->
    <div class="clearfix">
     <ul class="pagination justify-content-center pagination-circle pg-blue">
      
      <div class="custom-pagination"><?php echo $pagination;?></div>
      
      
    </ul>
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