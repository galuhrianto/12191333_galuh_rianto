<main>
<div id="page-content-container">
    <div class="container-fluid">
<br>
<div class="constraint">
  <div class="page-header">
    <h3>Tambah Anggota Baru</h3>
  </div>
  <?= validation_errors('<p style="color:red;">','</p>'); ?>
  <?php
    if($this->session->flashdata()){
      echo "<div class='alert alert-danger alert-message'>";
      echo $this->session->flashdata('alert');
      echo "</div>";
    } ?>
  <form action="<?php echo base_url().'admin/tambah_anggota_act' ?>" method="post" enctype="multipart/form-data"> 

    <div class="form-group">
      <label>ID Anggota</label>
      <input type="text" name="id_anggota" id="id_anggota" class="form-control">
      <?php echo form_error('id_anggota'); ?>
    </div>

    <div class="form-group">
      <label>Nama Anggota</label>
      <input type="text" name="nama_anggota" id="nama_anggota" class="form-control">
    </div>

    <div class="form-group">
      <label>Jenis Kelamin</label>
      <select name="gender" id="gender" class="form-control">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>

    <div class="form-group">
      <label>No Telepon</label>
      <input type="text" name="no_telp" id="no_telp" class="form-control">
    </div>

    <div class="form-group">
      <label>Alamat</label>
      <input type="text" name="alamat" id="alamat" class="form-control">
    </div>
    
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" id="email" class="form-control">
    </div>

<div class="form-group">
      <label>Password</label>
      <input type="text" name="password" id="password" class="form-control">
    </div>

    <div class="form-group">
      <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
  </div>
</form>
<br>
<br>
<br>
<br>
</div>

  </div>
  </div>
  </main>