<!-- Main Content -->
<div class="main-content">
    <div class="row">
        <section class="section col-md-12">

            <!-- Alert -->
            <h4 class="alert alert-primary">History Request Kelas</h4>
            <!-- Alert -->

            <div class="section-body">
                <div class="card p-3">
                    <div class="p-4">
                        <div class="table-responsive">
                            <table id="example" class="table table-flush">

                                <!-- thead -->
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th scope="col">Nama Guru</th>
                                        <th scope="col">Mata Pelajaran</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Jumlah Siswa</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <!-- thead -->

                                <!-- tbody -->
                                <tbody>
                                    <?php
                                    foreach ($request as $r) {
                                        if ($r->id_siswa == $siswa['id']) {
                                    ?>
                                    <tr class="text-center">
                                        <th scope="row">
                                            <?php
                                                    foreach ($guru as $g) {
                                                        if ($g->nip == $r->nip) {
                                                            echo $g->nama;
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                        </th>
                                        <th scope="row">
                                            <?= $r->mata_pelajaran ?>
                                        </th>
                                        <th scope="row">
                                            <?= $r->kelas ?>
                                        </th>
                                        <th scope="row">
                                            <?= $r->jumlah ?>
                                        </th>
                                        <th scope="row">
                                            <?= $r->harga ?>
                                        </th>
                                        <th scope="row">
                                            <?php
                                                    if ($r->status == 0) {
                                                    ?>
                                            <span class="btn bg-danger text-white" style="border-radius: 5px">
                                                Belum Dilihat
                                            </span>
                                            <?php
                                                    } else {
                                                    ?>
                                            <span class="btn bg-success text-white style=" border-radius: 5px"">
                                                Dilihat
                                            </span>
                                            <?php
                                                    }
                                                    ?>
                                        </th>
                                    </tr>
                                    <?php
                                            // include('detail_guru.php');
                                        }
                                    }
                                    ?>

                                </tbody>
                                <!-- tbody -->

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if ($this->session->flashdata('req-kelas')) {
?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Request Kelas Berhasil',
    text: 'Silahkan Tunggu Konfirmasi Dari Pengajar Pilihan Anda'
});
</script>
<?php
}
?>