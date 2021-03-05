print("Fitur Kalkulator Biaya Kuliah")
nim = input("Masukkan NIM: ")
thn = nim[5:7]
bop = 0
hsks = 0

if thn == "17":
    bop = bop + 2800000
    hsks = hsks + 130000
elif thn == "18":
    bop = bop + 3200000
    hsks = hsks + 150000
elif thn == "19":
    bop = bop + 3500000
    hsks = hsks + 175000
elif thn == "20":
    bop = bop + 4000000
    hsks = hsks + 200000
else:
    print("NIM yang Anda masukkan salah. mohon periksa kembali!")

if bop != 0:
    print("BOP mahasiswa angkatan", "20"+thn, "adalah", bop, "\n")

    sks = input("Jumlah SKS yang diambil semester ini: ")
    tsks = eval(sks) - 15
    tbop = bop + (tsks*hsks)
    if tsks != 0:
        print("Biaya tambahan untuk", tsks, "SKS:", tsks * hsks)
    print("Total biaya kuliah:", tbop, "\n")
    confirm = input(
        "Apakah Anda ingin mengajukan subsidi biaya kuliah? (Y/T): ")
    if confirm == "Y":
        semester = eval(input("Semester berapa Anda sekarang? "))
        ip = 0
        if semester > 1 and semester <= 8:
            for i in range(1, semester):
                rataip = eval(input("Masukkan IP semester " + str(i) + " : "))
                ip = ip + rataip
            ip = round(ip / (semester-1), 2)
            subsidi = ip / 4.0 * 1000000
            print("Anda mendapatkan subsidi sebesar", round(subsidi))
            print("Total biaya kuliah:", round(tbop-subsidi))
        else:
            print("Anda tidak bisa mengajukan subsidi biaya kuliah")
    elif confirm == "T":
        print("Penghitungan biaya kuliah selesai")
    else:
        print("Masukkan anda salah!")
