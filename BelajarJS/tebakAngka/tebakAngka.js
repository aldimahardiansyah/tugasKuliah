alert('Selamat datang di game tebak angka!\nTebaklah angka dari 0-9! \nAnda akan diberikan 3 kesempatan untuk menebak angka!')
var lagi = true;
while (lagi) {
    // angka random pilihan komputer
    var jawaban = Math.floor(Math.random() * 10);
    console.log(jawaban);

    var i = 3;
    while (i >= 1) {
        // pilihan player
        var player = prompt('kesempatan: ' + i + '\nmasukkan angka: ');

        // rules
        if (player == jawaban) {
            alert('Tebakan Anda benar. Angka yang dicari adalah: ' + jawaban);
            break;
        }
        else if (player > jawaban) {
            i--;
            alert('Angka terlalu tinggi!');
        }
        else if (player < jawaban) {
            i--;
            alert('Angka terlalu rendah!');
        }
        else {
            alert('Masukkan Anda salah!');
        }

    }
    lagi = confirm('lagi?');
}
alert('Terimakasih telah bermain!');