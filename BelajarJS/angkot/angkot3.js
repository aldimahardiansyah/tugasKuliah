var jmlAngkot = 10;
var angkotBeroprasi = 6;
var noAngkot = 1;

for (noAngkot; noAngkot <= jmlAngkot; noAngkot++) {
    if (noAngkot <= angkotBeroprasi) {
        console.log(`Angkot No. ${noAngkot} beroprasi dengan baik.`);
    }
    else {
        console.log('Angkot No. ' + noAngkot + ' sedang tidak beroprasi.');
    }
}