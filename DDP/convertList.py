def convert_list(multilist):
    result = []
    panjang = len(multilist)
    for i in range(panjang):
        result = result + multilist[i]
    return result


print(convert_list([[1, 2, 3], ['apel', 'jeruk']]))
