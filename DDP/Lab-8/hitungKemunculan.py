def hitung_kemunculan(s):
    result = {}
    s = s.split()
    for i in range(len(s)):
        result[s[i]] = 1
        for j in range(len(s)):
            if (s[j] == s[i]):
                result[s[j]] = result[s[j]] + 1
        result[s[i]] = result[s[i]] - 1
    return result


a = hitung_kemunculan('pisang jambu apel jambu pisang jeruk')
print(a)
