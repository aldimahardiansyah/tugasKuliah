def nilai_max(filename):
    f = open(filename)
    nilai = 0
    u = []
    for i in f:
        s = i.split()
        if nilai < float(s[1]):
            nilai = float(s[1])
            u.append(s[0])
    hsl = u[-1]
    hsl1 = (hsl, nilai)

    f.close()
    return hsl1


print(nilai_max('nilai2.txt'))
