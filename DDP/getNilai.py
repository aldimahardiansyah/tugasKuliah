def get_nilai(filename, nama):
    file = open(filename)
    none = 0
    for isi in file:
        list_nilai = isi.upper().split()
        if nama.upper() in list_nilai:
            hasil = (round(float(list_nilai[1])))
            none = none + 1
    if none == 0:
        return "None"
    else:
        return hasil


a = get_nilai('nilai2.txt', 'agus')
print(a)
