let penumpang = [];

let tambahPenumpang = function (nama, penumpang) {
    if (penumpang == '') {
        penumpang.unshift(nama);
    }

    else {
        for (let i = 0; i < penumpang.length; i++) {
            if (penumpang[i] == undefined) {
                penumpang.splice(i);
                break;
            }
            else if (penumpang[i] == nama) {
                console.log('Penumpang ' + penumpang[i] + ' sudah ada di dalam angkot!');
                break;
            }
            else {
                penumpang.push(nama);
                break;
            }
        }
    }
}

tambahPenumpang('Aldi', penumpang);
console.log(penumpang);