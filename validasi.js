function cekform() {
    pic = document.getElementById(pic);
    fName = document.getElementById(fName);
    sName = document.getElementById(sName);
    bPlace = document.getElementById(bPlace);
    bDate = document.getElementById(bDate);
    age = document.getElementById(age);
    gender = document.getElementById(gender);
    city = document.getElementById(city);
    email = document.getElementById(email);
    phone = document.getElementById(phone);
    socMed = document.getElementById(socMed);

    if (pic.value == '') {
        alert('Foto tidak boleh kosong');
        pic.focus();
        return false;
    } else if (fName.value == '') {
        alert('Tidak boleh kosong');
        fName.focus();
        return false;
    } else if (fName.value.length <= 3) {
        alert('Minimal 3 karakter');
        fName.focus();
        return false;
    } else if (sName.value == '') {
        alert('Tidak boleh kosong');
        sName.focus();
        return false;
    } else if (sName.value.length <= 3) {
        alert('Minimal 3 karakter');
        sName.focus();
        return false;
    } else if (bPlace.value == '') {
        alert('Tidak boleh kosong');
        bPlace.focus();
        return false;
    } else if (bDate.value == '') {
        alert('Tidak boleh kosong');
        bDate.focus();
        return false;

    } else if (age.value <= 18) {
        alert('Minimal 18 tahun');
        age.focus();
        return false;
    } else if (age.value >= 30) {
        alert('Tidak boleh lebih dari 30 tahun');
        age.focus();
        return false;

    } else if (gender.value == '') {
        alert('Tidak boleh kosong');
        gender.focus();
        return false;

    } else if (city.value == '') {
        alert('Tidak boleh kosong');
        city.focus();
        return false;

    } else if (email.value == '') {
        alert('Tidak boleh kosong');
        email.focus();
        return false;

    } else if (phone.value == '') {
        alert('Tidak boleh kosong');
        phone.focus();
        return false;
    } else if (phone.value <= 4) {
        alert('Minimal 4 karakter');
        phone.focus();
        return false;

    }
}

