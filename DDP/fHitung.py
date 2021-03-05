def hitung(bil1, bil2, operator='+'):
    if operator == '+':
        return bil1 + bil2
    elif operator == '-':
        return bil1 - bil2
    elif operator == '*':
        return bil1 * bil2


hitung = hitung(12, 14, '*')
print(hitung)
