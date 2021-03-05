# meminta user untuk memasukkan sebuah bilangan bulat dan menyimpannya kedalam variabel sisi
sisi = int(input("Masukkan sebuah bilangan bulat: "))

# mengulangi kondisi if ataupun else sebanyak isi nilai variabel sisi
for i in range(sisi):
    print("")

    # jika isi variabel i modulo 2 sama dengan 0 maka cetak hastag(#) sebanyak isi nilai variabel sisi disertai spasi setelahnya
    if (i % 2) == 0:
        for j in range(sisi):
            print("#", end=" ")

    # jika isi variabel i modulo 2 tidak sama dengan 0 maka cetak dollar($) sebanyak isi nilai variabel sisi disertai spasi setelahnya
    else:
        for k in range(sisi):
            print("$", end=" ")
