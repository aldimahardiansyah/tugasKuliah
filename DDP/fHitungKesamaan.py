def hitung_kesamaan(kata1="", kata2=""):
    kesamaan = 0
    if len(kata1) > len(kata2):
        for i in range(len(kata2)):
            if kata1[i] == kata2[i]:
                kesamaan = kesamaan + 1
    else:
        for i in range(len(kata1)):
            if kata1[i] == kata2[i]:
                kesamaan = kesamaan + 1
    return kesamaan


hasil = hitung_kesamaan('python', 'path')
print(hasil)
