<style>
#req:disabled {
    cursor: not-allowed;
}
</style>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 style="color: black">Request Kelas</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="bg-light" style="border-radius: 10px">
                    <div class="p-4">
                        <form class="user" method="post" action=" <?= base_url('siswa/request'); ?>">
                            <input type="hidden" name="id_siswa" id="id_siswa" value="<?= $siswa['id'] ?>">
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="control-label" style="position:relative; top:7px;">Pilihan
                                        Guru</label>
                                </div>
                                <div class="col-sm-1">
                                    <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <select class="custom-select" name="nip" id="nip">
                                        <?php
                                        foreach ($guru as $g) {
                                        ?>
                                        <option value="<?= $g->nip ?>"><?= $g->nama ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="control-label" style="position:relative; top:7px;">Pilihan
                                        Mata Pelajaran</label>
                                </div>
                                <div class="col-sm-1">
                                    <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <select class="custom-select" name="mapel" id="mapel">
                                        <option value="Matematika">Matematika</option>
                                        <option value="Biologi">Biologi</option>
                                        <option value="Fisika">Fisika</option>
                                        <option value="Kimia">Kimia</option>
                                        <option value="Geografi">Geografi</option>
                                        <option value="Ekonomi">Ekonomi</option>
                                        <option value="Sosiologi">Sosiologi</option>
                                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="control-label" style="position:relative; top:7px;">Pilihan
                                        Kelas</label>
                                </div>
                                <div class="col-sm-1">
                                    <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <select class="custom-select" name="kelas" id="kelas">
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="control-label" style="position:relative; top:7px;">Jumlah
                                        Siswa</label>
                                </div>
                                <div class="col-sm-1">
                                    <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control form-control-user" id="jlh" placeholder="0"
                                        name="jlh" onkeyup="s()">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="control-label" style="position:relative; top:7px;">Harga
                                        Permintaan</label>
                                </div>
                                <div class="col-sm-1">
                                    <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control form-control-user" id="harga"
                                        placeholder="Min 100000" name="harga" onkeyup="s()">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="control-label" style="position:relative; top:7px;">Tempat
                                        Permintaan</label>
                                </div>
                                <div class="col-sm-1">
                                    <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-user" id="alamat"
                                        placeholder="Jln. Serma Muda Simanjuntak" name="alamat" onkeyup="s()">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="control-label" style="position:relative; top:7px;">Deskripsi
                                        Tambahan</label>
                                </div>
                                <div class="col-sm-1">
                                    <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                                </div>
                                <div class="col-sm-9">
                                    <textarea name="deskripsi" id="deskripsi" class="form-control form-control-user"
                                        placeholder="Pesan Tambahan (Optional)"></textarea>
                                </div>
                            </div>
                            <center>
                                <div class="col-5">
                                    <button type="submit" class="btn btn-info btn-user btn-block" id="req" disabled>
                                        Request
                                    </button>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="<?= base_url('assets/js/self/pb-2.js'); ?>"></script>