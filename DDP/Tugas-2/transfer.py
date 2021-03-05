import random
import string


def transfer():
    print("\n*** TRANSFER ***")
    rek_sumber = input("Masukkan nomor rekening sumber: ").upper()
    rek_tujuan = input("Masukkan nomor rekening tujuan: ").upper()
    nominal_tf = eval(input("Masukkan nominal yang akan ditransfer: "))

    a_file = open('D:/_STTNF/Tugas/Code/DDP/Tugas-2/nasabah.txt')
    f_nasabah = []
    for data in a_file:
        d_nasabah = data.strip().split(', ')

        # mengurangi saldo rekening sumber
        if rek_sumber in d_nasabah:
            if int(d_nasabah[2]) > nominal_tf:
                hasil = int(d_nasabah[2]) - nominal_tf
                d_nasabah[2] = str(hasil)
            else:
                print("Saldo tidak mencukupi. Transfer tunai gagal.")

        # menambahkan saldo rekening tujuan
        if rek_tujuan in d_nasabah:
            result = int(d_nasabah[2]) + nominal_tf
            d_nasabah[2] = str(result)
        f_nasabah.append(d_nasabah)
    a_file.close()

    # memeriksa keberadaan nomor rekening sumber dan tujuan
    cek_sumber = 0
    cek_tujuan = 0
    gagal_transfer = False
    for i in range(len(f_nasabah)):
        if rek_sumber in f_nasabah[i][0]:
            cek_sumber = 1
        if rek_tujuan in f_nasabah[i][0]:
            cek_tujuan = 1

    if (cek_sumber == 0) and (cek_tujuan == 0):
        print("Nomor rekening sumber dan tujuan tidak terdaftar. Transfer tunai gagal. \n")
        gagal_transfer = True
    elif cek_sumber == 0:
        print("Nomor rekening sumber tidak terdaftar. Transfer tunai gagal. \n")
        gagal_transfer = True
    elif cek_tujuan == 0:
        print("Nomor rekening tujuan tidak terdaftar. Transfer tunai gagal. \n")
        gagal_transfer = True

    if gagal_transfer == False:
        print("Transfer tunai sebesar", nominal_tf,
              "dari rekening", rek_sumber, "ke rekening ", rek_tujuan, "berhasil. \n")

        no_tf = "TRF" + ''.join(random.choice(string.digits) for _ in range(3))

        f_transfer = open(
            'D:/_STTNF/Tugas/Code/DDP/Tugas-2/transfer.txt', 'a+')
        f_transfer.write(no_tf + ', ' + rek_sumber + ', ' +
                         rek_tujuan + ', ' + str(nominal_tf) + '\n')
        f_transfer.close()

        return f_nasabah


def upload(l):
    if l != None:
        a_file = open('D:/_STTNF/Tugas/Code/DDP/Tugas-2/nasabah.txt', 'w+')
        for i in range(len(l)):
            a_file.write(l[i][0] + ', ' + l[i][1] + ', ' + l[i][2] + '\n')
        a_file.close()


upload(transfer())
