<!-- Menghitung Jumlah Kelas & Siswa -->
<?php
$jlh_kelas = 0;
$jlh_siswa = 0;
foreach ($kelas as $k) {
    if ($k->status == 1) {
        $jlh_kelas++;
    }
}
foreach ($allsiswa as $a) {
    if ($a->validOrNo == 1) {
        $jlh_siswa++;
    }
}
?>
<!-- Menghitung Jumlah Kelas & Siswa -->
<div class="main-content">
    <section class="section">

        <!-- Section Header -->
        <div class="section-header">
            <h1 style="color: black">Dashboard</h1>
        </div>
        <!-- Section Header -->

        <div class="row">

            <!-- Icon -->

            <!-- Siswa -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Siswa</h4>
                        </div>
                        <div class="card-body">
                            <?= $jlh_siswa ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Siswa -->

            <!-- Guru -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Guru</h4>
                        </div>
                        <div class="card-body">
                            <?= $this->db->count_all('guru'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Guru -->

            <!-- Materi -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Materi</h4>
                        </div>
                        <div class="card-body">
                            <?= $this->db->count_all('upload') ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Materi -->

            <!-- Kelas -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Kelas</h4>
                        </div>
                        <div class="card-body">
                            <?= $jlh_kelas ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kelas -->

            <!-- Icon -->

            <!-- Card Kelas Offline -->
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title" style="color: black;">Kelas Offline</h2>
                    <hr>
                    <p class="card-text">Kelas Offine adalah dimana kelas yang bersifat interaksi langsung antar siswa
                        dan guru. Dimana para siswa dapat
                        meminta request kelas offline yang maksimal terdiri atas 5 orang yang akan diadakan baik dirumah
                        siswa, guru, ataupun khusus tempat yang diminta
                        oleh siswa, sesuai tergantung permintaan siswa.
                    </p>
                    <a href="<?= base_url('siswa/req_kelas') ?>" class="btn bg-success text-light">Request</a>
                </div>
            </div>
            <!-- Card Kelas Offline -->

            <!-- Hero Selamat Datang -->
            <div class="">
                <div class="hero text-white hero-bg-image" data-background="<?= base_url('assets/siswa/bg.jpg') ?>">
                    <div class=" hero-inner">
                        <h1>Selamat Datang, <?= $siswa["nama"] ?>!</h1>
                        <p class="lead">Partoba Nabisuk merupakan Aplikasi Berbasis Web yang dikembangkan oleh
                            mahasiswa/i IT Del yang bertujuan untuk menumbuhkembangkan kembali minat bakat
                            para siswa khususnya di Toba dapat belajar tambahan melalui les oleh guru-guru
                            yang memiliki potensi di Partoba Nabisuk!
                        </p>
                    </div>
                </div>
            </div>
            <!-- Hero Selamat Datang -->
    </section>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if ($this->session->flashdata('login-siswa')) {
?>
<script>
swal({
    title: "Selamat Datang <?= $siswa['nama'] ?>",
    text: "Anda Berhasil Login Sebagai Pelajar",
    icon: "success",
    button: "ok"
});
</script>
<?php
}
?>