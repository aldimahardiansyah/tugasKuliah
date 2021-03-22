// mendeklarasaikan array
let arr = [3, 4, 1, 5, 18, 42, 7];

// mengembalikan elemen array untuk dicetak
let hasilArr = arr.map(function (elemen) {
    return elemen;
});

// mengurutkan elemen array dan mencetaknya
console.log(hasilArr.sort(function (a, b) {
    return a - b;
}));

// mencari elemen array dengan filter
let cari = arr.filter(function (elemen) {
    return elemen > 8;
});
console.log(cari);