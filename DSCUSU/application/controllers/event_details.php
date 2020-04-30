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
  <?php if($this->session->flashdata('status') == "Invalid"): ?>
    <script>
      $(document).ready(function(){
        $("#onphpidRegister").modal("show");
      });
    </script>
    <?php elseif($this->session->flashdata('status') == "Error"): ?>
      <script>
        $(document).ready(function(){
          $("#onphpidLogin").modal("show");
        });
      </script>
    <?php endif; ?>
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
            <a class="nav-link active" href="<?php echo base_url(); ?>Home/events">Event<span class="sr-only">(current)</span></a>
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
      

      <div class="container">

        <!-- update -->

        <?php if ($status_event==!NULL) { ?>

          <div class="alert alert-success alert-dismissible fade show d-flex justify-content-center" role="alert">
           Hai! Kamu Sudah Mendaftarkan diri di Event ini, Jangan lupa datang tepat waktu ya! , 
           <a href="<?php echo base_url('Home/profile') ?>" style="text-decoration: none;">
             lihat jadwalmu disini
           </a> 

         </div>
       <?php } ?>
       


       <!-- update -->



       <?php  
       foreach ($event as $object) {
        ?>
        <div class="row">
          
          
          <div class="col-md-6">
            <img class="card-img-top" src="<?php echo base_url('aset/img/'.$object->poster) ?>" alt="Card image cap">
          </div>

          <div class="col-md-6">
            <div class="card bg-primary text-white">
              <div class="card-header">
                <h3><?php echo $object->nama_event; ?></h3>
              </div>
              
              <div class="card-body">
                <table>
                  <tr>
                    <td width="200%">
                      <small>Tanggal :</small>
                      <br>
                      
                      <?php echo $object->tanggal; ?>
                      
                      
                      <br>
                      <small>Tempat :  </small>
                      
                      <?php echo $object->tempat; ?>
                      
                      <br>

                    </td>
                    <td>

                      <!-- update -->
                      <div align="center" class=" card border-primary text-primary">
                        
                        <div title="kursi yang Tersedia" class="card-body">
                          <h4><?php echo $object->kursi; ?>
                        </h4>  

                        <!-- update -->



                      </div>
                    </div>
                    
                    
                  </td>
                </tr>
              </table>
              
            </div>
            <?php  
            foreach ($client as $w) {
              ?>
              <div class=" card-footer">
                <form action="<?php echo base_url().'Home/insert'; ?>" method="post">
                  <input type="text" hidden name="id_event" value="<?php echo $object->id_event; ?>"> 
                  
                  <!-- update -->
                  <input type="number" hidden name="kursi" value="<?php echo $object->kursi; ?>"> 
                  <!-- update -->
                  
                  <input type="text" hidden name="id_user" value="<?php echo $w->id_user; ?>">
                  <?php if($this->session->userdata('status') == "Login"): ?>
                    
                    <!-- update -->
                    <?php 
                    $kursi=$object->kursi;
                    $x=date('Y-m-d');
                    ?>
                    <?php if ($x>$object->tanggal){?>
                      <div class="form-control btn btn-danger">Maaf Acara Sudah Selesai</div>  
                    <?php } else{ ?>
                      <?php if ($status_event==NULL && $kursi==!'') {?>
                        <button  type="submit" class="form-control btn btn-light">Daftar Sekarang</button>  
                      <?php } elseif($status_event==NULL){ ?>
                        <div class="form-control btn btn-danger">Maaf Kursi Sudah Habis</div>  
                      <?php } ?>
                    <?php }?>
                    <!-- update -->
                    
                    

                    
                    <?php else: ?>
                      <button  type="button" class="form-control btn btn-light" data-toggle="modal" data-target="#onphpidLogin" >Daftar Sekarang</button>
                    <?php endif; ?>


                  </form>
                </div>
              <?php } ?>
            </div>
            <br>
            <div class="card border-primary">
             <div></div>  
             <div class="card-body ">
              
              <p>
               <?php echo $object->deskripsi; ?>
             </p>
           </div>
           
         </div>
         
       <?php } ?>


     </div>

   </div>

 </div>
</div>
<div id="onphpidLogin" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <!-- form login -->
        <form action="<?php echo base_url();?>Client/login" method="post">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required="" name="email" placeholder="Email" class="form-control" />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required="" name="password" placeholder="Password" class="form-control" />
          </div>
          <small>Belum punya akun ? <a href="" data-toggle="modal" data-target="#onphpidRegister" data-dismiss="modal" aria-label="Close">Daftar disini</a> </small>
          <table  width="800" align="center">
            <tr>
              <td>
                <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Batal</button>
                
              </td>
              <td>
                <button class="btn btn-primary" type="submit">Login</button>
                
              </td>

            </tr>
          </table>
          
        </form>
        <!-- end form login -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="onphpidRegister" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <!-- form login -->
        <form action="<?php echo base_url();?>Client/register" method="post">
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" required="" name="nama" placeholder="Nama Lengkap" class="form-control" /><div class="form_err"><?php echo $this->session->flashdata('nama_err') ?></div>
          </div>
          <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" required="" name="email" placeholder="Email" class="form-control" /><div class="form_err"><?php echo $this->session->flashdata('email_err') ?></div>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required="" name="password" placeholder="Password" class="form-control" /><div class="form_err"><?php echo $this->session->flashdata('pass_err') ?></div>
          </div>
          <small>Sudah punya akun ? <a href="" data-toggle="modal" data-target="#onphpidLogin" data-dismiss="modal" aria-label="Close">Login Disini</a></small>
          <table  width="800" align="center">
            <tr>
              <td>
                <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Batal</button>
                
              </td>
              <td>
                <button class="btn btn-success" type="submit">Daftar</button>
                
              </td>

            </tr>
          </table>
          
        </form>
        <!-- end form login -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="onphpidLogout" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <!-- form login -->
        <form action="<?php echo base_url();?>Client/logout">
          <h5>Apakah anda yakin ingin Logout ? </h5>
          <!-- end form login -->
        </div>
        <table width="740" align="center">
          <tr>
            <td> </td>
            <td>

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