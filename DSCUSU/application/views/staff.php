

<div class="col-sm-9">


  <a href="<?php echo base_url('index.php/page/home'); ?>"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
  <hr>

  <div class="row">


    <hr>

    <a href="<?php echo base_url('index.php/page/staff'); ?>"><strong><i class="glyphicon glyphicon-comment"></i> Staff</strong></a>

    <hr>

    <div class="row">
      <div class="col-md-12">


       <!-- DataTables Example -->
       <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11">
        <div class="card">
          <div class="pull-right">
            <a href="<?php echo base_url('page/create_staff'); ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus">TAMBAH DATA</i></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/page/home'?>" class="breadcrumb-link">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data Staff</li>
                </ol>
              </nav>
            </div>  


            <div class="table-responsive">
              <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Role</th>
                    <th>Username</th>

                    
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; foreach($admin as $u) {?>
                    <tr>
                      <td><?php echo $no++?></td>
                      <td><?php echo $u->nama?></td>
                      <td><?php echo $u->role?></td>
                      <td><?php echo $u->username?></td>


                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          
        </div>
      </div>

    </div>
  </div>
</div>
</div>