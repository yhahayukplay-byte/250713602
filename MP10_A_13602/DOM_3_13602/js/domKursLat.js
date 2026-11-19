var  targetNode;

function init() {
    targetNode = document.getElementById("hasil").firstChild;
}

function hitungKurs(id) {
    var inputEl = document.getElementById(id);
    var rupiah = parseFloat(inputEl.value);
    var hasilUsd = rupiah / 18246;
    targetNode.data = hasilUsd.toFixed(2);

    var riwayatKonversi = document.createElement("li");
    var histori = "Rp" + rupiah + " = US$" + hasilUsd.toFixed(2);
    var teksNode = document.createTextNode(histori);
    riwayatKonversi.appendChild(teksNode);
    var listRiwayat = document.getElementById("riwayat");
    listRiwayat.appendChild(riwayatKonversi);
    
} var targetNode;