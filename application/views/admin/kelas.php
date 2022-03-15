<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                <div class="table-responsive">
                    <table id="example" class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>Nama Kelas</th>
                                <th>NIP</th>
                                <th>Nama Guru</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($kelas as $k) {
                            ?>
                            <tr class="text-center">
                                <th class="col-">
                                    <?= $k->nama ?>
                                </th>
                                <th class="col-">
                                    <?= $k->nip ?>
                                </th>
                                <?php
                                    foreach ($guru as $g) {
                                        if ($g->nip == $k->nip) {
                                    ?>
                                <th class="col-">
                                    <?= $g->nama ?>
                                </th>
                                <?php
                                        }
                                    }
                                    ?>
                                <?php if ($k->status == 0) { ?>
                                <th class="col-">
                                    <a href="#confir<?= $k->id ?>" data-toggle="modal">
                                        <button class="btn bg-danger text-light">
                                            Konfirmasi <i class="fas fa-clock"></i>
                                        </button>
                                    </a>
                                </th>
                                <?php } ?>
                                <?php if ($k->status == 1) { ?>
                                <th class="col-">
                                    Diterima
                                </th>
                                <?php }
                                    if ($k->status == 2) { ?>
                                <th class="col-">
                                    Ditolak
                                </th>
                                <?php } ?>
                            </tr>
                            <?php
                                include('konfirmasi_kelas.php');
                            }
                            ?>

                        </tbody>
                    </table>
                    <p class="small font-weight-bold">Pendaftaran guru hanya dapat dilakukan admin dan tidak bisa
                        dilakukan sendiri</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if ($this->session->flashdata('tolak-kelas')) {
?>
<script>
swal({
    title: "Kelas Ditolak",
    icon: "error",
    button: "ok"
});
</script>
<?php
}
if ($this->session->flashdata('terima-kelas')) {
?>
<script>
swal({
    title: "Kelas Diterima",
    icon: "success",
    button: "ok"
});
</script>
<?php
}
?>