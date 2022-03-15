<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Partoba Nabisuk - Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/logo/logo-home.png'); ?>" rel="icon">
    <!-- Favicons -->
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Google Fonts -->
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/icofont/icofont.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/theme/themify-icons.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/flaticon/flaticon.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/animate.css/animate.min.css'); ?>" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/css/style/style-1.css'); ?>" rel="stylesheet">
    <!-- Template Main CSS File -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <div class="logo">
                <img src="<?= base_url('assets/img/logo/logo-home2.png'); ?>" alt="" class="img-fluid">
            </div>
            <h1 class="logo m-auto" style="margin-left: 5px !important">
                <text style="color: #4682B4 !important">
                    Partoba Nabisuk
                </text>
            </h1>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li id="navindex"><a href="#intro">Beranda</a></li>
                    <li id="navtentang"><a href="#about">Tentang</a></li>
                    <li id="navpelajaran"><a href="#courses_">Pelajaran</a></li>
                    <li id="navtim"><a href="#team_us">Tim</a></li>
                    <li id="navacara"><a href="#acara">Acara</a></li>
                    <li id="navkontak"><a href="#ct">Kontak</a></li>
                </ul>
            </nav><!-- .nav-menu -->
            <a href="<?= base_url('auth/index_login'); ?>" class="get-started-btn">Login</a>
        </div>
    </header>
    <!-- End Header -->
    <!-- ======= Intro Section ======= -->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"
                        style="background-image: url(<?= base_url('/assets/img/slide/slide-1.jpg'); ?>)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate_animated animate_fadeInDown">Raih PTN bersama Partoba Nabisuk</h2>
                                <p class="animate_animated animate_fadeInUp">Daftar Sekarang</p>
                                <a href="<?= base_url("auth/register") ?>"
                                    class="btn-get-started scrollto animate_animated animate_fadeInUp">Info Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"
                        style="background-image: url(<?= base_url('/assets/img/slide/slide-2.jpg'); ?>)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate_animated animate_fadeInDown">Konsultasi 24 Jam dengan Pengajar
                                    terbaik</h2>
                                <p class="animate_animated animate_fadeInUp">Daftar Sekarang</p>
                                <a href="<?= base_url("auth/index_login") ?>"
                                    class="btn-get-started scrollto animate_animated animate_fadeInUp">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"
                        style="background-image: url(<?= base_url('/assets/img/slide/slide-4.jpg'); ?>)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate_animated animate_fadeInDown">Sedia Media Pembelajaran yang
                                    berkualitas</h2>
                                <p class="animate_animated animate_fadeInUp">Daftar Sekarang</p>
                                <a href="<?= base_url("auth/index_login") ?>"
                                    class="btn-get-started scrollto animate_animated animate_fadeInUp">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section><!-- End Intro Section -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section class="about">
            <div class="container" data-aos="fade-up" id="about">
                <div class="section-title">
                    <h2>Partoba Nabisuk</h2>
                    <p>Tentang Kami</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="<?= base_url('assets/img/Beranda/about-us.jpg'); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <p class="font-italic">
                            Sistem Informasi yang akan dibangun yaitu Sistem Informasi Layanan Les Private Tutoring.
                            Sistem Informasi ini merupakan Sistem Informasi
                            yang memberikan layanan mengenai Partoba Nabisuk.
                            Di dalam sistem ini tim pengembang memberikan layanan untuk melihat informasi kepada
                            pengguna.
                        </p>
                        <ul>
                            <li><i class="icofont-check-circled"></i> Visi, Meningkatkan Efektifitas Pembelajaran
                                Masyarakat Toba</li>
                            <li><i class="icofont-check-circled"></i> Misi, menyediakan dan memperluas akses terhadap
                                pendidikan Khususnya masyarakat Toba</li>
                            <li><i class="icofont-check-circled"></i> Tujuan, Agar Masyarakat Toba Dapat menjadi
                                generasi yang cerdas ditengah - tengah pandemi saat ini</li>
                        </ul>
                        <a href="<?= base_url('auth/index_login') ?>" class="learn-more-btn">Info lebih lanjut</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">
                <div class="row counters" style="padding-top: 50px">
                    <div class="col-lg-4 col-6 text-center">
                        <i class="icofont-group-students"></i>
                        <span data-toggle="counter-up">1232</span>
                        <p>Pelajar</p>
                    </div>
                    <div class="col-lg-4 col-6 text-center">
                        <i class="icofont-education"></i>
                        <span data-toggle="counter-up">64</span>
                        <p>Pelajaran</p>
                    </div>
                    <div class="col-lg-4 col-6 text-center">
                        <i class="icofont-teacher"></i>
                        <span data-toggle="counter-up">15</span>
                        <p>Pengajar</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counts Section -->

        <!--================ Start Feature Area =================-->
        <section class="feature_area section_gap_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="main_title">
                            <h2 class="mb-3">Layanan Fitur Website</h2>
                            <p>
                                Fitur-fitur layanan yang terdapat di program les online
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_feature text-center">
                            <i class="icofont-group-students" style="font-size : 40px;"></i>
                            <div class="desc">
                                <h4 class="mt-3 mb-2">Konsultasi dengan Pengajar Online</h4>
                                <p>
                                    Melakukan Konsultasi Dengan Pengajar Yang tersedia di Partoba Nabisuk!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_feature text-center">
                            <i class="icofont-book-alt" style="font-size : 40px;"></i>
                            <div class="desc">
                                <h4 class="mt-3 mb-2">Media Pembelajaran Berkualitas</h4>
                                <p>
                                    Menyediakan berbagai media Pembelajaran yang menarik dan berkualitas
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_feature text-center">
                            <i class="icofont-hat-alt" style="font-size : 40px;"></i>
                            <div class="desc">
                                <h4 class="mt-3 mb-2">Penyedia Fasilitas Terbaik & Gratis</h4>
                                <p>
                                    Menyediakan Fasilitas Terbaik dan Juga gratis untuk para pelajar di Partoba Nabisuk
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Feature Area =================-->

        <section class="feature_area section_gap_top courses"
            style="background-image: url(<?= base_url('/assets/img/background.jpeg'); ?>);">
            <div class=" container" id="courses_">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="main_title">
                            <h2 class="mb-3">Mata Pelajaran Terbaik</h2>
                            <p>
                                Daftar Mata Pelajaran Terbaik di Partoba Nabisuk
                            </p>
                        </div>
                    </div>
                    <div class="row courses_row">
                        <!-- Course -->
                        <div class="col-lg-4 course_col">
                            <div class="course">
                                <div class="course_image"><img
                                        src="<?= base_url('assets/img/pelajaran/course-1.jpg'); ?>" alt=""></div>
                                <div class="course_body">
                                    <h3 class="course_title"><a href="course.html">Matematika</a></h3>
                                    <div class="course_teacher">Bu Rusli Simajuntak</div>
                                </div>
                                <div class="course_footer">
                                    <div
                                        class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_info">
                                            <i class="icofont-graduate" aria-hidden="true"></i>
                                            <span>20 Student</span>
                                        </div>
                                        <div class="course_info">
                                            <i class="icofont-star" aria-hidden="true"></i>
                                            <span>5 Ratings</span>
                                        </div>
                                        <div class="course_price ml-auto">Rp.180.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course -->
                        <div class="col-lg-4 course_col">
                            <div class="course">
                                <div class="course_image"><img
                                        src="<?= base_url('assets/img/pelajaran/course-2.jpg'); ?>" alt=""></div>
                                <div class="course_body">
                                    <h3 class="course_title"><a href="course.html">Biologi </a></h3>
                                    <div class="course_teacher">Pak Martin</div>
                                </div>
                                <div class="course_footer">
                                    <div
                                        class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_info">
                                            <i class="icofont-graduate" aria-hidden="true"></i>
                                            <span>20 Student</span>
                                        </div>
                                        <div class="course_info">
                                            <i class="icofont-star" aria-hidden="true"></i>
                                            <span>5 Ratings</span>
                                        </div>
                                        <div class="course_price ml-auto">Rp.150.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course -->
                        <div class="col-lg-4 course_col">
                            <div class="course">
                                <div class="course_image"><img
                                        src="<?= base_url('assets/img/pelajaran/course-3.jpg'); ?>" alt=""></div>
                                <div class="course_body">
                                    <h3 class="course_title"><a href="course.html">Kimia</a></h3>
                                    <div class="course_teacher">Pak Charles</div>
                                </div>
                                <div class="course_footer">
                                    <div
                                        class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_info">
                                            <i class="icofont-graduate" aria-hidden="true"></i>
                                            <span>20 Student</span>
                                        </div>
                                        <div class="course_info">
                                            <i class="icofont-star" aria-hidden="true"></i>
                                            <span>5 Ratings</span>
                                        </div>
                                        <div class="course_price ml-auto">Rp.200.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="courses_button trans_200"><a href="#">view all courses</a></div>
                        </div>
                    </div>
                </div>
        </section>

        <!--================ Start Trainers Area =================-->
        <section class="trainer_area section_gap_top">
            <div class="container" id="team_us">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="main_title">
                            <h2 class="mb-3">Our Team</h2>
                            <p>
                                Daftar Anggota Pengembang Website Partoba Nabisuk
                            </p>
                        </div>
                    </div>
                    <div class="row justify-content-center d-flex align-items-center">
                        <!-- Leonardo -->
                        <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                            <center>
                                <div class="thumb">
                                    <img class="img-fluid" src="<?= base_url('assets/img/team/team-1.jpg'); ?>"
                                        alt="" />
                                </div>
                                <div class="meta-text text-sm-center">
                                    <h4>Leonardo Siagian</h4>
                                    <p class="designation">Full Stack Developer</p>
                                    <div class="mb-4">
                                        <p>
                                            Everyone has a different beginning
                                        </p>
                                    </div>
                                    <div class="align-items-center justify-content-center d-flex">
                                        <a href="#"><i class="icofont-facebook"></i></a>
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                        <a href="#"><i class="icofont-linkedin"></i></a>
                                        <a href="#"><i class="icofont-pinterest"></i></a>
                                    </div>
                                </div>
                            </center>
                        </div>
                        <!-- Leonardo -->
                        <!-- Anita -->
                        <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                            <center>
                                <div class="thumb">
                                    <img class="img-fluid" src="<?= base_url('assets/img/team/team-2.jpeg'); ?>"
                                        alt="" />
                                </div>
                                <div class="meta-text text-sm-center">
                                    <h4>Anita Siagian</h4>
                                    <p class="designation">Data Analyst</p>
                                    <div class="mb-4">
                                        <p>
                                            Must be a pro, Must be a pro, Must be a pro.
                                        </p>
                                    </div>
                                    <div class="align-items-center justify-content-center d-flex">
                                        <a href="#"><i class="icofont-facebook"></i></a>
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                        <a href="#"><i class="icofont-linkedin"></i></a>
                                        <a href="#"><i class="icofont-pinterest"></i></a>
                                    </div>
                                </div>
                            </center>
                        </div>
                        <!-- Anita -->
                        <!-- Pahala -->
                        <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                            <center>
                                <div class="thumb">
                                    <img class="img-fluid" src="<?= base_url('assets/img/team/team-3.jpeg'); ?>"
                                        alt="" />
                                </div>
                                <div class="meta-text text-sm-center">
                                    <h4>Pahala Picauly</h4>
                                    <p class="designation">Front End Developer</p>
                                    <div class="mb-4">
                                        <p>
                                            Just want to learn,Just want to learn
                                        </p>
                                    </div>
                                    <div class="align-items-center justify-content-center d-flex">
                                        <a href="#"><i class="icofont-facebook"></i></a>
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                        <a href="#"><i class="icofont-linkedin"></i></a>
                                        <a href="#"><i class="icofont-pinterest"></i></a>
                                    </div>
                                </div>
                            </center>
                        </div>
                        <!-- Pahala -->
                        <!-- Hotma -->
                        <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                            <center>
                                <div class="thumb">
                                    <img class="img-fluid" src="<?= base_url('assets/img/team/hotma.jpg'); ?>" alt="" />
                                </div>
                                <div class="meta-text text-sm-center">
                                    <h4>Hotma Aruan</h4>
                                    <p class="designation">UI/UX</p>
                                    <div class="mb-4">
                                        <p>
                                            Must be a pro, Must be a pro, Must be a pro.
                                        </p>
                                    </div>
                                    <div class="align-items-center justify-content-center d-flex">
                                        <a href="#"><i class="icofont-facebook"></i></a>
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                        <a href="#"><i class="icofont-linkedin"></i></a>
                                        <a href="#"><i class="icofont-pinterest"></i></a>
                                    </div>
                                </div>
                            </center>
                        </div>
                        <!-- Hotma -->
                    </div>
                </div>
        </section>
        <!--================ End Trainers Area =================-->

        <!--================ Start Event Area =================-->
        <section class="acara"
            style="background-image: url(<?= base_url('/assets/img/background.jpeg'); ?>); margin-bottom: 100px;">
            <div class="container" id="acara" data-aos="fade-up">
                <div class="section-title">
                    <h2>Partoba Nabisuk</h2>
                    <p>Jadwal Kegiatan</p>
                </div>
                <div class="row events_row">
                    <!-- Event -->
                    <div class="col-lg-4 event_col">
                        <div class="event event_left">
                            <div class="event_image"><img src="<?= base_url('assets/img/events/plant.jpg'); ?>" alt="">
                            </div>
                            <div class="event_body d-flex flex-row align-items-start justify-content-start">
                                <div class="event_date">
                                    <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                        <div class="event_day trans_200">21</div>
                                        <div class="event_month trans_200">Agustus</div>
                                    </div>
                                </div>
                                <div class="event_content">
                                    <div class="event_title"><a href="#">Medan International Go Plant Festival</a></div>
                                    <div class="event_info_container">
                                        <div class="event_info"><i class="icofont-clock-time"
                                                aria-hidden="true"></i><span>12.00 - 17.30</span></div>
                                        <div class="event_info"><i class="icofont-location-pin"
                                                aria-hidden="true"></i><span>21 Taman Avros Medan</span></div>
                                        <div class="event_text">
                                            <p>Medan International Go Plant Festival (MIGPF) 2021 adalah proses
                                                berkelanjutan dari kegiatan event tahunan
                                                yang sudah ber-
                                                langsung sejak dari tahun 2014 hingga tahun 2021 ini</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Event -->
                    <div class="col-lg-4 event_col">
                        <div class="event event_mid">
                            <div class="event_image"><img src="<?= base_url('assets/img/events/fotografi.jpg'); ?>"
                                    alt="">
                            </div>
                            <div class="event_body d-flex flex-row align-items-start justify-content-start">
                                <div class="event_date">
                                    <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                        <div class="event_day trans_200">23</div>
                                        <div class="event_month trans_200">Februari</div>
                                    </div>
                                </div>
                                <div class="event_content">
                                    <div class="event_title"><a href="#">Workshop Fotografi
                                            UKM Fotografi USU 2021</a></div>
                                    <div class="event_info_container">
                                        <div class="event_info"><i class="icofont-clock-time"
                                                aria-hidden="true"></i><span>09.00 - 17.30</span></div>
                                        <div class="event_info"><i class="icofont-location-pin"
                                                aria-hidden="true"></i><span>Aula Gedung LPPM USU</span></div>
                                        <div class="event_text">
                                            <p>Workshop* & Open Recruitment UKM Fotografi USU Angkatan XI,
                                                akan diselenggarakan pada tanggal
                                                23-24 Februari 2018 di Aula Gedung LPPM USU pada pukul 13.30
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Event -->
                    <div class="col-lg-4 event_col">
                        <div class="event event_right">
                            <div class="event_image"><img src="<?= base_url('assets/img/events/media.jpg'); ?>" alt="">
                            </div>
                            <div class="event_body d-flex flex-row align-items-start justify-content-start">
                                <div class="event_date">
                                    <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                        <div class="event_day trans_200">13</div>
                                        <div class="event_month trans_200">Juni</div>
                                    </div>
                                </div>
                                <div class="event_content">
                                    <div class="event_title"><a href="#">Pelatihan Media Pembelajaran Interaktif</a>
                                    </div>
                                    <div class="event_info_container">
                                        <div class="event_info"><i class="icofont-clock-time"
                                                aria-hidden="true"></i><span>09.00 - selesai</span></div>
                                        <div></div>
                                        <div class="event_info"><i class="icofont-meetup"
                                                aria-hidden="true"></i><span>Zoom meeting</span></div>
                                        <div class="event_text">
                                            <p>Pengen coba belajar menyusun media pembelajaran interaktif tapi bingung
                                                mulai dari mana??</p>
                                            <p>Pelajari cara menyusun media pembelajaran interaktif agar pembelajaran
                                                jadi lebih menyenangkan!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!--================ End Event Area =================-->

        <!--================ Start Contact Area =================-->
        <section class="feature_area section_gap_top courses"
            style=" background: url(<?= base_url('/assets/img/background.jpeg'); ?>); margin-top: -100px">
            <div class="container" id="ct">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="main_title">
                            <h2 class="mb-3">Contact</h2>
                        </div>
                    </div>
                    <div class="container">
                        <div class="maps" style="margin-bottom: 100px;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.366523911095!2d99.14621031468742!3d2.383498998262974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sInstitut%20Teknologi%20Del!5e0!3m2!1sid!2sid!4v1621959430988!5m2!1sid!2sid"
                                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="contact_info">
                                    <div class="info_item">
                                        <i class="icofont-home"></i>
                                        <h6>Institut Teknologi Del</h6>
                                        <p>Jl. P.I. Del, Sitoluama, Lagu Boti, Kabupaten Toba Samosir, Sumatera Utara
                                            22381</p>
                                    </div>
                                    <div class="info_item">
                                        <i class="icofont-headphone"></i>
                                        <h6><a href="#">+62632331234</a></h6>
                                        <p>Senin - Jumat 08.00 sampai 17.00</p>
                                    </div>
                                    <div class="info_item">
                                        <i class="icofont-email"></i>
                                        <h6><a href="#">support@colorlib.com</a></h6>
                                        <p>partobanabisuk@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <form class="row contact_form" action="<?= base_url('auth/komen') ?>" method="post">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="Masukkan Nama Anda" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Masukkan Email Anda" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="judul" name="judul"
                                                placeholder="Masukkan Judul Komentar" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" id="message" rows="1"
                                                placeholder="Masukkan Pesan Komentar" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button type="submit" value="submit" class="btn btn-primary">
                                            Send Message
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
        </section>
        <!--================ End Contact Area =================-->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>Partoba Nabisuk</h3>
                        <p>
                            Sistem Informasi yang akan dibangun yaitu Sistem Informasi Layanan Les Private Tutoring.
                            Sistem Informasi ini merupakan Sistem Informasi yang memberikan layanan mengenai Partoba
                            Nabisuk.
                            Di dalam sistem ini tim pengembang memberikan layanan untuk melihat informasi kepada
                            pengguna.
                        </p>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Masuk - Sign in</h4>
                        <ul>
                            <li><a href="<?= base_url('auth/index_login') ?>">Untuk Siswa</a></li>
                            <li><a href="<?= base_url('auth/index_login') ?>">Untuk Pengajar</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Menu </h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#intro">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#team_us">Tim</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#acara">Acara</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#ct">Kontak</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Email</h4>
                        <p>partobanabisuk@gmail.com
                        <p>
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Your Email">
                            <input type="submit" value="Subscribe" disabled>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-md-flex py-4">
            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>Partoba Nabisuk </span></strong> All Rights Reserved
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt bg-primary"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/jquery.easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/waypoints/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/counterup/counterup.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/owl.carousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/aos/aos.js'); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/js/main.js'); ?>"></script>
    <script type="text/javascript">
    $(document).ready(() => {
        $("#nav<?= $this->uri->segment(2); ?>").addClass('active')
    })
    </script>
</body>

</html>