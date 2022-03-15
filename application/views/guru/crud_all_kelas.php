<!-- Edit Kelas -->
<div class="modal fade" id="edit<?= $k->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Edit Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form class="user" method="post" action="<?= base_url('guru/edit_kelas'); ?>">

                        <!-- Form Hidden ID -->
                        <input type="hidden" name="id" id="id" value="<?= $k->id; ?>" />
                        <!-- Form Hidden ID -->

                        <!-- Form Nama -->
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Nama</label>
                            </div>
                            <div class="col-sm-1">
                                <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Kelas"
                                    required oninvalid="this.setCustomValidity('Nama Kelas Tidak Boleh Kosong')"
                                    value="<?= $k->nama ?>">
                                <small class="text text-muted">
                                    Format Penulisan : Mata Pelajaran - Kelas
                                </small>
                            </div>
                        </div>
                        <!-- Form Nama -->

                        <!-- Form Select Mata Pelajaran -->
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Mapel</label>
                            </div>
                            <div class="col-sm-1">
                                <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                            </div>
                            <div class="col-sm-9">
                                <select class="custom-select" name="mapel" id="mapel">
                                    <option value="Matematika">Matematika</option>
                                    <?php if (strcmp($k->mata_pelajaran, "Biologi") == 0) { ?>
                                    <option value="Biologi" selected>Biologi</option>
                                    <?php } else { ?>
                                    <option value="Biologi">Biologi</option>
                                    <?php } ?>
                                    <?php if (strcmp($k->mata_pelajaran, "Fisika") == 0) { ?>
                                    <option value="Fisika" selected>Fisika</option>
                                    <?php } else { ?>
                                    <option value="Fisika">Fisika</option>
                                    <?php } ?>
                                    <?php if (strcmp($k->mata_pelajaran, "Kimia") == 0) { ?>
                                    <option value="Kimia" selected>Kimia</option>
                                    <?php } else { ?>
                                    <option value="Kimia">Kimia</option>
                                    <?php } ?>
                                    <?php if (strcmp($k->mata_pelajaran, "Geografi") == 0) { ?>
                                    <option value="Geografi" selected>Geografi</option>
                                    <?php } else { ?>
                                    <option value="Geografi">Geografi</option>
                                    <?php } ?>
                                    <?php if (strcmp($k->mata_pelajaran, "Ekonomi") == 0) { ?>
                                    <option value="Ekonomi" selected>Ekonomi</option>
                                    <?php } else { ?>
                                    <option value="Ekonomi">Ekonomi</option>
                                    <?php } ?>
                                    <?php if (strcmp($k->mata_pelajaran, "Sosiologi") == 0) { ?>
                                    <option value="Sosiologi" selected>Sosiologi</option>
                                    <?php } else { ?>
                                    <option value="Sosiologi">Sosiologi</option>
                                    <?php } ?>
                                    <?php if (strcmp($k->mata_pelajaran, "Bahasa Inggris") == 0) { ?>
                                    <option value="Bahasa Inggris" selected>Bahasa Inggris</option>
                                    <?php } else { ?>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!-- Form Select Mata Pelajaran -->

                        <!-- Form Select Kelas -->
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Kelas</label>
                            </div>
                            <div class="col-sm-1">
                                <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                            </div>
                            <div class="col-sm-9">
                                <select class="custom-select" name="kelas" id="kelas">
                                    <option value="7">7</option>
                                    <?php if ($k->kelas == 8) : ?>
                                    <option value="8" selected>8</option>
                                    <?php else : ?>
                                    <option value="8">8</option>
                                    <?php endif; ?>
                                    <?php if ($k->kelas == 9) : ?>
                                    <option value="9" selected>9</option>
                                    <?php else : ?>
                                    <option value="9">9</option>
                                    <?php endif; ?>
                                    <?php if ($k->kelas == 10) : ?>
                                    <option value="10" selected>10</option>
                                    <?php else : ?>
                                    <option value="10">10</option>
                                    <?php endif; ?>
                                    <?php if ($k->kelas == 11) : ?>
                                    <option value="11" selected>11</option>
                                    <?php else : ?>
                                    <option value="11">11</option>
                                    <?php endif; ?>
                                    <?php if ($k->kelas == 12) : ?>
                                    <option value="12" selected>12</option>
                                    <?php else : ?>
                                    <option value="12">12</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <!-- Form Select Kelas -->

                        <!-- Form Select Jadwal -->
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Jadwal</label>
                            </div>
                            <div class="col-sm-1">
                                <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                            </div>
                            <div class="col-sm-9">
                                <select class="custom-select" name="jadwal" id="jadwal">
                                    <option value="senin 15:00, selasa 15:00">Senin 15:00, Selasa 15:00</option>
                                    <?php if (strcmp($k->jadwal, "senin 15:00, rabu 15:00") == 0) : ?>
                                    <option value="senin 15:00, rabu 15:00" selected>Senin 15:00, Rabu 15:00
                                    </option>
                                    <?php else : ?>
                                    <option value="senin 15:00, rabu 15:00">Senin 15:00, Rabu 15:00</option>
                                    <?php endif; ?>
                                    <?php if (strcmp($k->jadwal, "selasa 15:00, rabu 15:00") == 0) : ?>
                                    <option value="selasa 15:00, rabu 15:00" selected>Selasa 15:00, Rabu 15:00
                                    </option>
                                    <?php else : ?>
                                    <option value="selasa 15:00, rabu 15:00">Selasa 15:00, Rabu 15:00</option>
                                    <?php endif; ?>
                                    <?php if (strcmp($k->jadwal, "sabtu 13:00, minggu 15:00") == 0) : ?>
                                    <option value="sabtu 13:00, minggu 15:00" selected>Sabtu 13:00, Minggu 15:00
                                    </option>
                                    <?php else : ?>
                                    <option value="sabtu 13:00, minggu 15:00">Sabtu 13:00, Minggu 15:00</option>
                                    <?php endif; ?>
                                    <?php if (strcmp($k->jadwal, "selasa 13:00, kamis 15:00") == 0) : ?>
                                    <option value="selasa 13:00, kamis 15:00" selected>Selasa 13:00, Kamis 15:00
                                    </option>
                                    <?php else : ?>
                                    <option value="selasa 13:00, kamis 15:00">Selasa 13:00, Kamis 15:00</option>
                                    <?php endif; ?>
                                    <?php if (strcmp($k->jadwal, "jumat 13:00, sabtu 15:00") == 0) : ?>
                                    <option value="jumat 13:00, sabtu 15:00" selected>Jumat 13:00, Sabtu 15:00
                                    </option>
                                    <?php else : ?>
                                    <option value="jumat 13:00, sabtu 15:00">Jumat 13:00, Sabtu 15:00</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <!-- Form Select Jadwal -->

                </div>
            </div>
            <div class="modal-footer" style="position:relative; top:-25px;">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" name="edit" class="btn bg-success text-white">Edit
                    Kelas</a>
                    </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Kelas -->

<!-- Detail Kelas -->
<div class="modal fade" id="detail<?= $k->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Detail Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <?php foreach ($guru as $g) {
                        if ($g->nip == $k->nip) { ?>
                    <div class="card bg-light">
                        <div class="row">
                            <div class="col-12">
                                <div class="p-3">
                                    <img src="<?= base_url('assets/img/course/' . $k->avatar);
                                                        ?>" class="img img-thumbnail" style="width: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                    } ?>

                    <div class="row form-group">
                        <small class="pl-3">
                            Nama Kelas <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $k->nama ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="row form-group">
                        <small class="pl-3">
                            Mata Pelajaran <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="mapel" id="mapel"
                                value="<?= $k->mata_pelajaran ?>" readonly>
                        </div>
                    </div>
                    <div class="row form-group">
                        <small class="pl-3">
                            Kelas <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="kelas" id="kelas" value="<?= $k->kelas ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="row form-group">
                        <small class="pl-3">
                            Jadwal Kelas <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="kelas" id="kelas" value="<?= $k->jadwal ?>"
                                readonly>
                        </div>
                    </div>
                    <div class="row form-group">
                        <small class="pl-3">
                            Harga Kelas <span class="text-danger">*</span>
                        </small>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="kelas" id="kelas"
                                value="Rp. <?= $k->harga ?>,00-" readonly>
                        </div>
                    </div>
                    <form method="post" enctype="multipart/form-data" action="<?= base_url('guru/ganti_avatar') ?>">
                        <input type="hidden" name="id" id="id" value="<?= $k->id ?>">
                        <div class="row form-group">
                            <small class="pl-3">
                                Avatar <span class="text-danger">*</span>
                            </small>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" name="avatar" id="avatar" required
                                    oninvalid="this.setCustomValidity('Masukkan gambar Avatar')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                        <div class=" row form-group">
                            <div class="col-sm-12">
                                <center>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-info btn-block">Ganti
                                            Avatar</button>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Detail Kelas -->

<!-- Hapus Kelas -->
<div class="modal fade" id="hapus<?= $k->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Hapus Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="post" action="<?= base_url('guru/hapus_kelas'); ?>">
                        <input type="hidden" name="id" id="id" value="<?= $k->id; ?>" />
                        <p class="text-center text-dark">Apakah anda yakin ingin menghapus kelas?</p>
                        <h2 class="text-center text-dark"><?= $k->nama ?></h2>
                </div>
            </div>
            <div class="modal-footer" style="position:relative; top:-25px;">
                <button type="submit" class="btn btn-danger">Hapus
                    Kelas</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Hapus Kelas -->