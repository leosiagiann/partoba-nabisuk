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