<!--================ Start footer Area  =================-->
<footer class="footer-area p_60">
    <div class="container">
        <div class="row">
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Tentang Kami</h6>
                    <ul class="list">
                        <li><a href="<?= base_url('home/tentang') ?>">Tentang RODA</a></li>
                        <li><a href="">Divisi RODA</a></li>
                        <li><a href="<?= base_url('home/kontak') ?>">Kontak RODA</a></li>
                        <li><a href="https://sman1-sda.sch.id/v1/">Website Resmi Sekolah</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Masuk - Sign in</h6>
                    <ul class="list">
                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Untuk Anggota</a></li>                        
                        <li><a href="<?= base_url('auth/login_admin')?>">Untuk Admin</a></li> 
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Divisi</h6>
                    <ul class="list">
                        <li><a href="javaScript:void(0);">Robotics</a></li>
                        <li><a href="javaScript:void(0);">Web Developer</a></li>
                        <li><a href="javaScript:void(0);">Programmer</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Tentang Developer</h6>
                    <ul class="list">
                        <li>Web Developer adalah divisi yang bergerak di pengembangan website. Tugas dari Web Developer adalah membuat website untuk kegiatan oraganisasi/ekskul lain di sekolah, serta untuk mengembangkan website RODA.</li>
                    </ul>
                </div>
            </div>
            
        </div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-md-8 footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved 
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="col-lg-4 col-md-4 footer-social">
                <a href=""><i class="far fa-envelope"></i></a>
                <a href="https://www.instagram.com/roda_ofc/?hl=id"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->


<!-- Start Login Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-dark font-weight-bold" style="color:#212529 !important;" id="exampleModalCenterTitle">
                    Roda - Masuk Sekarang</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <br>
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="<?= base_url('assets/img/clip-waiting.png')?>" class="img-fluid img-responsive mx-auto " style="height: 350px;">
                        </div>
                        <div class=" col-md-6">
                            <form action="<?= base_url('auth/login') ?>" method="post">
                                <div class="form-group">
                                    <label class="label-font" for="
                                        exampleFormControlInput1">
                                        Email</label>
                                    <input type="text" value="" class="form-control" name="email" autocomplete="off" id="email" placeholder="Masukan email mu disini ..">
                                    <?php echo form_error('email', '<span class="text-danger">', '</span>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="label-font" for="
                                        exampleFormControlInput1">
                                        Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukan password mu disini ..">
                                    <?php echo form_error('password', '<span class="text-danger">', '</span>'); ?>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Ingat saya.
                                    </label>
                                </div>
                                <p class="terms">Dengan login anda
                                    menyetujui
                                    <i>privasi dan persyaratan ketentuan
                                        hukum kami </i> .
                                    belum punya akun? daftar <a href="<?= base_url('auth/daftar') ?>">
                                        disini.</a>
                                </p>
                                <button class="btn btn-block font-weight-bold" style="background-color: #2AA2F6;color:white;font-size:18px;">Login
                                    Sekarang!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login Modal -->


<script src="<?= base_url('assets/js/stellar.js')?>"></script>
<script src="<?= base_url('assets/vendors/lightbox/simpleLightbox.min.js')?>"></script>
<script src="<?= base_url('assets/vendors/nice-select/js/jquery.nice-select.min.js')?>"></script>
<script src="<?= base_url('assets/vendors/isotope/imagesloaded.pkgd.min.js')?>"></script>
<script src="<?= base_url('assets/vendors/isotope/isotope.pkgd.min.js')?>"></script>
<script src="<?= base_url('assets/vendors/owl-carousel/owl.carousel.min.js')?>"></script>
<script src="<?= base_url('assets/vendors/popup/jquery.magnific-popup.min.js')?>"></script>
<script src="<?= base_url('assets/js/jquery.ajaxchimp.min.js')?>"></script>
<script src="<?= base_url('assets/vendors/counter-up/jquery.waypoints.min.js')?>"></script>
<script src="<?= base_url('assets/vendors/counter-up/jquery.counterup.js')?>"></script>
<script src="<?= base_url('assets/js/mail-script.js')?>"></script>
<script src="<?= base_url('assets/js/theme.js')?>"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
    var animateButton = function(e) {
        e.preventDefault;
        e.target.classList.remove('animate');
        e.target.classList.add('animate');
        setTimeout(function() {
            e.target.classList.remove('animate');
        }, 700);
    };

    var bubblyButtons = document.getElementsByClassName("bubbly-button");

    for (var i = 0; i < bubblyButtons.length; i++) {
        bubblyButtons[i].addEventListener('click', animateButton, false);
    }
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>

</html>