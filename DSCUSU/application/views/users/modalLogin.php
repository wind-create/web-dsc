<div id="onphpidLogin" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <!-- form login -->
        <form action="<?php echo base_url();?>Client/login" method="post">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required="" name="email" placeholder="Email" class="form-control" />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required="" name="password" placeholder="Password" class="form-control" />
          </div>
          <small>Belum punya akun ? <a href="" data-toggle="modal" data-target="#onphpidRegister" data-dismiss="modal" aria-label="Close">Daftar disini</a> </small>
          <table  width="800" align="center">
            <tr>
              <td>
                <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Batal</button>
                
              </td>
              <td>
                <button class="btn btn-primary" type="submit">Login</button>
                
              </td>

            </tr>
          </table>
          
        </form>
        <!-- end form login -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="onphpidRegister" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <!-- form login -->
        <form action="<?php echo base_url();?>Client/register" method="post">
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" required="" name="nama" placeholder="Nama Lengkap" class="form-control" /><div class="form_err"><?php echo $this->session->flashdata('nama_err') ?></div>
          </div>
          <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" required="" name="email" placeholder="Contoh: saya@domain.id" class="form-control" /><div class="form_err"><?php echo $this->session->flashdata('email_err') ?></div>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required="" name="password" placeholder="Isi 8 sampai 16 karakter" class="form-control" /><div class="form_err"><?php echo $this->session->flashdata('pass_err') ?></div>
          </div>
          <small>Sudah punya akun ? <a href="" data-toggle="modal" data-target="#onphpidLogin" data-dismiss="modal" aria-label="Close">Login Disini</a></small>
          <table  width="800" align="center">
            <tr>
              <td>
                <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Batal</button>
                
              </td>
              <td>
                <button class="btn btn-success" type="submit">Daftar</button>
                
              </td>

            </tr>
          </table>
          
        </form>
        <!-- end form login -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="onphpidLogout" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <!-- form login -->
        <form action="<?php echo base_url();?>Client/logout">
          <h5>Apakah anda yakin ingin Logout ? </h5>
          <!-- end form login -->
        </div>
        <table width="740" height="75" align="center">
          <tr>
            <td> </td>
            <td>

             <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Batal</button>
           </td>
           <td>
            <button align="right" class="btn btn-danger" type="submit">Ya</button>
          </td>
        </tr>
      </table>          
    </form>

  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
    </div><!-- /.modal -->