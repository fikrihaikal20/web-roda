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
                        <li><a href="">Untuk Developer</a></li>
                        <li><a href="">Untuk Admin</a></li> 
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
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quaerat, alias eius, voluptate a voluptatibus doloribus eaque error adipisci libero ratione hic earum consectetur tempore exercitationem illum cumque quo officiis.</li>
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
                <a href=""><i class="fa fa-github"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->


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