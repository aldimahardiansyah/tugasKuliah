// // objek
// let restaurant = {
//     name: "Aldi",
//     city: "Bogor",
//     "favorite drink": "Cola",
//     "favorite food": "Tempe",
//     isVegan: true
// };
// const name = restaurant.name;
// const favoriteDrink = restaurant["favorite drink"];

// // array
// let evanNumber = [];
// for (let i = 1; i <= 100; i++) {
//     if (i % 2 === 0) {
//         evanNumber.push(i);
//     }
// }

// console.log(evanNumber);

// // map
// const priceInJPY = 5000;
// let currency = new Map([
//     ["USD", 14000],
//     ["JPY", 131],
//     ["SGD", 11000],
//     ["MYR", 3500]
// ]);
// const priceInIDR = priceInJPY * currency.get("JPY");

// console.log(priceInIDR);

// // arrow function
// const sayName = (nama) => {
//     console.log(`Halo, nama saya ${nama}.`)
// }
// sayName('Aldi');

// // closure
// function init() {
//     var name = 'Obi Wan';   // Variabel lokal di dalam scope fungsi init

//     function greet() {      // Inner function, merupakan contoh closure
//         console.log(`Halo, ${name}`);   // Memanggil variabel yang dideklarasikan di parent function
//     }

//     greet();
// }

// init();

// // fungsi yang mengembalikan nilai terkecil
// const minimal = (a, b) => (a < b || a === b) ? a : b;

// // funsi yang mengembalikan a * a sebanyak b kali
// const power = (a, b) => a ** b;
// console.log(power(7, 3));

// // Menghitung umur
// const inputTglLahir = prompt("Masukkan Tanggal Lahir. Contoh: 25-12-2002");
// const tglLahir = inputTglLahir.split('-');

// const today = new Date();
// let tahun = 0;
// let bulan = 0;

// if (parseInt(tglLahir[1]) > today.getMonth()) {
//     bulan = 12 - (parseInt(tglLahir[1]) - (today.getMonth() + 1));
//     tahun = today.getFullYear() - parseInt(tglLahir[2]) - 1;
// }
// else {
//     bulan = today.getMonth() - parseInt(tglLahir[1]);
//     tahun = today.getFullYear() - parseInt(tglLahir[2]);
// }

// alert(tahun + ' tahun ' + bulan + ' bulan ');

// // map & forEach function
// const arr1 = ['andi', 'jhon', 'steven', 'dave'];
// const arr2 = arr1.map((e) => `${e}!`);
// console.log(arr2);

// arr1.forEach((student) => {
//     console.log(`Hello ${student}!`);
// });

const books = [
    { title: 'The Da Vinci Code', author: 'Dan Brown', sales: 5094805 },
    { title: 'The Ghost', author: 'Robert Harris', sales: 807311 },
    { title: 'White Teeth', author: 'Zadie Smith', sales: 815586 },
    { title: 'Fifty Shades of Grey', author: 'E. L. James', sales: 3758936 },
    { title: 'Jamie\'s Italy', author: 'Jamie Oliver', sales: 906968 },
    { title: 'I Can Make You Thin', author: 'Paul McKenna', sales: 905086 },
    { title: 'Harry Potter and the Deathly Hallows', author: 'J.K Rowling', sales: 4475152 },
];

// TODO
const greatAuthors = [];
let filterResult = books.filter((book) => book.sales > 1000000);

filterResult.map((buku) => greatAuthors.push(`${buku.author} adalah penulis buku ${buku.title} yang sangat hebat!`));

console.log(greatAuthors);