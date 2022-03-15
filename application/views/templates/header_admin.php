<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title; ?> - Partoba Nabisuk</title>
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
</head>

<!-- Cursor Clikable Table -->
<style type="text/css">
.clickable-row:hover {
    cursor: pointer;
}
</style>
<!-- Cursor Clikable Table -->

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
                                src="<?= base_url('assets/upload/admin/thumbs/') . $foto; ?> "
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block" style="font-size:15px;">
                                <?= $this->session->userdata('nama') ?>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Partoba Nabisuk</div>
                            <a href="<?= base_url('admin/profile') ?>" class="dropdown-item has-icon text-danger">
                                <i class="far fa-address-card"></i> Profile
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
                            <a href="<?= base_url('admin') ?>"
                                style="font-size: 30px;font-weight:900;font-family: 'Poppins', sans-serif;"
                                class="text-success text-center"><i style="font-size: 30px;"
                                    class="fas fa-chalkboard-teacher"></i> |
                                Admin</a>
                        </div>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= base_url('admin') ?>">TC</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header ">Dashboard</li>
                        <?php if ($title == "Dashboard") : ?>
                        <li class="nav-item dropdown active">
                            <?php else : ?>
                        <li class="nav-item dropdown">
                            <?php endif; ?>
                            <a href="<?= base_url('admin') ?>" class="nav-link"><i
                                    class="fas fa-desktop"></i><span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">Management</li>


                        <?php if ($title == "Kelas") : ?>
                        <li class="nav-item dropdown active">
                            <?php else : ?>
                        <li class="nav-item dropdown">
                            <?php endif; ?>
                            <a href="<?= base_url('admin/kelas') ?>" class="nav-link"><i
                                    class="fas fa-chalkboard-teacher"></i><span>Daftar Kelas</span></a>
                        </li>


                        <?php if ($title == "Data Guru") : ?>
                        <li class="nav-item dropdown active">
                            <?php else : ?>
                        <li class="nav-item dropdown">
                            <?php endif; ?>
                            <a href="<?= base_url('admin/data_guru') ?>" class="nav-link"><i
                                    class="fas fa-users"></i><span>Daftar Guru</span></a>
                        </li>


                        <?php if ($title == "Data Kelas") : ?>
                        <li class="nav-item dropdown active">
                            <?php else : ?>
                        <li class="nav-item dropdown">
                            <?php endif; ?>
                            <a href="<?= base_url('admin/kelas_siswa') ?>" class="nav-link">
                                <i class="fas fa-user-graduate"></i><span>Data Siswa</span>
                            </a>
                        </li>


                        <?php if ($title == "Komentar") : ?>
                        <li class="nav-item dropdown active">
                            <?php else : ?>
                        <li class="nav-item dropdown">
                            <?php endif; ?>
                            <a href="<?= base_url('admin/komentar') ?>" class="nav-link"><i
                                    class="fas fa-bullhorn"></i><span>Komentar</span></a>
                        </li>
                </aside>
            </div>
            <!-- End Sidebar -->