<div class="col-sm-9">

    
    <a href="<?php echo base_url('index.php/page/home'); ?>"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
    <hr>

    <div class="row">
        

        <hr>

        <a href="<?php echo base_url('index.php/page/pengguna'); ?>"><strong><i class="glyphicon glyphicon-comment"></i> Pengguna</strong></a>

        <hr>

        <!-- DataTables Example -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                
                <div class="card-body">
                  
                    
                   
                  <div class="table-responsive">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/page/home'?>" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                        </ol>
                    </nav>
                </div>
                <?php  
                foreach ($admin as $object) {
                    ?>
                    <form action="<?php echo base_url().'page/updateAdmin'; ?>" method="post">
                        <tr><td><input type="text" hidden name="id" value="<?php echo $object->id; ?>"></td></tr>

                        <div class="form-group">
                            <tr><td><input type="text" hidden name="id" value="<?php echo $object->id; ?>"></td></tr>
                            <div class="form-group">
                                <tr><td><input type="text" hidden name="id" value="<?php echo $object->id; ?>"></td></tr>
                                <label for="varchar">Nama </label>       
                                <input type="text"  value="<?php echo $object->nama; ?>" class="form-control" name="nama">      
                            </div>  
                            <label for="varchar">Username </label>       
                            <input type="text"  value="<?php echo $object->username; ?>" class="form-control" name="username">      
                        </div>  
                        <div class="form-group">
                            <tr><td><input type="text" hidden name="id" value="<?php echo $object->id; ?>"></td></tr>
                            <label for="varchar">Password </label>       
                            <input type="text"  value="<?php echo $object->password; ?>" class="form-control" name="password">      
                        </div>  
                        <div class="form-group">
                            <label for="varchar">Role </label> <br>
                            <input type="radio" name="role"  value="admin" > admin<br>
                            <input type="radio" name="role"  value="operator"> operator<br>       
                            
                        </div>  
                        
                        <br>
                        <input style="margin:0px 25px;" type="submit" class="btn btn-success"value="Tambah">
                        
                        <input type="reset" class="btn btn-danger"  value="Reset">

                    </form>
                    
                <?php } ?>
            </div>
        </div>
        
    </div>
    
</div>
</div>
