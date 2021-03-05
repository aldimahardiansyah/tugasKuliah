# mendefinisikan fungsi sort_desc dengan parameter arr
def sort_desc(arr):
    # perulangan: mengulang sebanyak panjang variabel arr dikurang satu
    for i in range(len(arr)-1):
        # perulangan: mengulang sebanyak panjang variabel arr dikurang 1 dan dikurang nilai variabel i
        for j in range(len(arr)-1-i):
            # percabangan: jika arr index ke j lebih kecil dari arr index ke j+1 maka tukarkan nilainya
            if arr[j] < arr[j+1]:
                arr[j], arr[j+1] = arr[j+1], arr[j]                
    return arr


print(sort_desc([4, 3, 6, 7, 1]))
