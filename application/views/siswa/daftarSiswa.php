<!-- Daftar Kelas -->
<div class="modal fade" id="daftar<?= $k->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Daftar Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="post" action="<?= base_url('siswa/daftar_kelas'); ?>">
                        <div class="card mb-2">
                            <div class="card-header">
                                <figure class="course-thumbnail-go">
                                    <center>
                                        <img src="<?= base_url('assets/img/course/') . $k->avatar; ?>" alt=""
                                            style="max-width: 200px">
                                        <text class="course-title text-dark"
                                            style="font-weight: bold"><?= $k->nama; ?></text>
                                    </center>
                                </figure>
                            </div>
                        </div>
                        <?php
                        foreach ($guru as $g) {
                            if ($g->nip == $k->nip) {
                        ?>
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label class="control-label" style="position:relative; top:7px;">Nama Pengajar</label>
                            </div>
                            <div class="col-sm-1">
                                <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="<?= $g->nama ?>" readonly>
                            </div>
                        </div>
                        <?php
                            }
                        }
                        ?>
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label class="control-label" style="position:relative; top:7px;">Harga Kelas/bln</label>
                            </div>
                            <div class="col-sm-1">
                                <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="Rp. <?= $k->harga ?>,00-" readonly>
                            </div>
                        </div>

                        <input type="hidden" class="form-control" value="<?= $k->id ?>" name="id_kelas" id="id_kelas">
                        <input type="hidden" class="form-control" value="<?= $id ?>" name="id_siswa" id="id_siswa">

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label class="control-label" style="position:relative; top:7px;">Jadwal Kelas</label>
                            </div>
                            <div class="col-sm-1">
                                <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="<?= $k->jadwal ?>" readonly>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label class="control-label" style="position:relative; top:7px;">Jumlah Siswa</label>
                            </div>
                            <div class="col-sm-1">
                                <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="<?= $k->jumlah ?> Siswa" readonly>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="pl-3 pb-1">
                                <div class="text-header text-dark" style="font-weight: bold">METODE PEMBAYARAN :</div>
                            </div>
                            <div class="col-12">
                                <nav>
                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"
                                        style="background-color: #f3f3f3;">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                            href="#nav-home" role="tab" aria-controls="nav-home"
                                            aria-selected="true">ATM BRI</a>
                                    </div>
                                </nav>
                                <div class="tab-content text-dark" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="text-header">Contoh melalui atm BRI</div>
                                        <text>1. Pilih Menu Trasnsfer</text><br>
                                        <text>2. Pilih Tujuan BRI</text><br>
                                        <text>3. Masukkan No Rekening Tujuan - 382901016648530</text><br>
                                        <text>4. Masukkan Nominal Uang</text><br>
                                        <text>5. Transaksi Berhasil</text>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer mt-0" style="position:relative;">
                    <button type="submit" class="btn btn-block bg-info text-white">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Daftar Kelas -->

<!-- Bukti Pembayaran Upload -->
<div class="modal fade" id="bukti<?= $k->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Daftar Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="post" enctype="multipart/form-data" action="<?= base_url('siswa/upload_bukti'); ?>">
                        <input type="hidden" class="form-control" value="<?= $ks->id; ?>" name="id" id="id">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">File</label>
                            </div>
                            <div class="col-sm-1">
                                <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                            </div>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="file" id="file" required>
                            </div>
                        </div>
                </div>
                <div class="modal-footer mt-0" style="position:relative;">
                    <button type="submit" class="btn btn-block bg-info text-white">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bukti Pembayaran Upload -->