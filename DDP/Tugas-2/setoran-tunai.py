def setoran_tunai():
    print("\n*** SETORAN TUNAI ***")
    rek_setor = input("Masukkan nomor rekening: ").upper()
    nominal_setor = eval(input("Masukkan nominal yang akan disetor: "))

    a_file = open('D:/_STTNF/Tugas/Code/DDP/Tugas-2/nasabah.txt')
    f_nasabah = []
    for data in a_file:
        d_nasabah = data.strip().split(', ')
        if rek_setor in d_nasabah:
            hasil = int(d_nasabah[2]) + nominal_setor
            d_nasabah[2] = str(hasil)
            print("Setoran tunai sebesar", nominal_setor,
                  "ke rekening", rek_setor, "berhasil. \n")
        f_nasabah.append(d_nasabah)
    a_file.close()

    cek = 0
    for i in range(len(f_nasabah)):
        if rek_setor in f_nasabah[i][0]:
            cek = 1
    if cek == 0:
        print("Nomor rekening tidak terdaftar. Setoran tunai gagal. \n")
    return f_nasabah


def upload(l):
    a_file = open('D:/_STTNF/Tugas/Code/DDP/Tugas-2/nasabah.txt', 'w+')
    for i in range(len(l)):
        a_file.write(l[i][0] + ', ' + l[i][1] + ', ' + l[i][2] + '\n')
    a_file.close()


upload(setoran_tunai())
