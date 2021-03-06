<h2 style="margin-top: 0;">
    <small>Selamat datang</small>
    <br />
    <?php echo $this->session->userdata('nama') ?>
</h2>
<hr />

<div class="form-group">
    <label>Role</label>
    <br /><?php echo ucwords($this->session->userdata('role')) ?>
</div>

<?php
// Cek role user
if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
    ?>
    <div class="table-responsive">
        <table class="table table-bordered table-hover" id="dataTable" >
            <thead>
              <tr>
                <th>No</th>
                <th>Login</th>
                <th>Activity</th>
                
            </tr>
        </thead>
        <tbody>
          <?php $no = 1; foreach($log  as $u) {?>
              <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $u->time?></td>
                <td><?php echo $u->log?></td>
                
            </tr>
        <?php } ?>
    </tbody>
</table>

<label>Hak Akses</label>
<br />
<ol style="margin-left: -25px;">
    <li>
        Akses menu home. Aksi yang diperbolehkan : Read
    </li>
    <li>
        Akses menu event. Aksi yang diperbolehkan : Create, Read, Update, Delete
    </li>
    <li>
        Akses menu berita. Aksi yang diperbolehkan : Create, Read, Update, Delete
    </li>
    <li>
        Akses menu pengguna. Aksi yang diperbolehkan : Create, Read, Update, Delete
    </li>
    <li>
        Akses menu staff. Aksi yang diperbolehkan : Create, Read, Update, Delete
    </li>
    
    <li>
        Akses menu role. Aksi yang diperbolehkan : Read
    </li>
</ol>
</div>
<?php
}else{ // Jika role-nya operator
    ?>
    <div class="form-group">
        <label>Hak Akses</label>
        <br />
        <ol style="margin-left: -25px;">
            <li>
                Akses menu home. Aksi yang diperbolehkan : Read
            </li>
            <li>
                Akses menu event. Aksi yang diperbolehkan : Create, Read, Update, Delete
            </li>
            <li>
                Akses menu berita. Aksi yang diperbolehkan : Read, Update, Delete
            </li>
            <li>
                Akses menu role. Aksi yang diperbolehkan : Read
            </li>
        </ol>
    </div>
    <?php
}
?>
