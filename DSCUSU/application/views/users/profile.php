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
          <a class="nav-link col" href="<?php echo base_url();?>Home">Beranda</a>
        </li>
        <li class="nav-item navbar">
          <a class="nav-link col" href="<?php echo base_url(); ?>Home/events">Event</a>
        </li>
        <li class="nav-item navbar">
          <a class="nav-link col" href="<?php echo base_url(); ?>Home/news">Berita</a>
        </li>
        
      </ul>
      <div class="col-md-7"></div>
      <ul class="navbar-nav  navbar-right">
        <?php foreach ($client as $fetch){ ?>
          <li class="nav-item  navbar">
            <a class="nav-link active" href="<?php echo base_url();?>Home/profile"><?php echo $fetch->nama; ?><span class="sr-only">(current)</span></a>
          </li>
        <?php } ?>
        <li class="nav-item  navbar">
          <a class="nav-link" data-toggle="modal" data-target="#onphpidLogout" href="">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  

  <div class="container">
   
    <div class="row">
      <div class="col-md-4">
        <table align="center" cellpadding="10">
          <tr>
            <td>
             
             <div class="kontener">
              <img width="200px" height="200px" style=" border-radius: 50%;" src="<?php echo base_url('aset/img/'.$fetch->foto) ?>">
              <a class="nav-link" data-toggle="modal" data-target="#onphpidfoto"  href="">
                <div class="overlay">
                  <div class="text">Ubah Foto</div>
                  
                </div>
              </a>
            </div>

          </td>
        </tr>
        <tr>
          <td>
            
            <div class="list-group list-group-flush" id="list-tab" role="tablist">
              <?php if(isset($_GET['page']) == "update_data"): ?>
                <a class="list-group-item list-group-item-action active" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="home" >Update Data Diri</a>
                <?php else: ?>
                  <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home" >Data Diri</a>
                <?php endif; ?>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile" >Histori Event</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Ubah Password</a>

              </div>
            </td>
          </tr>
        </table>



      </div>
      
      <div class="col-md-8">
        <div class="tab-content" id="nav-tabContent">
          <?php include "page.php" ?>
          
          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
            
            <div class="card">
              <!-- update -->
              <?php if (empty($events)) { ?>        
                <p align="center" class="justify-content-center">
                 <br>
                 Anda belum memiliki histori, coba lihat event
                 <br>
                 <form action="<?php echo base_url(); ?>Home/events">
                  <button class=" btn btn-light col-md-4">Event</button>
                </form>
              </p>
            <?php }else{?>

              <p>
                <!-- update -->      
                <div class="tab-content row justify-content-center">

                  <!-- Schdule Day 1 -->
                  <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

                    <!-- update -->
                    <?php $x=date('Y-m-d');?>
                    <?php foreach ($events as $a) { ?>
                     
                      <?php if ($x>$a->tanggal && $a->status==1) {?>
                        <div class="row schedule-item" title="anda datang">
                          <br>
                          <div class="col-md-2 d-flex align-items-center justify-content-center btn-success"><div class="">Selesai</div></div>  
                        <?php } elseif ($x>$a->tanggal) { ?>
                          <div class="row schedule-item" title="anda Tidak datang">
                            <br>
                            <div class="col-md-2 d-flex align-items-center justify-content-center btn-danger"><div class="">Selesai</div></div>
                          <?php } else{ ?>
                            <div class="row schedule-item" title="Sampai Jumpa di Acara">
                              <br>
                              <div class="col-md-2 d-flex align-items-center justify-content-center btn-primary"><div class="">Selesai</div></div>
                            <?php } ?>
                            <div class="col-md-8">
                              <h4><?php echo $a->nama_event; ?> </h4>
                              <small><?php echo $a->tanggal; ?></small>
                              <p><?php echo $a->tempat; ?></p>
                            </div>

                            <div class="col-md-2 d-flex align-items-center">
                              <?php $u=$a->sertifikat; if($x>$a->tanggal && $a->status==1){ ?>
                                <a href="<?php echo base_url()?>Home/certificate/<?php echo $a->id_history?>" class="btn btn-warning">Cetak Sertifikat</a>
                              <?php }?>
                            </div>

                          </div>
                          <br>
                        <?php } ?>

                      <?php } ?>

                      <!-- update -->

                    </div>
                  </div>
                </p>
                
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                  <div class="card">
                    <p align="center">
                      <br>
                      Silahkan isi kolom berikut untuk mengubah Kata Sandi menjadi Kata Sandi baru Anda
                    </p>
                    <form action="<?php echo base_url();?>Client/change_pass" method="get">
                      <table cellspacing="20" cellpadding="20">

                        <tr>
                          <td><input type="password" required="" name="oldpass" placeholder="Password Lama" class="form-control col-md-9" /></td>

                        </tr>
                        <tr>
                          <td><input type="password" required="" name="newpass" placeholder="Password Baru" class="form-control col-md-9" /></td>

                        </tr>
                        <tr>
                          <td>
                           <button class="btn btn-danger col-md-7">Simpan</button>
                         </td>
                       </tr>
                     </table>
                   </form>

                 </div>



               </div>

               
             </div>
           </div>
         </div>

       </div>

     </div>
   </div>

   <?php include "modalLogin.php" ?>
   <div id="onphpidfoto" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        
        <div class="modal-body">
          <!-- form login -->
          <form id="postForm" action="<?php echo base_url().'client/fotoprofil' ?>" method="POST" enctype="multipart/form-data" onsubmit="return postForm()">
          </div>
          <table width="740" align="center">
            <tr>
              <td> </td>
              <td>
               <input type="file" name="foto" class="form-control">
               <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Batal</button>
             </td>
             <td>
              <button align="right" class="btn btn-danger" type="submit">Ya</button>
            </td>
          </tr>
          <tr><td></td></tr>
        </table>          
      </form>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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