products = {'001': {'label': 'Beng-beng', 'price': 20, 'stock': 100},
            '002': {'label': 'Chocolatos', 'price': 10, 'stock': 120},
            '003': {'label': 'Pringles', 'price': 100, 'stock': 15},
            '004': {'label': 'Chitato', 'price': 70, 'stock': 20},
            '005': {'label': 'Silverqueen', 'price': 200, 'stock': 10}}

products['002']['price'] = 20

for v in products.values():
    if v['price'] < 100:
        print(v['label'])
