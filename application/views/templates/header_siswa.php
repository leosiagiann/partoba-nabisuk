<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> <?= $title; ?> - Partoba Nabisuk</title>
    <!-- Image Icon -->
    <link href="<?= base_url('assets/img/logo/logo-home.png'); ?>" rel="icon">
    <!-- Image Icon -->

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Icons -->

    <!-- Main UI -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css">
    <!-- Main UI -->

    <!-- Tables -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>tableStyle/dataTables.bootstrap4.min.css">
    <!-- Tables -->

    <!-- Navbar CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/style.css">
    <!-- Navbar CSS -->

    <!-- Only For Dashboard Hero-->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/components.css">
    <!-- Only For Dashboard Hero-->

    <!-- Courses Main Content -->
    <!-- <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/course.css"> -->
    <!-- <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/course_responsive.css"> -->

    <!-- Fonts -->
    <!-- <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/fonts/font-awesome.css"> -->
</head>
<style type="text/css">
.clickable-row:hover {
    cursor: pointer;
}
</style>

<body>
    <!-- Start Sidebar -->
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class=" navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <?php
                    if (!$this->session->userdata('profil')) { ?>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" style="margin-bottom:4px !important; height: 35px; width: 30px"
                                src="<?= base_url('assets/upload/siswa/thumbs/') . $foto; ?> "
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block" style="font-size:15px;">
                                <?= $this->session->userdata('nama') ?>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Partoba Nabisuk</div>
                            <a href="<?= base_url('siswa/profile') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-user-cog"></i> Profile
                            </a>
                            <a href="<?= base_url('auth/logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand text-danger">
                        <div>
                            <a href="<?= base_url('siswa') ?>"
                                style="font-size: 30px;font-weight:900;font-family: 'Poppins', sans-serif;"
                                class="text-success text-center"><i style="font-size: 30px;"
                                    class="fas fa-graduation-cap"></i> |
                                Pelajar</a>
                        </div>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= base_url('siswa') ?>">SW</a>
                    </div>
                    <ul class="sidebar-menu">

                        <!-- Dashboard -->
                        <li class="menu-header ">Dashboard</li>
                        <?php if ($title == "Dashboard") : ?>
                        <li class="nav-item dropdown active">
                            <?php else : ?>
                        <li class="nav-item dropdown">
                            <?php endif; ?>
                            <a href="<?= base_url('siswa') ?>" class="nav-link"><i
                                    class="fas fa-desktop"></i><span>Dashboard</span></a>
                        </li>
                        <!-- Dashboard -->

                        <li class="menu-header">Management</li>

                        <?php
                            if ($title == "Kelas" || $title == "Daftar Kelas" || $title == "Request Kelas" || $title == "Histori Requset Kelas") {
                            ?>
                        <li class="nav-item dropdown active">
                            <?php
                            } else {
                                ?>
                        <li class="nav-item dropdown">
                            <?php
                            }
                                ?>

                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-chalkboard-teacher"></i>
                                <span>Kelas</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('siswa/kelas') ?>">Data Kelas</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('siswa/daftarKelas') ?>">Daftar Kelas</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('siswa/req_kelas') ?>">Request Kelas</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('siswa/history_kelas') ?>">History Request
                                        Kelas</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Guru -->
                        <?php if ($title == "Data Guru") : ?>
                        <li class="nav-item dropdown active">
                            <?php else : ?>
                        <li class="nav-item dropdown">
                            <?php endif; ?>
                            <a href="<?= base_url('siswa/data_guru') ?>" class="nav-link"><i
                                    class="fas fa-users"></i><span>Guru</span></a>
                        </li>
                        <!-- Guru -->

                        <!-- Materi -->
                        <?php if ($title == "Materi") : ?>
                        <li class="nav-item dropdown active">
                            <?php else : ?>
                        <li class="nav-item dropdown">
                            <?php endif; ?>
                            <a href="<?= base_url('siswa/materi') ?>" class="nav-link"><i
                                    class="fas fa-book"></i><span>Materi</span></a>
                        </li>
                        <!-- Materi -->
                    </ul>
                </aside>
            </div>
            <!-- End Sidebar -->