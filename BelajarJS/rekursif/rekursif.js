let inpt = prompt('Masukkan angka yang akan diformat rupiah');
var a = '';

function rupiah(angka = 0) {
    if (angka.length <= 3) {
        a[0] = angka;
    }
    else {
        a = '.' + angka.slice(-3);
        rupiah(angka.slice(0, -3));
    }
}

console.log(inpt.slice(-2));
console.log(inpt);
rupiah(inpt);
alert(a + ', maaf syntax masih salah dan dalam masa pengembangan');