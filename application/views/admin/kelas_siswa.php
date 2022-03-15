<style>
.course-thumbnail-go {
    width: 100%;
    margin: 0;
    object-fit: cover;
}

.course-thumbnail-go img {
    display: block;
    width: 100%;
    object-fit: cover;
}
</style>
<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <?php
            $jk = "";
            $nama_g = "";
            foreach ($guru as $g) {
                if ($g->nip == $dk['nip']) {
                    if ($g->jenis_kelamin == "Perempuan") {
                        $jk = "Ibu. ";
                    } else {
                        $jk = "Bpk. ";
                    }
                    $nama_g = $g->nama;
                    break;
                }
            }
            ?>
            <h4 class="alert alert-primary"><?= $dk['nama'] ?> (<?= $jk; ?> <?= $nama_g; ?>)</h4>
            <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                <div class="table-responsive">
                    <table id="example" class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>Nama Siswa</th>
                                <th>Status</th>
                                <th>Bukti Pembayaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($kelas_siswa as $k) {
                                if ($k->id_kelas == $dk['id']) {
                                    $namaya_ = "";
                                    foreach ($siswa as $s) {
                                        if ($s->id == $k->id_siswa) {
                                            $namaya_ = $s->nama;
                                            break;
                                        }
                                    }
                            ?>
                            <tr class="text-center">
                                <th>
                                    <?= $namaya_ ?>
                                </th>
                                <th>
                                    <?php
                                            if ($k->status == 1 || $k->status == 0) {
                                            ?>
                                    <span class="btn bg-danger text-light">Non Aktif</span>
                                    <?php
                                            }
                                            if ($k->status == 2) {
                                            ?>
                                    <span class="btn bg-success text-light">Aktif</span>
                                    <?php
                                            }
                                            ?>
                                </th>
                                <th>
                                    <a href="#bukti<?= $k->id ?>" data-toggle="modal">
                                        <button class="btn btn-primary">Lihat <i class="far fa-eye"></i></button>
                                    </a>
                                </th>

                                <?php if ($k->status == 1 || $k->status == 0) { ?>
                                <th>
                                    <a href="#aktif<?= $k->id ?>" data-toggle="modal">
                                        <button class="btn bg-warning text-light">
                                            Aktifkan</i>
                                        </button>
                                    </a>
                                </th>
                                <?php } ?>
                                <?php
                                        if ($k->status == 2) { ?>
                                <th>
                                    <a href="#nonaktif<?= $k->id ?>" data-toggle="modal">
                                        <button class="btn bg-warning text-light">
                                            Non Aktifkan</i>
                                        </button>
                                    </a>
                                </th>
                                <?php } ?>
                            </tr>
                            <?php
                                    include('tt.php');
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                    <small class="text-dark">Tanggal : <?= date('Y-m-d'); ?></small>
                </div>
            </div>
        </div>
    </div>
</div>