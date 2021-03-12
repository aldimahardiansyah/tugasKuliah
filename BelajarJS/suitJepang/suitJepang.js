var ulang = true;
while (ulang) {
    // menangkap pilihan player
    var player = prompt('Pilih: gunting, batu, atau kertas');

    //menangkap pilihan komputer
    var comp = Math.random();
    if (comp < 0.34) {
        comp = 'gunting';
    }
    else if (comp < 0.67) {
        comp = 'batu';
    }
    else {
        comp = 'kertas';
    }

    var hasil = '';

    // menentukan rules
    if (player == comp) {
        hasil = 'SERI';
    }
    else if (player == 'kertas') {
        hasil = (comp == 'gunting') ? 'KALAH' : 'MENANG';
    }
    else if (player == 'gunting') {
        hasil = (comp == 'kertas') ? 'MENANG' : 'KALAH';
    }
    else if (player == 'batu') {
        hasil = (comp == 'kertas') ? 'KALAH' : 'MENANG';
    }
    else {
        alert('Masukkan salah!');
    }

    // hasil
    alert('Kamu memilih: ' + player + '. Komputer memilih: ' + comp + '.\nMaka hasilnya: ' + hasil);

    // melakakukan perulangan
    ulang = confirm('Apakah ingin bermain lagi?');
}

alert('Terimakasih telah bermain');