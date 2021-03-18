var a = prompt('Masukkan alas segitiga');
var t = prompt('Masukkan tinggi segitiga');

var luasSegitiga = function (alas = 0, tinggi = 0) {
    return alas * tinggi / 2;
}

alert(`luas segitiga: ${luasSegitiga(a, t)}`);