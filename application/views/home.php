<?php if(isset($_SESSION['status'])) {
    ?>
    <div class="alert alert-success" role="alert">
        Registered Succesfully
    </div>
    <?php
    unset($_SESSION['status']);
}?> 
    <!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h3 data-aos="fade-up" data-aos-duration="1600">Welcome To <br/> Robotika Smanisda</h3>
                <p data-aos="fade-up" data-aos-duration="1900">Bergabunglah dengan kami untuk membuat sebuah inovasi di dunia modern!<br/>Di sini kita akan mempelajari tiga keahlian, yaitu Robotics, Programming, dan Web Developer.<br/>Ketiga skill tersebut sangat dibutuhkan di era digital saat ini, maka dari itu jangan sampai melewatkan kesempatan yang ada!</p>
                <a data-aos="fade-up" data-aos-duration="2000" class="main_btn" href="<?= base_url('auth/daftar') ?>">Bergabung Sekarang <span class="lnr lnr-arrow-right"></span></a>
            </div>
        </div>
    </div>
</section>
<!-- ================End Home Banner Area ================= -->

<!--================Finance Area =================-->
<section class="finance_area">
    <div class="container">
        <div class="finance_inner row justify-content-center">        
            <div class="col-lg-3 col-sm-6">
                <div class="finance_item">
                    <div data-aos="fade-right" data-aos-duration="1800" class="media">
                        <div class="d-flex">
                            <i class="lnr lnr-code"></i>
                        </div>
                        <div class="media-body">
                            <h5>Web <br> Developer</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-right" data-aos-duration="2000" class="col-lg-3 col-sm-6">
                <div class="finance_item">
                    <div class="media">
                        <div class="d-flex">
                            <i class="lnr lnr-cog"></i>
                        </div>
                        <div class="media-body">
                            <h5>Robotics</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-right" data-aos-duration="2200" class="col-lg-3 col-sm-6">
                <div class="finance_item">
                    <div class="media">
                        <div class="d-flex">
                            <i class="lnr lnr-laptop"></i>
                        </div>
                        <div class="media-body">
                            <h5>Programming</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Finance Area =================-->

<!--================ Illustrations Area =================-->
<section class="learnify-for-indonesia p_20">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <img data-aos="fade-up" data-aos-duration="1800" src="assets/img/illustrations/tech.svg" alt="" srcset="" style="width: 100%;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="main_title">
                    <h2 data-aos="fade-up" data-aos-duration="2000">Robotika Smanisda</h2>
                    <p data-aos="fade-up" data-aos-duration="2200">Robotika Smanisda atau yang biasa dikenal sebagai RODA adalah salah satu ekstrakurikuler di SMA Negeri 1 Sidoarjo yang bergerak di bidang teknologi dan informatika. Selain bidang robotika, RODA juga berupaya menekuni bidang pemrograman sehingga para anggota dapat mengembangkan program seperti startup, website, dan aplikasi sederhana yang dapat berguna bagi lingkungan masyarakat.</p>
                    <a href="<?= base_url('Home/tentang') ?>"><button data-aos="fade-up" data-aos-duration="2400" class="bubbly-button">Lihat selengkapnya <span class="lnr lnr-arrow-right"></span></button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Illustrations Area =================-->

<!--================Courses Area =================-->
        <section class="courses_area p_40 mb-5">
            <div class="container">
                <div class="main_title">
                    <h2 data-aos="fade-up" data-aos-duration="1600">Divisi</h2>
                    <p data-aos="fade-up" data-aos-duration="1800">Roda memiliki tiga divisi yaitu Robotics, Programming, dan Web Developer yang mana ketiganya akan dipelajari bersama. Kalian dapat memilih dari tiga divisi tersebut untuk lebih mendalaminya.</p>
                </div>
                <div class="row courses_inner">
                    <div class="col-lg-4">
                        <div class="courses_item" data-aos="fade-right" data-aos-duration="1800">
                            <img src="assets/img/courses/webdev.jpg" alt="" style="width: 100%;">
                            <div class="hover_text">                                
                                <a href="javaScript:void(0);">
                                    <h4>Web Developer</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-users"></i>5</a></li>                                    
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="courses_item" data-aos="fade-up" data-aos-duration="1800">
                            <img src="assets/img/courses/robotic.jpg" alt="" style="width: 100%;">
                            <div class="hover_text">                                
                                <a href="javaScript:void(0);">
                                    <h4>Robotic</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-users"></i> 4</a></li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="courses_item" data-aos="fade-left" data-aos-duration="1800">
                            <img src="assets/img/courses/programming.jpg" alt="" style="width: 100%;">
                            <div class="hover_text">                            
                                <a href="javaScript:void(0);">
                                    <h4>Programming</h4>
                                </a>
                                <ul class="list">
                                    <li><a href="#"><i class="lnr lnr-users"></i> 5</a></li>                                    
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--================End Courses Area =================-->




