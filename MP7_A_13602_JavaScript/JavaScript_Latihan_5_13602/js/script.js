function fn_VaForm(){
    var sMsg = "";
    var eMail = ^[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9]@[a-z0-9][a-z0-9_\.-]{0,}[a-z09][\.][a-z0-9]{2,4}$ ;

    if (document.getElementById("nama").value == "" && document.getElementById("email").value == "" 
    && document.getElementById("umur").value == "" && document.getElementById("lomba").value == ""){
        sMsg += "\n* Anda belum mengisikan nama/email/umur/lomba";
    }


    if(sMsg != ""){
        alert("Peringatan:\n" + sMsg);
        return false;
    }else{
        return true;
    }

    if (!eMail){
        alert("format email belum benar.");
        return false;
    }else{
        return true;
    }

var iUmur;
    iUmur = prompt("Masukkan umur Anda.", 0);

    if(iUmur <= 14 && iUmur >= 10){
        if(sMember == "Y"){
            alert("“Kategori Junior");
        }else if(iUmur >14 && iUmur <= 18){
            alert("“Kategori Senior");
        }
    }else{
        alert(Umur harus berupa angka.);
    }

var sInput;

    sInput = prompt("Pilih menu: (C)erdas Cermat, (P)uisi, (D)esain Poster", "C");
    
    switch(sInput){
        case "C":
            alert("Anda memilih Cerdas Cermat");
            break;
        case "P":
            alert("Anda memilih Puisi");
            break;
        case "D":
            alert("Anda memilih Desain Poster");
            break;
        default:
            alert("Menu tidak tersedia");
            break;
    }
    alert("Terima kasih [nama] ! Anda terdaftar di lomba [pilihan] [(info)].", nama, sInput);
}