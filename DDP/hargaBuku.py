# meminta user untuk memasukkan banyak buku yg akan dibeli dan menyimpannya kedalam variabel "banyak"
banyak = int(input("Masukkan banyaknya buku yang akan dibeli: "))

# jika pembeli memasukkan bilangan negatif maka akan menampilkan pesan kesalahan
if banyak < 0:
    print("Angka yang anda masukkan salah. Mohon periksa kembali!")

# jika isi nilai variabel "banyak" 0-10 maka akan menampilkan harga 20.000 dikali nilai variabel "banyak"
elif banyak <= 10:
    print("Harga yang harus dibayar =", banyak*20000, "Rupiah")

# jika isi nilai variabel "banyak" 11-25 maka akan menampilkan harga 18.000 dikali nilai variabel "banyak"
elif banyak <= 25:
    print("Harga yang harus dibayar =", banyak*18000, "Rupiah")

# jika isi nilai variabel "banyak" 26-50 maka akan menampilkan harga 15.000 dikali nilai variabel "banyak"
elif banyak <= 50:
    print("Harga yang harus dibayar =", banyak*15000, "Rupiah")

# jika isi nilai variabel "banyak" lebih dari 50 maka akan menampilkan harga 10.000 dikali nilai variabel "banyak"
else:
    print("Harga yang harus dibayar =", banyak*10000, "Rupiah")
