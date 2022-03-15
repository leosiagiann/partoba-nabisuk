<!-- Bukti Pembayaran -->
<div class="modal fade" id="bukti<?= $k->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Bukti Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php
            if ($k->bukti != "none") {
            ?>
            <div class="modal-body">
                <form method="post" action="<?= base_url('admin/download_bukti'); ?>">
                    <input type="hidden" name="id" id="id" value="<?= $dk['id'] ?>" />
                    <input type="hidden" name="nama" id="nama" value="<?= $k->bukti; ?>" />
                    <div class="container-fluid">
                        <div class="card mb-2">
                            <div class="card-header">
                                <figure class="course-thumbnail-go">
                                    <center>
                                        <img src="<?= base_url('assets/upload/bukti/') . $k->bukti; ?>" alt="">
                                    </center>
                                </figure>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer" style="position:relative; top:-25px;">
                <div class="col-lg-12">
                    <center>
                        <div class="col-9">
                            <button type="submit" class="btn btn-info btn-block">Download</button>
                        </div>
                    </center>
                </div>
                </form>
            </div>
            <?php
            } else {
            ?>
            <div class="modal-body">
                <div class="container-fluid">
                    <p class="text-center text-dark" style="font-weight:bold !important">Ups... Bukti Pembayaran Belum
                        ada</p>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- Bukti Pembayaran  -->

<!-- Aktifkan Siswa -->
<div class="modal fade" id="aktif<?= $k->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Aktifkan Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="post" action="<?= base_url('admin/aktifkan'); ?>">
                        <input type="hidden" name="id" id="id" value="<?= $k->id ?>" />
                        <input type="hidden" name="id_kelas" id="id_kelas" value="<?= $dk['id'] ?>" />
                        <div class="text-center text-dark">
                            Apakah Anda Yakin Ingin <text style="font-weight: bold"
                                class="text-primary">Mengaktifkan</text> <?= $namaya_ ?>
                            Menjadi siswa di Kelas
                        </div>
                        <div class="text-center text-dark" style="font-weight: bold">
                            <?= $dk['nama'] ?> ( <?= $jk; ?> <?= $nama_g; ?> ) ???
                        </div>
                </div>
            </div>
            <div class="modal-footer" style="position:relative; top:-25px;">
                <button type="submit" class="btn bg-success text-white">Aktifkan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Aktifkan Siswa -->

<!-- Aktifkan Siswa -->
<div class="modal fade" id="nonaktif<?= $k->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Aktifkan Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="post" action="<?= base_url('admin/nonaktifkan'); ?>">
                        <input type="hidden" name="id" id="id" value="<?= $k->id ?>" />
                        <input type="hidden" name="id_kelas" id="id_kelas" value="<?= $dk['id'] ?>" />
                        <div class="text-center text-dark">
                            Apakah Anda Yakin Ingin <text style="font-weight: bold"
                                class="text-danger">Menonaktifkan</text> <?= $namaya_ ?>
                            Menjadi siswa di Kelas
                        </div>
                        <div class="text-center text-dark" style="font-weight: bold">
                            <?= $dk['nama'] ?> ( <?= $jk; ?> <?= $nama_g; ?> ) ???
                        </div>
                </div>
            </div>
            <div class="modal-footer" style="position:relative; top:-25px;">
                <button type="submit" class="btn btn-danger">Non Aktifkan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Aktifkan Siswa -->