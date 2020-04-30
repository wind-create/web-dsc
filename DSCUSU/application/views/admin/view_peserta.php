 <?php  
 foreach ($event as $object) {
  ?>
  <div class="col-sm-9">

    
    <a href="<?php echo base_url('index.php/page/home'); ?>"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
    
    <hr>

    <div class="row">
      

      <hr>

      
      <a href="<?php echo base_url()?>page/view_event/<?php echo $object->id_event?>"><button type="button" class="btn btn-danger">Back</button></a>
      
      <hr>
      <div class="row">
        

        

       <div class="col-md-9">
        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach($join3  as $u) {?>
              <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $u->nama?></td>
                <td><?php echo $u->email?></td>
                
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

<?php } ?>
