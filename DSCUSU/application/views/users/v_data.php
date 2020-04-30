<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
  
  <div class="card">

    <br>
    <?php foreach($client as $fetch){ ?>
      <table cellspacing="20" cellpadding="20">
        <th><h4>Data Pribadi</h4></th>
        <tr>
          <td>Nama Lengkap</td>
          <td>:</td>
          <td><?php echo $fetch->nama; ?></td>
          
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><?php echo $fetch->alamat; ?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td><?php echo $fetch->email; ?></td>
        </tr>
        <tr>
          <td>Nomor Handphone</td>
          <td>:</td>
          <td><?php echo $fetch->handphone; ?></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td><?php echo $fetch->jenis_kelamin; ?></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td>:</td>
          <td><?php echo $fetch->tanggal_lahir; ?></td>
        </tr>
        <tr>
          <td>Status</td>
          <td>:</td>
          <td><?php echo $fetch->status; ?></td>
        </tr>
        <tr>
          <td>Media Sosial</td>
          <td>:</td>
          <td><?php echo $fetch->media_sosial; ?></td>
        </tr>
        <th><h4>Keahlian</h4></th>
        <tr>
          <td>Tipe Keahlian</td>
          <td>:</td>
          <td><?php echo $fetch->tipe_keahlian; ?></td>

        </tr>
        <tr>
          <td>Keahlian</td>
          <td>:</td>
          <td><?php echo $fetch->keahlian; ?></td>
          
        </tr>
        <tr>
          <td>
          <?php } ?>
          <div class="list-group" id="list-tab" role="tablist">
            
            <a class="list-group-item list-group-item-action btn btn-primary" href="?page=update_data">Ubah Data</a>
          </div>
        </td>
      </tr>
    </table>
  </div>

</div>