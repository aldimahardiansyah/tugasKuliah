print("Selamat datang, Mohon pilih salah satu dari Gunting, Kertas, atau Batu!")
print("Note: Mohon masukkan tanpa huruf kapital! \n")

# meminta user untuk memasukkan pilihannya
pilihan1 = input("Masukkan pilihan Player-1: ")
pilihan2 = input("Masukkan Pilihan Player-2: ")

# percabangan untuk pilihan player-1 jika memilih gunting
if pilihan1 == "gunting":

    # jika player-2 juga memilih gunting maka akan menampilkan teks "pertandingan seri"
    if pilihan2 == "gunting":
        print("Pertandingan seri")

    # jika player-2 memilih batu maka akan menampilkan teks "Player 2 menang"
    elif pilihan2 == "batu":
        print("Player 2 menang.")

    # jika player-2 memilih kertas maka akan menampilkan teks "Player 1 menang"
    elif pilihan2 == "kertas":
        print("Player 1 menang.")

    # jika player-2 memasukkan kata selain batu, gunting dan kertas ataupun jika player-2 menggunakan huruf kapital maka akan menampilan teks "Pilihan yang anda masukkan salah, mohon periksa kembali!"
    else:
        print("Pilihan yang anda masukkan salah, mohon periksa kembali!")

# percabangan untuk pilihan player-1 jika memilih batu
elif pilihan1 == "batu":

    # jika player-2 memilih gunting maka akan menampilkan teks "Player 1 menang"
    if pilihan2 == "gunting":
        print("Player 1 menang.")

    # jika player-2 juga memilih batu maka akan menampilkan teks "pertandingan seri"
    elif pilihan2 == "batu":
        print("Pertandingan seri.")

    # jika player-2 memilih kertas maka akan menampilkan teks "Player 2 menang"
    elif pilihan2 == "kertas":
        print("Player 2 menang.")

    # jika player-2 memasukkan kata selain batu, gunting dan kertas ataupun jika player-2 menggunakan huruf kapital maka akan menampilan teks "Pilihan yang anda masukkan salah, mohon periksa kembali!"
    else:
        print("Pilihan yang anda masukkan salah, mohon periksa kembali!")

# percabangan untuk pilihan player-1 jika memilih kertas
elif pilihan1 == "kertas":

    # jika player-2 memilih gunting maka akan menampilkan teks "Player 2 menang"
    if pilihan2 == "gunting":
        print("Player 2 menang.")

    # jika player-2 memilih batu maka akan menampilkan teks "Player 1 menang"
    elif pilihan2 == "batu":
        print("Player 1 menang.")

    # jika player-2 juga memilih kertas maka akan menampilkan teks "pertandingan seri"
    elif pilihan2 == "kertas":
        print("Pertandingan seri.")

    # jika player-2 memasukkan kata selain batu, gunting dan kertas ataupun jika player-2 menggunakan huruf kapital maka akan menampilan teks "Pilihan yang anda masukkan salah, mohon periksa kembali!"
    else:
        print("Pilihan yang anda masukkan salah, mohon periksa kembali!")

# jika player-1 memasukkan kata selain batu, gunting dan kertas ataupun jika player-1 menggunakan huruf kapital maka akan menampilan teks "Pilihan yang anda masukkan salah, mohon periksa kembali!"
else:
    print("Pilihan yang anda masukkan salah, mohon periksa kembali!")
