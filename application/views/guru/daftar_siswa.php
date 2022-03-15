<!-- Main Content -->
<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <h4 class="alert alert-primary">Daftar Siswa Kelas (<?= $kelas_det['nama'] ?>)</h4>
            <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                <div class="table-responsive">
                    <table id="example" class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Telepon</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($kelas_siswa as $ks) {
                                if ($ks->id_kelas == $id_det) {
                                    foreach ($allsiswa as $as) {
                                        if ($as->id == $ks->id_siswa && $ks) {
                            ?>
                            <tr>
                                <th><?= $as->nama ?></th>
                                <th><?= $as->email ?></th>
                                <th><?= $as->no_telp ?></th>
                                <th>
                                    <center>
                                        <img class="course-thumbnail-go-no-modal clickable-row"
                                            data-href="#fotosiswa<?= $as->id ?>"
                                            src="<?= base_url('assets/upload/siswa/') . $as->foto; ?>" alt="">
                                    </center>
                                </th>
                            </tr>
                            <?php
                                            include('gambarsiswa.php');
                                        }
                                    }
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
<!-- End Main Content -->
<style>
.course-thumbnail-go-no-modal {
    display: block;
    width: 30px;
    height: 50px;
    object-fit: cover;
}

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

th {
    text-align: center;
}

.clickable-row {
    cursor: pointer;
}
</style>