 <?php  
 foreach ($event as $object) {
    ?>
    <div class="col-sm-9">

        
        <a href="<?php echo base_url('index.php/page/home'); ?>"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
        
        <hr>

        <div class="row">
            

            <hr>

            <a href="<?php echo base_url('page/create_event'); ?>"><strong><i class="glyphicon glyphicon-comment"></i> Tambah Berita</strong></a>
            <a href="<?php echo base_url()?>page/update_event/<?php echo $object->id_event?>"><button type="button" class="btn btn-info">Edit</button></a>
            <a href="<?php echo base_url()?>page/delete_event/<?php echo $object->id_event?>"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="<?php echo base_url()?>page/peserta/<?php echo $object->id_event?>"><button type="button" class="btn btn-success">peserta</button></a>
            <hr>
            <div class="row">
              

                <!-- center left-->
                <div class="col-md-9">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Poster</h4></div>
                            <div class="panel-body">

                             <img width="40%" height="50%" src="<?php echo base_url('aset/img/'.$object->poster) ?>">
                         </div>
                     </div>
                     <!--/panel-body-->
                 </div>
                 <!--/panel-->

             </div>
             <!--/col-->
             <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><?php echo $object->nama_event; ?></h4></div>
                        <div class="panel-body">
                            <div class="alert alert-info">
                             <p>Tempat : <?php echo $object->tempat; ?></p>
                             <p>Tanggal : <?php echo $object->tanggal; ?></p> 
                         </div>
                         <p> <input type="text" hidden name="id_event" value="<?php echo $object->id_event; ?>">
                          <?php echo $object->deskripsi; ?></p>
                      </div>
                  </div>
                  
                  
              </div>
              <!--/col-span-6-->

              
          </div>
      </div>
  </div>

</div>
</div>

<?php } ?>
