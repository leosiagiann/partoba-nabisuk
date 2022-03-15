<!-- Main Content -->
<div class="main-content">
    <div class="row">
        <section class="section col-md-7">
            <h4 class="alert alert-primary">Guru</h4>
            <div class="section-body">
                <div class="card p-3">
                    <div class="table-responsive">
                        <table id="example" class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr class="text-center">
                                    <th scope="col">NIP</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">Jenis Kelamin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($guru as $g) {
                                ?>
                                <tr class="text-center clickable-row" data-href="#myModal<?= $g->nip ?>">
                                    <th scope="row">
                                        <?= $g->nip ?>
                                    </th>
                                    <th scope="row">
                                        <?= $g->nama ?>
                                    </th>
                                    <th scope="row">
                                        <?= $g->email ?>
                                    </th>
                                    <th scope="row">
                                        <?= $g->alamat ?>
                                    </th>
                                    <th scope="row">
                                        <?= $g->no_telp ?>
                                    </th>
                                    <th scope="row">
                                        <?= $g->jenis_kelamin ?>
                                    </th>
                                </tr>
                                <?php
                                    include('crud_guru.php');
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section class="section col-md-5">
            <h4 class="alert alert-primary">Tambah Guru</h4>
            <div class="section-body">
                <div class="card pr-3 pt-3">
                    <form method="post" action="<?= base_url('admin/tambah_guru') ?>">
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-right">NIP <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-user" id="nip_"
                                    placeholder="NIP Guru" name="nip_" value="<?= set_value('nip_') ?>">
                                <?= form_error('nip_', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-right">Nama <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-user" id="nama_"
                                    placeholder="Nama Guru" name="nama_" value="<?= set_value('nama_') ?>">
                                <?= form_error('nama_', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-right">Email <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-user" id="email_"
                                    placeholder="Email" name="email_" value="<?= set_value('email_') ?>">
                                <?= form_error('email_', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-right">No Telepon <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-user" id="no_telp_"
                                    placeholder="No Telepon Guru" name="no_telp_" value="<?= set_value('no_telp_') ?>">
                                <?= form_error('no_telp_', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-right">Jenis Kelamin <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <select class="custom-select" name="j_kel" id="j_kel">
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label text-right"></label>
                            <div class="col-sm-8">
                                <button type="submit" name="submit" class="btn bg-success btn-lg text-light"><i
                                        class="fa fa-save"></i>
                                    Tambah</button>
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
<!-- End Main Content -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if ($this->session->flashdata('tambah-guru')) {
?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Admin',
    text: 'Berhasil Menambah Guru'
});
</script>
<?php
}
if ($this->session->flashdata('edit-guru')) {
?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Admin',
    text: 'Berhasil Mengubah Data Diri Guru'
});
</script>
<?php
}
if ($this->session->flashdata('hapus-guru')) {
?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Admin',
    text: 'Berhasil Menghapus Guru'
});
</script>
<?php
}
?>