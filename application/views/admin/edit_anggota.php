<body>
<div class="container mt-3" style="color: black;">
  <div class="row">
    <div class="col-6">
      <h1 class="my-3">Edit Data</h1>
      <form action="" method="post">
        <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $user['nama'] ?>">
            <?php echo form_error('nama', '<span class="text-danger">', '</span>'); ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email'] ?>">
            <?php echo form_error('email', '<span class="text-danger">', '</span>'); ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="devisi" class="col-sm-2 col-form-label">Devisi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="devisi" name="devisi" value="<?php echo $user['devisi'] ?>">
            <?php echo form_error('devisi', '<span class="text-danger">', '</span>'); ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $user['kelas'] ?>">
            <?php echo form_error('kelas', '<span class="text-danger">', '</span>'); ?>
          </div>
        </div>
        <button type="submit" class="btn btn-success mb-3">Edit</button>
        <button class="btn btn-danger mb-3" href="<?php echo base_url('admin/index')?>">Kembali</button>
      </form>
    </div>
  </div>
</div> 
</body>