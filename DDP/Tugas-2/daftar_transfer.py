def daftar_transfer():
    print("\n*** LIHAT DAFTAR TRANSFER ***")
    norek = input("Masukkan nomor rekening sumber transfer: ").upper()

    f_nasabah = open('D:/_STTNF/Tugas/Code/DDP/Tugas-2/nasabah.txt')
    kode = 0
    for nasabah in f_nasabah:
        if norek in nasabah:
            kode = 1
    f_nasabah.close()

    if kode == 0:
        print("Nomor rekening sumber tidak terdaftar. \n")
    elif kode == 1:
        f_transfer = open('D:/_STTNF/Tugas/Code/DDP/Tugas-2/transfer.txt')
        cetak_teks = True
        kosong = True
        for transfer in f_transfer:
            list_tf = transfer.strip().split(', ')
            if norek in list_tf[1]:
                if cetak_teks == True:
                    print('Daftar transfer dari rekening', norek, ': ')
                    cetak_teks = False
                    kosong = False
                print(list_tf[0], list_tf[1], list_tf[2], list_tf[3])
        if kosong == True:
            if cetak_teks == True:
                print('Tidak ada data yang ditampilkan.')
                cetak_teks = False
        print('\n')
        f_transfer.close()


daftar_transfer()
