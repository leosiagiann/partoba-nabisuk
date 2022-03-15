<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/self/pb-2.css'); ?>">
<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <h4 class="alert alert-primary">Daftar Siswa Kelas (<?= $dk['nama'] ?>)</h4>
            <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                <div class="table-responsive">
                    <table id="example" class="table align-items-center table-flush">

                        <!-- thead -->
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Telepon</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <!-- thead -->

                        <!-- tbody -->
                        <tbody>
                            <?php
                            foreach ($kelas_siswa as $ks) {
                                if ($ks->id == $dk['id']) {
                                    foreach ($allsiswa as $as) {
                                        if ($ks->id_siswa == $as->id) {
                            ?>
                            <tr>
                                <th>
                                    <?= $as->nama ?>
                                </th>
                                <th>
                                    <?= $as->email ?>
                                </th>
                                <th>
                                    <?= $as->no_telp ?>
                                </th>
                                <td>
                                    <center>
                                        <img class="course-thumbnail-go-no-modal clickable-row"
                                            data-href="#fotosiswa<?= $as->id ?>"
                                            src="<?= base_url('assets/upload/siswa/') . $as->foto; ?>" alt="">
                                    </center>
                                </td>
                            </tr>
                            <?php
                                            include('gambarsiswa.php');
                                        }
                                        break;
                                    }
                                }
                            }
                            ?>
                        </tbody>
                        <!-- tbody -->

                    </table>

                    <!-- Small Date -->
                    <small class="text-dark">Tanggal : <?= date('Y-m-d'); ?></small>
                    <!-- Small Date -->

                </div>
            </div>
        </div>
    </div>
</div>