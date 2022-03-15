<!-- Detail Kelas -->
<div class="modal fade" id="detail_<?= $k->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                    <form>
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
                                <input type="text" class="form-control" name="kelas" id="kelas"
                                    value="<?= $k->jadwal ?>" readonly>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Detail Kelas -->