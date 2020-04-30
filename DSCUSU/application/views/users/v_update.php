<div class="tab-pane fade show active" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
  
  <div class="card">

    <br>
    <?php foreach($client as $fetch){ ?>
      <form action="<?php echo base_url();?>Client/update" method="POST">
        <table cellspacing="20" cellpadding="20">
          <th><h4>Data Pribadi</h4></th>
          <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" class="form-control " value="<?php echo $fetch->nama; ?>" name="nama"></td><div class="form_err"><?php echo $this->session->flashdata('nama_err') ?></div>
            
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea class="form-control " value="<?php echo $fetch->alamat; ?>" name="alamat"><?php echo $fetch->alamat; ?></textarea></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" class="form-control" value="<?php echo $fetch->email; ?>" name="email" readonly></td>
          </tr>
          <tr>
            <td>Nomor Handphone</td>
            <td>:</td>
            <td><input type="text" placeholder="Minimal 11 angka dan maksimal 13 angka" class="form-control" value="<?php echo $fetch->handphone; ?>" name="handphone"></td><div class="form_err"><?php echo $this->session->flashdata('handphone_err') ?></div>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php 
            $r = $fetch->jenis_kelamin; 
            if($r == "Laki-Laki"): ?>
             <input checked="" type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki<br>
             <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
             <?php elseif($r == "Perempuan"): ?>
              <input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki<br>
              <input checked="" type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
              <?php else: ?>
                <input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki<br>
                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
              <?php endif; ?>
            </td>
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $fetch->tanggal_lahir; ?>"></td>
          </tr>
          <tr>
            <td>Status</td>
            <td>:</td>
            <td>
             <select class="form-control" name="status">
              <option class="form-control" value="<?php echo $fetch->status; ?>"><?php echo $fetch->status; ?></option>
              <option class="form-control"  value="Siswa">Siswa</option>
              <option class="form-control"  value="Mahasiswa">Mahasiswa</option>
              <option class="form-control" value="Pekerja">Pekerja</option>
              <option class="form-control"  value="Lainnya">Lainnya</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Media Sosial</td>
          <td>:</td>
          <td><input type="text" placeholder="Pisahkan dengan koma" title="namaakun(sosial media)" class="form-control" name="media_sosial" value="<?php echo $fetch->media_sosial; ?>"></td>
        </tr>
        <th><h4>Keahlian</h4></th>
        <tr>
          <td>Tipe Keahlian</td>
          <td>:</td>
          <td>
            <select class="form-control" name="tipe_keahlian">
              <option class="form-control" value="<?php echo $fetch->tipe_keahlian; ?>"><?php echo $fetch->tipe_keahlian; ?></option>
              <option class="form-control"  value="Hipster" title="Design & User Experience dimana berperan penting dalam pembuatan desain">Hipster</option>
              <option class="form-control"  value="Hacker" title="Engineer & Developer dimana berperan penting dalam pembuatan dan pengembangan platform">Hacker</option>
              <option class="form-control"  value="Hustler" title="Marketing & Business dimana berperan penting dalam pemasaran">Hustler</option>
            </select>
          </td>

        </tr>
        <tr>
          <td>Keahlian</td>
          <td>:</td>
          <td><textarea class="form-control" name="keahlian"><?php echo $fetch->keahlian; ?></textarea></td>
        <?php } ?>
      </tr>
      <tr>
        <td><button class="btn btn-success" >Simpan Data</button></td>
      </tr>
    </table>
  </form>
</div>
</div>