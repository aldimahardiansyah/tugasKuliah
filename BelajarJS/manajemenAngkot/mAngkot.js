class Angkot {
    constructor(sopir, trayek, kas, penumpang) {
        this.sopir = sopir;
        this.trayek = trayek;
        this.kas = parseInt(kas);
        this.penumpang = penumpang;
    }

    penumpangNaik = function (namaPenumpang) {
        this.penumpang.push(namaPenumpang);
        return this.penumpang;
    }

    penumpangTurun = function (namaPenumpang, bayar) {

        if (this.penumpang.length == 0) {
            alert('Penumpang kosong');
            return false;
        }

        else {
            for (let i = 0; i < this.penumpang.length; i++) {
                if (this.penumpang[i] == namaPenumpang) {
                    this.penumpang[i] = undefined;
                    this.kas += bayar;
                    return this.penumpang;
                }

                else {
                    alert('Tidak ada penumpang bernama ' + namaPenumpang);
                    return this.penumpang;
                }
            }
        }
    }
}

let angkot1 = new Angkot('Aldi', 'Cicaheum - Cibiru', '0', [])