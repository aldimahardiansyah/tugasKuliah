var penumpang = [];

let tambahPenumpang = function (nama, penumpang) {
    if (penumpang == '') {
        penumpang.unshift(nama);
    }

    else {
        let tambahkan = true;
        let telusur = penumpang.map(function (e) {
            switch (e) {
                case undefined:
                    penumpang.splice(nama);
                    tambahkan = false;
                    break;
                case nama:
                    console.log('Penumpang ' + nama + ' sudah ada di dalam angkot!');
                    tambahkan = false;
                    break;
                default:
                    tambahkan = true;
                    break;
            }
        });

        if (tambahkan == true) {
            penumpang.push(nama);
            return penumpang;
        }
    }
}

tambahPenumpang('Aldi', penumpang);
console.log(penumpang);