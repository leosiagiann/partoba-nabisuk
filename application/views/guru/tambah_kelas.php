<!-- Tambah Kelas -->
<div class="modal fade" id="tambahkelas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="myModalLabel">Tambah Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form class="user" method="post" action="<?= base_url('guru/tambah_kelas'); ?>">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Nama</label>
                            </div>
                            <div class="col-sm-1">
                                <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Kelas"
                                    onkeyup="s()">
                                <small class="text text-muted">
                                    Contoh Format Penulisan : Matematika - 10
                                </small>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Mapel</label>
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
                                <label class="control-label" style="position:relative; top:7px;">Kelas</label>
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
                                <label class="control-label" style="position:relative; top:7px;">Jadwal</label>
                            </div>
                            <div class="col-sm-1">
                                <span class="text-dark control-span" style="position:relative; top:7px;">:</span>
                            </div>
                            <div class="col-sm-9">
                                <select class="custom-select" name="jadwal" id="jadwal">
                                    <option value="senin 15:00, selasa 15:00">Senin 15:00, Selasa 15:00</option>
                                    <option value="senin 15:00, rabu 15:00">Senin 15:00, Rabu 15:00</option>
                                    <option value="selasa 15:00, rabu 15:00">Selasa 15:00, Rabu 15:00</option>
                                    <option value="sabtu 13:00, minggu 15:00">Sabtu 13:00, Minggu 15:00</option>
                                    <option value="selasa 13:00, kamis 15:00">Selasa 13:00, Kamis 15:00</option>
                                    <option value="jumat 13:00, sabtu 15:00">Jumat 13:00, Sabtu 15:00</option>
                                </select>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer" style="position:relative; top:-25px;">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" name="tambah" class="btn bg-success text-white" id="start_button"
                    disabled>Tambah</a>
                    </form>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Kelas -->