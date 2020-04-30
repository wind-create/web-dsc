

<div class="col-sm-9">

    
    <a href="<?php echo base_url('index.php/page/home'); ?>"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
    <hr>

    <div class="row">

        <hr>

        <!-- DataTables Example -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
         
            
           
            <div class="table-responsive">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/page/home'?>" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Berita</li>
                    </ol>
                </nav>
            </div>
            <form id="postForm" action="<?php echo base_url().'page/Create_acara' ?>" method="POST" enctype="multipart/form-data" onsubmit="return postForm()">
                <div class="panel panel-default">
                    <div class="panel-body">    
                        <div class="form-group">
                            <label>Nama Event</label>
                            <input type="text" class="form-control" name="nama_event">
                        </div>
                        
                        <div class="form-group">
                            <label>Tempat</label>
                            <input type="text" class="form-control" name="tempat">
                        </div>
                        
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kursi</label>
                            <input type="number" name="kursi" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Poster</label>
                            <input type="file" name="poster" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Sertifikat</label>
                            <input type="file" name="sertifikat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <br>
                            <textarea id="content2" type="textarea" name="deskripsi" rows="10" cols="75%"></textarea>
                        </div>
                        
                        <br/>
                    </div>
                    <div class="form_group">
                        <input type="submit" value="Simpan" class="btn btn-primary btn-block">
                    </div>
                </div>
                
            </form>
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
<!--/col-span-9-->
</div>
