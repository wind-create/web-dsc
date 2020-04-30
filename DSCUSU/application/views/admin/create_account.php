
<div class="col-sm-9">

    
    <a href="<?php echo base_url('index.php/page/home'); ?>"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
    <hr>

    <div class="row">
        <hr>

        <a href="<?php echo base_url('index.php/page/pengguna'); ?>"><strong><i class="glyphicon glyphicon-comment"></i> Pengguna</strong></a>

        <hr>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                
                <div class="card-body">
                    <div class="table-responsive">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/page/home'?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create User</li>
                            </ol>
                        </nav>
                    </div>
                    <form action="<?php echo base_url().'page/insert'; ?>" method="post">
                      <div class="form-group">
                        <label for="varchar">Nama </label>       
                        <input type="text" class="form-control" name="nama">      
                    </div>  
                    <div class="form-group">
                        <label for="varchar">Email </label>       
                        <input type="email" class="form-control" name="email">      
                    </div>  
                    <div class="form-group">
                        <label for="varchar">Password </label>       
                        <input type="text" class="form-control" name="password">      
                    </div>  
                    
                    <input style="margin:0px 25px;" type="submit" class="btn btn-success">
                    <input type="reset" class="btn btn-danger" value="Reset">
                </form>
            </div>
            
        </div>
    </div>
</div>
</div>
