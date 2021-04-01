// objek literal
let mhs = {
    "nama": "Aldi Mahardiansyah",
    "jurusan": "Teknik Informatika",
    "ips": [3.97, 3.92, 3.76],
    "alamat": {
        "jalan": "Jl. Abc No. 123",
        "kota": "Bogor",
        "Provinsi": "Jawa Barat"
    }
};

// objek function declaration
let objekMahasiswa = function (nama, jurusan, nim, kota) {
    let mahasiswa = {};
    mahasiswa.nama = nama;
    mahasiswa.jurusan = jurusan;
    mahasiswa.nim = nim;
    mahasiswa.kota = kota;
    return mahasiswa;
}

let mhs1 = objekMahasiswa('Dody', 'Sistem Informasi', 0110220223, 'Depok');
let mhs2 = objekMahasiswa('Rendi', 'Sistem Informasi', 0110220243, 'Tegal');


// objek constructor
class Mahasiswa {
    constructor(nama, jurusan, nim, kota) {
        this.nama = nama;
        this.jurusan = jurusan;
        this.nim = nim;
        this.kota = kota;
    }
}

let mhs3 = new Mahasiswa('Adi', 'Teknik Pangan', 011022736, 'Jakarta');
let mhs4 = new Mahasiswa('Roy', 'Kedokteran', 0110220376, 'Tanggerang');

