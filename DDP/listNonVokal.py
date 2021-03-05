# Mendefinisikan fungsi list_nonvokal dengan parameter s
def list_nonvokal(s):
    # Mendefinisikan variabel vokal dan variabel nvkl yang masing-masing bertipe data list
    vokal = ['a', 'i', 'u', 'e', 'o', 'A', 'I', 'U', 'E', 'O']
    nvkl = []
    # Melakukan perulangan pada baris ke-8 sampai baris ke-11 sebanyak panjang nilai variabel s
    for j in range(len(s)):
        # Mendefinisikan variabel string dengan isi s index ke j
        string = s[j]
        # Percabangan: jika isi variabel string sama dengan salah satu karakter pada variabel vokal maka skip karakter tersebut
        if string in vokal:
            continue
        # Menjumlahkan variabel nvkl dengan list nilai variabel string
        nvkl = nvkl + [string]
    # Mengembalikan variabel nvkl
    return nvkl


a = list_nonvokal("I LOVE YOU")
print(a)
