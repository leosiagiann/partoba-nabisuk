<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/self/pb-1.css'); ?>">
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                    <h2 class="card-title" style="color: black;">Daftar Kelas Tersedia Partoba Nabisuk</h2>
                    <div class="row">
                        <div class="col-12 col-lg-11" style="margin: auto">
                            <div class="featured-courses courses-wrap">
                                <?php
                                $no = 1;
                                $number = 0;
                                foreach ($kelas as $k) {
                                    if ($k->status == 1) {
                                        if ($no == 1) {
                                ?>
                                <div class="row mx-m-25">
                                    <?php
                                        }
                                            ?>
                                    <!-- Main Course -->
                                    <div class="col-12 col-md-4 px-25">
                                        <div class="course-content">
                                            <!-- .course-thumbnail-go -->
                                            <figure class="course-thumbnail-go p-2">
                                                <img src="<?= base_url('assets/img/course/') . $k->avatar; ?>" alt="">
                                            </figure>
                                            <!-- .course-thumbnail-go -->
                                            <div class="course-content-wrap">
                                                <header class="entry-header">
                                                    <div class="row">
                                                        <?php
                                                                foreach ($kelas_siswa as $ks) {
                                                                    if ($ks->id_kelas == $k->id && $ks->id_siswa == $id && $ks->status == 0) {
                                                                ?>
                                                        <div class="col-5 pt-2">
                                                            <small>
                                                                <text class="text-dark" style="font-weight: bold">
                                                                    <?= $k->nama; ?>
                                                                </text>
                                                            </small>
                                                        </div>
                                                        <div class="col-7">
                                                            <a data-href="#bukti<?= $k->id; ?>" class="clickable-row">
                                                                <button class="btn btn-info">Pembayaran</button>
                                                            </a>
                                                        </div>
                                                        <?php
                                                                        $number = 1;
                                                                        break;
                                                                    } else if ($ks->id_kelas == $k->id && $ks->id_siswa == $id && $ks->status == 1) {
                                                                    ?>
                                                        <div class="col-7 pt-2">
                                                            <small>
                                                                <text class="text-dark" style="font-weight: bold">
                                                                    <?= $k->nama; ?>
                                                                </text>
                                                            </small>
                                                        </div>
                                                        <div class="col-5">
                                                            <span class="bg-warning btn text-light">
                                                                Waiting
                                                            </span>
                                                        </div>
                                                        <?php
                                                                        $number = 1;
                                                                        break;
                                                                    } else if ($ks->id_kelas == $k->id && $ks->id_siswa == $id && $ks->status == 2) {
                                                                    ?>
                                                        <div class="col-7 pt-2">
                                                            <small>
                                                                <text class="text-dark" style="font-weight: bold">
                                                                    <?= $k->nama; ?>
                                                                </text>
                                                            </small>
                                                        </div>
                                                        <div class="col-5">
                                                            <span class="bg-success btn text-light">
                                                                Terdaftar
                                                            </span>
                                                        </div>
                                                        <?php
                                                                        $number = 1;
                                                                        break;
                                                                    } else {
                                                                        $number = 0;
                                                                    }
                                                                }
                                                                if ($number == 0) {
                                                                    ?>
                                                        <div class="col-7 pt-2">
                                                            <small>
                                                                <text class="text-dark" style="font-weight: bold">
                                                                    <?= $k->nama; ?>
                                                                </text>
                                                            </small>
                                                        </div>
                                                        <div class="col-3">
                                                            <a data-href="#daftar<?= $k->id; ?>" class="clickable-row">
                                                                <button class="btn btn-info">Daftar</button>
                                                            </a>
                                                        </div><?php
                                                                        }
                                                                            ?>
                                                    </div>
                                                    <div class="entry-meta flex flex-wrap align-items-center">
                                                        <div class="course-author">
                                                            <text class="text-dark">
                                                                <?php
                                                                        foreach ($guru as $g) {
                                                                            if ($g->nip == $k->nip) {
                                                                                echo $g->nama;
                                                                            }
                                                                        }
                                                                        ?>
                                                            </text>
                                                        </div>
                                                        <small class="text-muted"><?= $k->nip ?></small>
                                                    </div>
                                                </header><!-- .entry-header -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Main Course -->
                                    <?php
                                            if ($no % 3 == 0) {
                                            ?>
                                </div>
                                <div class="row mx-m-25">
                                    <?php
                                            }
                                            $no++;
                                        }
                                        include('daftarSiswa.php');
                                    }
                                    ?>


                                </div><!-- .col -->

                            </div><!-- .row -->
                        </div>
                    </div>
                </div>
    </section>
</div>
</div>
</div>
<!-- End Main Content -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if ($this->session->flashdata('daftar-kelas')) {
?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Berhasil Mendaftar Kelas',
    text: 'Silahkan Lakukan Pembayaran Segera'
});
</script>
<?php
}
if ($this->session->flashdata('upload-bukti')) {
?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Kerja Bagus',
    text: 'Bukti Pembayaran Anda Telah di Upload'
});
</script>
<?php
}
?>