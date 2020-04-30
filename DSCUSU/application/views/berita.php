  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/charts/chartist-bundle/chartist.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/charts/morris-bundle/morris.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/charts/c3charts/c3.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
  <div class="col-sm-9">

    
    <a href="<?php echo base_url('index.php/page/home'); ?>"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
    <hr>

    <div class="row">
        

        <hr>

        <a href="<?php echo base_url('page/create_blog'); ?>"><strong><i class="glyphicon glyphicon-comment"></i> Tambah Berita</strong></a>

        <hr>

        <div class="row">
            <div class="col-md-12">

             <div class="dashboard-wrapper">
                <div class="dashboard-ecommerce">
                    <div class="container-fluid dashboard-content ">
                       <div class="row">
                          <?php $no = 1; foreach($blog as $u) {?>
                            
                            <div class="col-md-8">
                                <div class="card mb-9">
                                   <a href="<?php echo base_url()?>page/view_blog/<?php echo $u->id?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $u->judul?></h5>
                                        <h5 class="card-title"><?php echo $u->penulis?></h5>
                                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $u->tgl_terbit?></h6>
                                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $u->deskripsi?></h6>
                                        <div class="row">
                                        </a>
                                    </div>
                                </div>
                                
                                <a href="<?php echo base_url()?>page/update_blog/<?php echo $u->id?>"><button type="button" class="btn btn-info">Edit</button></a>
                                <a href="<?php echo base_url()?>page/delete_blog/<?php echo $u->id?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                
                                <hr>
                            </div>
                        </div>
                        
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
