<!-- Tambah Materi Pertama Kali -->
<div class="modal fade" id="tambah_first" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Tambah Materi <?= $kelas_det['nama'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="post" action="<?= base_url('guru/add_materi'); ?>">
                        <input type="hidden" id="id_kelas" name="id_kelas" value="<?= $id_det; ?>">
                        <input type="hidden" id="id_guru" name="id_guru" value="<?= $saya['id']; ?>">
                        <input type="hidden" id="bab" name="bab" value="<?= $hit_bab; ?>">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Topik</label>
                            </div>
                            <div class="col-sm-1">
                                <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="topik" id="topik"
                                    placeholder="Topik Bab - 1">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer" style="position:relative; top:-25px;">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" name="tambah" class="btn bg-success text-white">Tambah</a>
                    </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Materi Pertama Kali -->

<!-- Tambah Materi Setelahnya -->
<div class="modal fade" id="tambahAfterFirst" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Tambah Materi <?= $kelas_det['nama'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="post" action="<?= base_url('guru/add_materi'); ?>">
                        <input type="hidden" id="id_kelas" name="id_kelas" value="<?= $id_det; ?>">
                        <input type="hidden" id="id_guru" name="id_guru" value="<?= $saya['id']; ?>">
                        <input type="hidden" id="bab" name="bab" value="<?= $hit_bab; ?>">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Topik</label>
                            </div>
                            <div class="col-sm-1">
                                <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="topik" id="topik"
                                    placeholder="Topik Bab - <?= $hit_bab; ?>" required
                                    oninvalid="this.setCustomValidity('Judul bab Harus Berisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer" style="position:relative; top:-25px;">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" name="tambah" class="btn bg-success text-white">Tambah</a>
                    </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Materi Setelahnya -->