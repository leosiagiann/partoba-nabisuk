<!-- Upload Materi Teori -->
<div class="modal fade" id="uploadteori<?= $m->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Materi Teori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="post" enctype="multipart/form-data" action="<?= base_url('guru/upload_teori'); ?>">
                        <input type="hidden" id="id" name="id" value="<?= $id_det; ?>">
                        <input type="hidden" id="id_materi" name="id_materi" value="<?= $m->id; ?>">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">File</label>
                            </div>
                            <div class="col-sm-1">
                                <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                            </div>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="file" id="file" required
                                    oninvalid="this.setCustomValidity('File Materi Tidak Boleh Kosong')"
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
<!-- Upload Materi Teori -->