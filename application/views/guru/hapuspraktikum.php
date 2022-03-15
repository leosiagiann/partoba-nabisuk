<!-- Hapus Praktikum -->
<div class="modal fade" id="hapus<?= $u->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Hapus Materi Praktikum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="post" action="<?= base_url('guru/hapus_praktikum'); ?>">
                        <input type="hidden" name="id" id="id" value="<?= $u->id; ?>">
                        <input type="hidden" name="id_kelas" id="id_kelas" value="<?= $id_det; ?>">
                        <p class="text-center text-dark">Apakah anda yakin ingin menghapus File <?= $u->file ?> ???</p>
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
<!-- Hapus Praktikum -->