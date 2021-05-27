<body>
<div class="container ml-6" style="color: black;">
  <h2>Data <?php echo $user['nama']?></h2>
  <div class="card md-6" style="width: 400px; color: black;">
    <div class="card-body">
      <h5 class="card-title"><?php echo $user['nama']?> </h5>
      <p class="card-text">Email : <?php echo $user['email']?> </p>
      <p class="card-text">Devisi : <?php echo $user['devisi']?> </p>
      <p class="card-text">Kelas : <?php echo $user['kelas']?> </p>

      <a href="<?php echo base_url('admin/index') ?>" class="card-link">Kembali ke Halaman Admin</a>
    </div>
  </div>
</div> 
</body>