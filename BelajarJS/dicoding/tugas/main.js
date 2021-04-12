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

// fungsi yang mengembalikan nilai terkecil
const minimal = (a, b) => (a < b || a === b) ? a : b;

// funsi yang mengembalikan a * a sebanyak b kali
const power = (a, b) => a ** b;
console.log(power(7, 3));