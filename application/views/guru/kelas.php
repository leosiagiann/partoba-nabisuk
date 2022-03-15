<style type="text/css">
#start_button:disabled {
    cursor: not-allowed;
}

nav>div a.nav-item.nav-link:hover {
    color: #0062cc;
    background-color: #f3f3f3;
    border-bottom: 2px solid !important;
    font-size: 16px;
    font-weight: bold;
}
</style>
<?php include('tambah_kelas.php'); ?>
<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                <div class="row form-group">
                    <div class="col-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"
                                style="background-color: #f3f3f3;">
                                <a class="nav-item nav-link active" id="nav_my_class" data-toggle="tab"
                                    href="#nav_class" role="tab" aria-controls="nav_class" aria-selected="true"
                                    style="color: black;">Kelas
                                    Saya</a>
                                <a class="nav-item nav-link" id="nav_all_class" data-toggle="tab" href="#nav_all"
                                    role="tab" aria-controls="nav_all" aria-selected="false"
                                    style="color: black;">Seluruh Kelas</a>
                            </div>
                        </nav>
                        <div class="tab-content text-dark" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav_class" role="tabpanel"
                                aria-labelledby="nav_my_class">
                                <div class="p-2">
                                    <div class="table-responsive">
                                        <a href="#tambahkelas" data-toggle="modal">
                                            <button class="btn mb-3 text-white" style="background-color: #32CD32">
                                                Tambah Kelas
                                            </button>
                                        </a>
                                        <table id="example" class="table align-items-center table-flush">
                                            <thead>
                                                <tr class="text-center">
                                                    <th scope="col">Nama Kelas</th>
                                                    <th scope="col">NIP</th>
                                                    <th scope="col">Detail</th>
                                                    <th scope="col">Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($kelas as $k) {
                                                    if ($k->status == 1 && $k->nip == $saya['nip']) {
                                                ?>
                                                <tr class="text-center">
                                                    <th scope="row">
                                                        <?= $k->nama ?>
                                                    </th>
                                                    <td scope="row">
                                                        <?php echo $k->nip ?>
                                                    </td>
                                                    <td class="text-center" scope="row">
                                                        <a href="#detail<?= $k->id ?>" data-toggle="modal">
                                                            <button class="btn btn-primary">
                                                                Detail <i class="fas fa-eye"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                    <td class="text-center" scope="row">
                                                        <a href="#edit<?= $k->id ?>" data-toggle="modal">
                                                            <button class="btn btn-info">
                                                                Edit Kelas <i class="fas fa-pen"></i>
                                                            </button>
                                                        </a>
                                                        <a href="#hapus<?= $k->id ?>" data-toggle="modal">
                                                            <button class="btn btn-danger">
                                                                Hapus <i class="fas fa-trash"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php
                                                        include('crud_kelas.php');
                                                    }
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                        <p class="small font-weight-bold">Pendaftaran guru hanya dapat dilakukan admin
                                            dan
                                            tidak bisa
                                            dilakukan sendiri</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav_all" role="tabpanel" aria-labelledby="nav_all_class">
                                <?php include('nav_all_class.php') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function check(temp, tomp) {
    if (temp == "Matematika" || temp == "Biologi" || temp == "Fisika" || temp == "Kimia" ||
        temp == "Geografi" || temp == "Ekonomi" || temp == "Sosiologi") return false;
    if (temp == "Bahasa") {
        if (tomp == "Inggris") return false;
        else return true;
    } else return true;
}

function s() {
    var e = document.getElementById("nama").value;
    var local = false;
    for (var i = 0; i < e.length; i++) {
        if (e.charAt(i) == '-' && e.charAt(i - 1) == ' ' && e.charAt(i +
                1) == ' ' && ((e.charAt(i + 2) >= '7' && e.charAt(i + 2) <= '9') || e.charAt(i + 2) == '1')) {
            if (e.charAt(i + 2) == '1')
                if (e.charAt(i + 3) >= '0' && e.charAt(i + 3) <= '2' && e.length == i + 4)
                    local = true;
                else local = false;
            else
            if (e.length == i + 3)
                local = true;
            else local = false;
            break;
        }
    }
    var temp = e.split(" ")[0];
    var tomp = e.split(" ")[1];
    if (check(temp, tomp)) local = false;
    if (local == false) {
        document.getElementById("start_button").disabled = true;
        $('#start_button').attr('disabled', 'disabled');
    } else {
        document.getElementById("start_button").disabled = false;
        $('#start_button').removeAttr('disabled');
    }
}
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if ($this->session->flashdata('tambah-kelas')) {
?>
<script>
swal({
    title: "Berhasil Menambahkan Kelas",
    text: "Tunggu Konfirmasi Admin Untuk Kelas yang Anda Daftarkan",
    icon: "success",
    button: "ok"
});
</script>
<?php
}
if ($this->session->flashdata('edit-kelas')) {
?>
<script>
swal({
    title: "Berhasil Mengubah Kelas",
    text: "Kelas Anda Sudah Berhasil Diubah",
    icon: "success",
    button: "ok"
});
</script>
<?php
}
if ($this->session->flashdata('edit-avatar')) {
?>
<script>
swal({
    title: "Berhasil Mengubah Avatar",
    icon: "success",
    button: "ok"
});
</script>
<?php
}
if ($this->session->flashdata('hapus-kelas')) {
?>
<script>
swal({
    title: "Kelas Sudah Dihapus",
    icon: "info",
    button: "ok"
});
</script>
<?php
}
?>