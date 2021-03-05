def format_rupiah(uang):
    if len(uang) <= 3:
        return "Rp. " + uang
    else:
        p = uang[-3:]
        q = uang[:-3]
        return format_rupiah(q) + '.' + p


def info_rekening():
    norek = input("\nMasukkan nomor rekening: ").upper()
    cetak_kesalahan = True

    a_file = open('D:/_STTNF/Tugas/Code/DDP/Tugas-2/nasabah.txt')
    for nasabah in a_file:
        d_nasabah = nasabah.strip().split(', ')
        if norek in d_nasabah:
            cetak_kesalahan = False
            print("\n *************** INFO REKENING ***************")
            print("\n\tNomor rekening:\t", d_nasabah[0], "\t\n")
            print("\tNama nasabah:\t", d_nasabah[1], "\t\n")
            print("\tSaldo saat ini:\t", format_rupiah(d_nasabah[2]), "\t\n")
            print(" *********************************************\n")
    if cetak_kesalahan == True:
        print("Nomor rekening tidak terdaftar!\n")


info_rekening()
