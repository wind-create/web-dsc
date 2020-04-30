 <?php  
 foreach ($blog as $object) {
  ?>
  <div class="col-sm-9">

    
    <a href="<?php echo base_url('index.php/page/home'); ?>"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
    
    <hr>

    <div class="row">
      

      <hr>

      <a href="<?php echo base_url('page/create_blog'); ?>"><strong><i class="glyphicon glyphicon-comment"></i> Tambah Berita</strong></a>
      <a href="<?php echo base_url()?>page/update_blog/<?php echo $object->id?>"><button type="button" class="btn btn-info">Edit</button></a>
      <a href="<?php echo base_url()?>page/delete_blog/<?php echo $object->id?>"><button type="button" class="btn btn-danger">Delete</button></a>
      <hr>
      
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h6><?php echo $object->judul; ?></h6>
              <span class="meta">Posted by <?php echo $object->penulis; ?>
              <a href="#">publish</a>
              on <?php echo $object->tgl_terbit; ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Post Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
         
          
          <input type="text" hidden name="id" value="<?php echo $object->id; ?>">
          <?php echo $object->isi; ?>
          

        <?php } ?>

      </div>
    </div>
  </div>

</div>
</div>
