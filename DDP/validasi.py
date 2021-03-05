teks = ""
check = 0

while True:
    teks = str(input("Masukkan sebuah teks: "))
    last = teks[-1:-4:-1]
    if len(teks) >= 8:
        if ("NF" in teks) or ("nf" in teks) or ("Nf" in teks) or ("nF" in teks):
            if (last == "yyy") or (last == "YYY"):
                for i in range(10):
                    if str(i) in teks:
                        print("Teks valid. Program berhenti")
                        check = check + 1
                        break
    if check == 1:
        break
    else:
        print("Teks tidak valid")
