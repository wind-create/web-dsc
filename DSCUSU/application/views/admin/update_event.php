

<div class="col-sm-9">

  
  <a href="<?php echo base_url('index.php/page/home'); ?>"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
  <hr>

  <div class="row">

    <hr>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="table-responsive">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/page/home'?>" class="breadcrumb-link">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update Event</li>
          </ol>
        </nav>
      </div>
      <?php  
      foreach ($event as $object) {
        ?>

        <div class="form-group">
         <form id="postForm" action="<?php echo base_url().'page/event_update' ?>" method="POST" enctype="multipart/form-data" onsubmit="return postForm()">
          <div class="panel panel-default">
            <div class="panel-body">    
              <div class="form-group">
                <label>Nama Event</label>
                <input type="text" hidden name="id_event" value="<?php echo $object->id_event; ?>">
                <input type="text" class="form-control" name="nama_event"value="<?php echo $object->nama_event; ?>">
              </div>
              
              <div class="form-group">
                <label>Tempat</label>
                <input type="text" class="form-control" name="tempat" value="<?php echo $object->tempat; ?>">
              </div>
              
              <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" value="<?php echo $object->tanggal; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label>Kursi</label>
                <input type="number" name="kursi" value="<?php echo $object->kursi; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label>Poster</label>
                <input type="file" name="poster" class="form-control" value="<?php echo $object->poster; ?>">
              </div>
              <div class="form-group">
                <label>Sertifikat</label>
                <input type="file" name="sertifikat" class="form-control" value="<?php echo $object->sertifikat; ?>">
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <br>
                <textarea id="content2" name="deskripsi" value="<?php echo $object->deskripsi; ?>" rows="10" cols="75%"><?php echo $object->deskripsi; ?></textarea>
              </div>
              
              
              <br/>
            </div>
            <div class="form_group">
              <input type="submit" value="Simpan" class="btn btn-primary btn-block">
            </div>
          </div>
        </form>
      </div>
    <?php } ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#content1').summernote({
          height: "300px",
          styleWithSpan: false
        });
        $('#content2').summernote({
          height: "300px",
          styleWithSpan: false
        });
      }); 
    </script>
    
  </div>
</div>
</div>

