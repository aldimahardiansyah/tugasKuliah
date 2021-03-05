def read(filename):
    f = open(filename, 'r')
    hasil = {}
    for fc in f:
        ls = fc.split()
        hasil[ls[0]] = ls[1]
    print(hasil)


read('data2.txt')
