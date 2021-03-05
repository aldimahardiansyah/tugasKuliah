def cetak_nama(nama=""):
    if nama != "":
        for i in range(len(nama)+1):
            print(nama[:i])
        print(nama+"!")
    else:
        print("Tidak ada nama yang dicetak")


cetak_nama('Nurul')
