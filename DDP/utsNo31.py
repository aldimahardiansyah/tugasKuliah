def no31(string):
    vokal = "aiueo"
    result = 0
    for i in range(len(vokal)):
        for j in range(len(string)):
            if vokal[i].upper() in string[j].upper():
                result = result + 1
    return result

a = no31("mhj")
print(a)
