class Hero:
    jumlah = 0

    def __init__(self, inputName, inputHp, inputDamage):
        self.name = inputName
        self.hp = inputHp
        self.damage = inputDamage
        Hero.jumlah += 1

    def getHp(self, inputGetHp):
        self.hp -= inputGetHp

    def tambahHp(self, inputHp):
        self.hp += inputHp


hero1 = Hero("Layla", 3000, 200)
hero2 = Hero("Alucard", 3200, 190)
hero3 = Hero("Uranus", 6000, 96)

hero1.getHp(300)
hero1.tambahHp(100)

print(hero1.__dict__)
