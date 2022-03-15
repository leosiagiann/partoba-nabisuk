function s() {
    var j = document.getElementById("jlh");
    var h = document.getElementById("harga");
    var a = document.getElementById("alamat");
    if (j.value == "" || j.value <= 0 || h.value == "" || h.value < 100000 || a.value == "") {
        document.getElementById("req").disabled = true;
    } else {
        document.getElementById("req").disabled = false;
    }
}