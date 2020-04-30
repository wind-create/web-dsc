

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
            <div class="form-group">
                <form id="postForm" action="<?php echo base_url().'page/Create' ?>" method="POST" enctype="multipart/form-data" onsubmit="return postForm()">
                    <div class="panel panel-default">
                        <div class="panel-body">    
                            <div class="form-group">
                                <label>judul</label>
                                <input type="text" class="form-control" name="judul">
                            </div>
                            
                            <div class="form-group">
                                <label>penulis</label>
                                <input type="text" class="form-control" name="penulis">
                            </div>
                            
                            <div class="form-group">
                                <label>Tanggal Terbit</label>
                                <input type="date" name="tgl_terbit" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <br>
                                <textarea id="content1" type="textarea" name="deskripsi" rows="10" cols="100%"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Isi</label>
                                <br>
                                <textarea id="content2" name="isi" rows="10" cols="100%"></textarea>
                            </div>
                            
                            <br/>
                        </div>
                        <div class="form_group">
                            <input type="submit" value="Simpan" class="btn btn-primary btn-block">
                        </div>
                    </div>
                    
                </form>

            </div>
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
