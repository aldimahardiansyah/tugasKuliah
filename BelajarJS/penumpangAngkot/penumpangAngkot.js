var penumpang = [undefined, 'lisk'];

let tambahPenumpang = function (nama, penumpang) {
    if (penumpang == '') {
        penumpang.unshift(nama);
    }

    else {
        let tambahkan = false;
        let telusur = penumpang.map(function (e) {
            switch (e) {
                case undefined:
                    e = nama;
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

let hapusPenumpang = function (nama, penumpang) {
    if (penumpang == '') {
        console.log('Penumpang dalam angkot kosong!');
    }
    else {
        for (let j = 0; j < penumpang.length; j++) {
            if (penumpang[j] == nama) {
                penumpang[j] = undefined;
                return penumpang;
            }
            else {
                console.log(nama + ' tidak ada dalam angkot!');
            }
        }
    }
}

tambahPenumpang('Aldi', penumpang);
console.log(penumpang);