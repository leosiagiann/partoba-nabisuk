<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/self/pb-1.css'); ?>">
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                    <h2 class="card-title" style="color: black;">Request Saya</h2>
                    <div class="row">
                        <div class="col-12 col-lg-11" style="margin: auto">
                            <div class="featured-courses courses-wrap">
                                <?php
                                $no = 1;
                                foreach ($request as $r) {
                                    $foto_siswa = "";
                                    $nama_siswa = "";
                                    if ($r->nip == $saya['nip'] && $r->status != 2) {
                                        foreach ($allsiswa as $s) {
                                            if ($s->id == $r->id_siswa) {
                                                $foto_siswa = $s->foto;
                                                $nama_siswa = $s->nama;
                                                break;
                                            }
                                        }
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
                                                <a href="<?= base_url('guru/request_detail/') . $r->id; ?>"><img
                                                        src="<?= base_url('assets/upload/siswa/') . $foto_siswa; ?>"
                                                        alt=""></a>
                                            </figure>
                                            <!-- .course-thumbnail-go -->
                                            <div class="course-content-wrap">
                                                <header class="entry-header">
                                                    <h2 class="entry-title"><text class="text-dark">Request Oleh</text>
                                                    </h2>
                                                    <div class="entry-meta flex flex-wrap align-items-center">
                                                        <div class="course-author">
                                                            <text class="text-dark">
                                                                <?= $nama_siswa ?>
                                                            </text>
                                                        </div>
                                                    </div>
                                                    <?php
                                                            if ($r->status == 0) {
                                                            ?>
                                                    <small class="text-danger">Belum dilihat</small>
                                                    <?php
                                                            } else {
                                                            ?>
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <small class="text-success">Sudah dilihat <i
                                                                    class="fas fa-check-circle"></i></small>
                                                        </div>
                                                        <div class="col-3" style="margin-top: -6px !important">
                                                            <a href="<?= base_url('guru/hapusreq/') . $r->id ?>">
                                                                <button class="btn btn-danger">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php
                                                            }
                                                            ?>
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
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</div>
</div>
</div>
<!-- End Main Content -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if ($this->session->flashdata('hapus-request')) {
?>
<script>
swal({
    title: "Request Kelas Offline Telah Dihapus",
    icon: "success",
    button: "ok"
});
</script>
<?php
}
?>