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

        <a href="<?php echo base_url('page/create_event'); ?>"><strong><i class="glyphicon glyphicon-comment"></i> Tambah Event</strong></a>

        <hr>

        <div class="row">
            <div class="col-md-12">

             <div class="dashboard-wrapper">
                <div class="dashboard-ecommerce">
                    <div class="container-fluid dashboard-content ">
                       <div class="row">
                          <?php $no = 1; foreach($event as $u) {?>
                            <div class="col-md-8">
                                <div class="card mb-5">
                                   <a href="<?php echo base_url()?>page/view_event/<?php echo $u->id_event?>">
                                    <div class="card-body">
                                        <img width="40%" height="50%" src="<?php echo base_url('aset/img/'.$u->poster) ?>">
                                        <h5 class="card-title"><?php echo $u->nama_event?></h5>                                
                                        <h6 class="card-subtitle mb-2 text-muted">Tempat: <?php echo $u->tempat?></h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Tanggal: <?php echo $u->tanggal?></h6>
                                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $u->deskripsi?></h6>
                                            <div class="row">
                                            </a>
                                        </div>

                                    </div>
                                    
                                    <a href="<?php echo base_url()?>page/update_event/<?php echo $u->id_event?>"><button type="button" class="btn btn-info">Edit</button></a>
                                    <a href="<?php echo base_url()?>page/delete_event/<?php echo $u->id_event?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                </div>
                                <hr>
                            </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
