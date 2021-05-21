
    <!-- Home Banner Area  -->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="kontak bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Pendaftaran Robotika Smanisda</h2>
                    <div class="page_link">
                        <a href="<?= base_url() ?>">Beranda</a>
                        <a href="<?= base_url('auth/daftar') ?>">Pendaftaran</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="registration"></div>
    </section>
    <!-- End Home Banner Area  -->

    <!-- Registration Form Area -->
    <div class="container mt-5 mb-5" id="registration">
        <div class="row bg-registration p-3">
            <div class="col-md-12 text-center">
                <p class="registration-title font-weight-bold display-4 mt-4" style="font-size: 50px;">
                    Pendaftaran</p>
                <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan dibawah ini </p>
                <hr>
            </div>
            <div class="col-md-6 mx-auto text-center">
                <div class="bodymovin" data-icon="<?= base_url('assets/json/registration-animation.json')?>"></div>
            </div>
            <div class="col-md-6 mx-auto my-auto mt--5">
                <form action="<?= base_url('auth/proses_daftar')?>" method="post">
                    <div class="form-group">
                        <label for="nama" class="label-font-register">Full Name</label>
                        <input type="text" autocomplete="off" class="form-control effect-9" name="nama" id="nama" value="<?php echo set_value('nama') ?>">
                        <?php echo form_error('nama', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="email" class="label-font-register">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?php echo set_value('email') ?>">
                        <?php echo form_error('email','<span class="text-danger">', '</span>'); ?>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password" class="label-font-register">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                            <?php echo form_error('password', '<span class="text-danger">', '</span>'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="retype_password" class="label-font-register">Retype Password</label>
                            <input type="password" class="form-control" name="retype_password" id="retype_password">
                            <?php echo form_error('retype_password', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkbox" type="checkbox" id="defaultCheck1" onchange="document.getElementById('btnsubmit').disabled = !this.checked;">
                        <label class=" form-check-label" for="defaultCheck1">
                            Saya setuju dan ingin melanjutkan
                        </label>
                    </div>
                    <p class="terms">Dengan mendaftar anda menyetujui <i>privasi dan persyaratan ketentuan
                            hukum kami </i>
                        baca selengkapnya <a href="#"> disini</a></p>
                    <button type="submit" name="submit" id="btnsubmit" disabled class="btn btn-block btn-modal btn-submit">Daftar
                        Sekarang!</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Registration Form Area -->

    