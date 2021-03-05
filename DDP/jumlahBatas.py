# Mendefinisikan fungsi jumlah_batas dengan parameter nums dan batas
def jumlah_batas(nums, batas):
    # Mendefinisikan variabel result dengan isi nol
    result = 0
    # Melakukan perulangan pada variabel nums
    for i in nums:
        # Percabangan: jika isi variabel i lebih besar dari isi variabel batas maka jalankan sintaks berikutnya
        if i > batas:
            # Menjumlahkan isi variabel result dengan isi variabel i lalu menyimpannya kedalam variabel result
            result = result + i
    # Mengembalikan variabel result
    return result


a = jumlah_batas([1, 2, 3, 5, 5, 6], 2)
print(a)
