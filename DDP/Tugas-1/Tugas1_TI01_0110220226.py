# mencetak teks Fitur Kalkulator Biaya Kuliah
print("Fitur Kalkulator Biaya Kuliah")
# meminta masukkan user berupa NIM dan menyimpannya ke dalam variabel nim
nim = input("Masukkan NIM: ")
# mengambil index 5 sampai 7 pada variabel nim dan menyimpannya ke dalam variabel thn
thn = nim[5:7]
# mendefinisikan variabel bop dan hsks
bop = 0
hsks = 0

# percabangan: jika variabel thn sama dengan 17 maka tambahkan
# 2800000 pada variabel bop dan 130000 pada variabel hsks
if thn == "17":
    bop = bop + 2800000
    hsks = hsks + 130000
# percabangan: jika variabel thn sama dengan 18 maka tambahkan
# 3200000 pada variabel bop dan 150000 pada variabel hsks
elif thn == "18":
    bop = bop + 3200000
    hsks = hsks + 150000
# percabangan: jika variabel thn sama dengan 19 maka tambahkan
# 3500000 pada variabel bop dan 175000 pada variabel hsks
elif thn == "19":
    bop = bop + 3500000
    hsks = hsks + 175000
# percabangan: jika variabel thn sama dengan 20 maka tambahkan
# 4000000 pada variabel bop dan 200000 pada variabel hsks
elif thn == "20":
    bop = bop + 4000000
    hsks = hsks + 200000
# percabangan: jika isi variabel thn selain 17/18/19/20 maka menampilkan pesan kesalahan
else:
    print("NIM yang Anda masukkan salah. mohon periksa kembali!")

# percabangan: jika variabel bop tidak sama dengan 0
if bop != 0:
    # mencetak "BOP mahasiswa angkatan 20(isi variabel thn) adalah (isi variabel bop)"
    print("BOP mahasiswa angkatan", "20"+thn, "adalah", bop, "\n")

    # meminta user memasukkan jumlah sks yg di ambil semester ini lalu menyimpannya ke dalam variabel sks
    sks = input("Jumlah SKS yang diambil semester ini: ")
    # mendeklarasikan variabel tsks dengan isi: nilai variabel sks di kurang 15
    tsks = eval(sks) - 15
    # mendeklarasikan variabel tbop dengan isi: nilai variabel tsks di kali nilai variabel hsks di tambah isi variabel bop
    tbop = bop + (tsks*hsks)
    # percabangan: jika isi variabel tsks tidak sama dengan 0
    if tsks != 0:
        # mencetak: Biaya tambahan untuk (isi variabel tsks) SKS: (isi variabel tsks di kali isi variabel hsks)
        print("Biaya tambahan untuk", tsks, "SKS:", tsks * hsks)
    # mencetak: "total biaya kuliah: (isi variabel tbop)"
    print("Total biaya kuliah:", tbop, "\n")
    # meminta masukkan konfirmasi user dan menyimpannya kedalam variabel confirm
    confirm = input(
        "Apakah Anda ingin mengajukan subsidi biaya kuliah? (Y/T): ")
    # percabangan: jika isi variabel confirm adalah Y
    if confirm == "Y":
        # meminta masukkan user dan menyimpannya ke dalam variabel semester
        semester = eval(input("Semester berapa Anda sekarang? "))
        # medeklarasikan variabel ip dengan isi 0
        ip = 0
        # percabangan: jika variabel semester lebih besar dari 1 dan kurang dari atau sama dengan 8
        if semester > 1 and semester <= 8:
            # perulangan dari 1 sampai (isi variabel semester)
            for i in range(1, semester):
                # meminta masukkan user berupa angka dan menyimpannya ke dalam variabel rataip
                rataip = eval(input("Masukkan IP semester " + str(i) + " : "))
                # menambahkan isi variabel ip dengan variabel rataip
                ip = ip + rataip
            # mengisi nilai ip: ip dibagi isi variabel semester di kurang 1 dan membulatkan dengan maksimal 2 angka di belakang koma
            ip = round(ip / (semester-1), 2)
            # isi variabel ip di bagi 4.0 dan di kali 1000000 lalu menyimpan hasilnya ke dalam variabel subsidi
            subsidi = ip / 4.0 * 1000000
            # mencetak: "Anda mendapatkan subsidi sebesar (isi variabel subsidi yang di bulatkan)"
            print("Anda mendapatkan subsidi sebesar", round(subsidi))
            # mencetak: "Total biaya kuliah (isi variabel tbop dikurang isi variabel subsidi dan dibulatkan)"
            print("Total biaya kuliah:", round(tbop-subsidi))
        # percabangan: jika isi variabel semester lebih kecil atau sama dengan 1 dan lebih dari 8
        # maka cetak "Anda tidak bisa mengajukan subsidi biaya kuliah"
        else:
            print("Anda tidak bisa mengajukan subsidi biaya kuliah")
    # percabangan: jika isi variabel confirm adalah T maka cetak "Penghitungan biaya kuliah selesai"
    elif confirm == "T":
        print("Penghitungan biaya kuliah selesai")
    # percabangan: jika isi variabel confirm bukan salah satu dari Y atau T maka mencetak pesan kesalahan
    else:
        print("Masukkan anda salah!")
