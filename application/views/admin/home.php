<!-- Menghitung Jumlah Kelas & Siswa -->
<?php
$jlh_kelas = 0;
$jlh_siswa = 0;
foreach ($kelas as $k) {
    if ($k->status == 1) {
        $jlh_kelas++;
    }
}
foreach ($siswa as $a) {
    if ($a->validOrNo == 1) {
        $jlh_siswa++;
    }
}
?>
<!-- Menghitung Jumlah Kelas & Siswa -->

<!-- Main Content -->
<div class="main-content">
    <section class="section">

        <!-- Header Section -->
        <div class="section-header">
            <h1 style="color: black">Dashboard</h1>
        </div>
        <!-- Header Section -->

        <div class="row">

            <!-- Icons -->

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
                            <?= $jlh_siswa; ?>
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
                            <?= $this->db->count_all('upload'); ?>
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

            <!-- Icons -->

            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title" style="color: black;">Hallo, Admin <?= $admin['nama'] ?> </h2>
                    <hr>
                    <p class="card-text">Cek sekarang juga guru dan siswa di Partoba Nabisuk, jangan sampai
                        ketinggalan
                        info.
                        Terima dan Tolak kelas yang didaftar guru, dan juga pembayaran untuk kelas dari
                        siswa.
                    </p>
                </div>
            </div>
            <!-- Card -->

            <!-- Hero Selamat Datang -->
            <div class="hero text-white hero-bg-image" data-background="<?= base_url('assets/siswa/bg.jpg') ?>">
                <div class="hero-inner">
                    <h1>Selamat Datang, !</h1>
                    <p class="lead">Partoba Nabisuk merupakan Aplikasi Berbasis Web yang dikembangkan oleh
                        mahasiswa/i IT Del yang bertujuan untuk menumbuhkembangkan kembali minat bakat
                        para siswa khususnya di Toba dapat belajar tambahan melalui les oleh guru-guru
                        yang memiliki potensi di Partoba Nabisuk!
                    </p>
                </div>
            </div>
            <!-- Hero Selamat Datang -->
    </section>
</div>
</div>
</div>
<!-- End Main Content -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if ($this->session->flashdata('login-admin')) {
?>
<script>
swal({
    title: "Selamat Datang Admin <?= $admin['nama'] ?>",
    text: "Anda Berhasil Login Sebagai Admin di Partoba Nabisuk",
    icon: "success",
    button: "ok"
});
</script>
<?php
}
?>