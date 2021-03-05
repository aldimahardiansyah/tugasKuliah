# Mendefinisikan fungsi list_modify dengan 4 parameter
def list_modify(alist, command, position, value=None):
    # Percabangan: jika isi variabel command adalah add maka jalankan sintaks baris 5 sampai baris 10
    if command == 'add':
        # Percabangan: jika isi variabel position adalah start maka jalankan sintaks baris berikutnya
        if position == 'start':
            # Menambahkan isi variabel value ke dalam alist index ke-0
            alist.insert(0, value)
        # Percabangan: jika isi variabel position adalah end maka tambahkan variabel value kedalam alist index terakhir
        elif position == 'end':
            alist.append(value)
        # Percabangan: jika isi variabel position bukan start ataupun end maka tampilkan pesan kesalahan
        else:
            print('Input Position invalid')
    # Percabangan: jika isi variabel command adalah remove maka jalankan sintaks baris ke-17 sampai baris ke-22
    elif command == 'remove':
        # Percabangan: jika isi variabel position adalah start maka hapus index ke-0 pada alist
        if position == 'start':
            alist.remove(alist[0])
        # Percabangan: jika isi variabel position adalah end maka hapus index terakhir pada alist
        elif position == 'end':
            alist.remove(alist[-1])
        # Percabangan: jika isi variabel position bukan start ataupun end maka tampilkan pesan kesalahan
        else:
            print('Input Position invalid')
    # Percabangan: jika isi variabel command bukan add ataupun remove maka tampilkan pesan kesalahan
    else:
        print('Input Command invalid')
    # Mengembalikan variabel alist
    return alist


a = list_modify(['ayam', 'ikan', 'kucing'], 'remove', 'end')
print(a)
