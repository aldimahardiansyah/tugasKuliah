
function jumlahVolumeDuaKubus(kubus1, kubus2) {
    var volume1 = kubus1 * kubus1 * kubus1;
    var volume2 = kubus2 * kubus2 * kubus2;

    var hasil = volume1 + volume2;

    console.log('Volume dari kubus 1: ' + volume1 + '. Volume kubus 2: ' + volume2 + '\nTotal: ' + hasil);
    return hasil;
}
var a = prompt('Masukkan panjang sisi kubus 1: ');
var b = prompt('Masukkan panjang sisi kubus 2: ');

var result = jumlahVolumeDuaKubus(a, b);

alert('Hasil penjumlahan dari dua volume kubus: ' + result);