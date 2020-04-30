
</div>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
           <div class="row">
              <?php $no = 1; foreach($blog as $u) {?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $u->judul?></h5>
                            <h5 class="card-title"><?php echo $u->penulis?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $u->tgl_terbit?></h6>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $u->deskripsi?></h6>
                            <div class="row">
                                <a href="<?php echo base_url()?>page/update_blog/<?php echo $u->id?>"><button type="button" class="btn btn-info">Edit</button></a>
                                <a href="<?php echo base_url()?>page/delete_blog/<?php echo $u->id?>"><button type="button" class="btn btn-danger">Delete</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            <?php } ?>
            
        </div>
    </div>
</tbody>
</table>
</div>
</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

</div>
</div>
