    <!-- Start Lesson Cards -->
    <div class="container">
        <div class="row mt-4">
            <?php foreach ($tugas as $t) { ?>        
                <div class="col-md-12 w-150 mb-4">
                    <div class="card materi border-0">
                        <div class="card-body p-5">
                            <h1 class="card-title display-4"><?= $t->judul; ?></h1>
                            <hr style="background-color: white;">
                            <h5 class="card-text"><?= $t->divisi; ?></h5>
                            <p class="card-text"> Deskripsi tugas : <br> <?= $t->deskripsi; ?></p>
                            <a href="<?php echo site_url('tugas/detail_tugas/' . $t->id); ?>" class="btn btn-white">lihat detail</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- End Lesson Cards -->