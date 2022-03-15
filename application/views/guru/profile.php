<style type="text/css">
#change_profil:disabled {
    cursor: not-allowed;
    background-color: green !important;
}

#change_pw:disabled {
    cursor: not-allowed;
    background-color: green !important;
}
</style>
<div class="main-content">
    <div class="row">
        <section class="section col-md-7">
            <h4 class="alert alert-primary">Data Diri</h4>
            <div class="section-body">
                <div class="card p-3">
                    <p class="text-center">
                        <img src="<?= base_url('assets/upload/guru/thumbs/' . $foto);
                                    ?>" style="max-width: 150px; height: auto;" class="img img-circle img-thumbnail">
                    </p>
                    <form method="post" enctype="multipart/form-data" action="<?= base_url('guru/profile') ?>">
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-right">NIP <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                    value="<?= $nip ?>" readonly disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-right">Email <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                    value="<?= $email ?>" readonly disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-right">Nama Guru <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Guru"
                                    value="<?= $nama ?>" onkeyup="s_()">
                                <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                                <input type="hidden" name="nama_" id="nama_" value="<?= $nama ?>" onkeyup="s_()">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-right">Alamat Guru <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" id="alamat" class="form-control"
                                    placeholder="Alamat Guru" value="<?= $alamat ?>" onkeyup="s_()">
                                <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
                                <input type="hidden" name="alamat_" id="alamat_" value="<?= $alamat ?>" onkeyup="s_()">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-right">Nomor Telepon <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telp" id="no_telp" class="form-control"
                                    placeholder="Nomor Telepon" value="<?= $no_telp ?>" onkeyup="s_()">
                                <?= form_error('no_telp', '<small class="text-danger">', '</small>') ?>
                                <input type="hidden" name="no_telp_" id="no_telp_" value="<?= $no_telp ?>"
                                    onkeyup="s_()">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-right">Ganti Foto <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="file" name="foto" id="foto" class="form-control" onchange="ss_()">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-right"></label>
                            <div class="col-sm-9">
                                <button type="submit" name="submit" class="btn bg-success btn-lg text-light"
                                    id="change_profil" disabled><i class="fa fa-save"></i>
                                    Update</button>
                                <button type="reset" class="btn btn-danger btn-lg"><i class="fa fa-cut"></i>
                                    Reset</button>
                            </div>
                        </div>
                    </form>
                    <?= $this->session->userdata('elseya') ?>
                </div>
            </div>
        </section>
        <section class="section col-md-5">
            <h4 class="alert alert-primary">Password</h4>
            <div class="section-body">
                <div class="card p-3">
                    <form method="post" action="<?= base_url('guru/gantipassword') ?>">
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-right">Password lama<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="password" name="password3" id="password3" class="form-control"
                                    placeholder="Password Lama" onkeyup="s()">
                                <?= form_error('password3', '<small class="text-danger">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-right">Password baru<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="password" name="password1" id="password1" class="form-control"
                                    placeholder="Password baru" onkeyup="s()">
                                <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-right"></label>
                            <div class="col-sm-8">
                                <button type="submit" name="submit" class="btn bg-success btn-lg text-light"
                                    id="change_pw" disabled><i class="fa fa-save"></i>
                                    Update</button>
                                <button type="reset" name="reset" class="btn btn-danger btn-lg"><i
                                        class="fa fa-cut"></i>
                                    Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="<?= base_url('assets/js/self/pf-2.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if ($this->session->flashdata('edit-password-guru-failed')) {
?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Ups... Gagal',
    text: 'Password Lama Anda Tidak Sesuai'
});
</script>
<?php
}
if ($this->session->flashdata('edit-password-guru')) {
?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Yeay... Berhasil',
    text: 'Password Lama Anda Sudah Diubah'
});
</script>
<?php
}
if ($this->session->flashdata('edit-profil-guru')) {
?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Yeay... Berhasil',
    text: 'Data Diri Anda Sudah Diubah'
});
</script>
<?php
}
?>