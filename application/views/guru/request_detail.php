<?php
$namanya = "";
foreach ($allsiswa as $s) {
    if ($s->id == $req_det['id_siswa']) {
        $namanya = $s->nama;
        break;
    }
}
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="color: black">Request Oleh <?= $namanya ?></h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="bg-light" style="border-radius: 10px">
                    <div class="p-4">
                        <table>
                            <tr>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">Nama Siswa</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">:</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px"><?= $namanya ?></label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">Email Siswa</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">:</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3"
                                                    style="margin-right: 8px"><?= $req_det['email'] ?></label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">Nomor Telepon Siswa</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">:</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3"
                                                    style="margin-right: 8px"><?= $req_det['no_telp'] ?></label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">Mata Pelajaran</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">:</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3"
                                                    style="margin-right: 8px"><?= $req_det['mata_pelajaran'] ?> -
                                                    <?= $req_det['kelas'] ?></label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">Jumlah Siswa</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">:</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3"
                                                    style="margin-right: 8px"><?= $req_det['jumlah'] ?></label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">Harga Penawaran</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">:</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">Rp.
                                                    <?= $req_det['harga'] ?>,00-</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">Alamat Tempat Belajar</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">:</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3"
                                                    style="margin-right: 8px"><?= $req_det['alamat'] ?></label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">Deskripsi</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">:</label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label" style="position:relative; top:7px;"><text
                                                    class="pr-3" style="margin-right: 8px">
                                                    <?php
                                                    if ($req_det['deskripsi'] == "") {
                                                    ?>
                                                    -
                                                    <?php
                                                    } else {
                                                        echo $req_det['deskripsi'];
                                                    }
                                                    ?>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Main Content -->