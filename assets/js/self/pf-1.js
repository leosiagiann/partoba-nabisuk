function s() {
    var i = document.getElementById('password3').value;
    var j = document.getElementById('password1').value;
    if (i.length < 4 || j.length < 4) {
        document.getElementById('change_pw').disabled = true;
    } else {
        document.getElementById('change_pw').disabled = false;
    }
}

function ss_() {
    var n = document.getElementById('foto').files.item(0).name;
    if (n.value == "") {
        document.getElementById('change_profil').disabled = true;
    } else {
        document.getElementById('change_profil').disabled = false;
    }
}

function s_() {
    var n = document.getElementById('nama_');
    var k = document.getElementById('nama');
    if (k.value == n.value) {
        document.getElementById('change_profil').disabled = true;
    } else {
        document.getElementById('change_profil').disabled = false;
    }
}
