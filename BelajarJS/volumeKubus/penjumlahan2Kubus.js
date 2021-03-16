
function jumlahVolumeDuaKubus(kubus1, kubus2) {

    return kubus1 * kubus1 * kubus1 + kubus2 * kubus2 * kubus2;
}
var a = prompt('Masukkan panjang sisi kubus 1: ');
var b = prompt('Masukkan panjang sisi kubus 2: ');

var result = jumlahVolumeDuaKubus(a, b);

alert('Hasil penjumlahan dari dua volume kubus: ' + result);