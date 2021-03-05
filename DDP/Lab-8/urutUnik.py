def urut_unik(s):
    s = set(s.split())
    return sorted(s)


a = urut_unik('pisang jambu apel jambu pisang jeruk')
print(a)
