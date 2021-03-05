def tarik_tunai():
    print("\n*** TARIK TUNAI ***")
    rek_tarik = input("Masukkan nomor rekening: ").upper()
    nominal_tarik = eval(input("Masukkan nominal yang akan ditarik: "))

    a_file = open('D:/_STTNF/Tugas/Code/DDP/Tugas-2/nasabah.txt')
    f_nasabah = []
    for data in a_file:
        d_nasabah = data.strip().split(', ')
        if rek_tarik in d_nasabah:
            if int(d_nasabah[2]) > nominal_tarik:
                hasil = int(d_nasabah[2]) - nominal_tarik
                d_nasabah[2] = str(hasil)
                print("Tarik tunai sebesar", nominal_tarik,
                      "dari rekening", rek_tarik, "berhasil. \n")
            else:
                print("Saldo tidak mencukupi. Tarik tunai gagal.")
        f_nasabah.append(d_nasabah)
    a_file.close()

    cek = 0
    for i in range(len(f_nasabah)):
        if rek_tarik in f_nasabah[i][0]:
            cek = 1
    if cek == 0:
        print("Nomor rekening tidak terdaftar. Tarik tunai gagal. \n")
    return f_nasabah


def upload(l):
    a_file = open('D:/_STTNF/Tugas/Code/DDP/Tugas-2/nasabah.txt', 'w+')
    for i in range(len(l)):
        a_file.write(l[i][0] + ', ' + l[i][1] + ', ' + l[i][2] + '\n')
    a_file.close()


upload(tarik_tunai())
