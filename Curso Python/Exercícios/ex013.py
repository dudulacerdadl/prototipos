salario = float(input('Digite seu salário atual: '))
bonus = salario + (salario * (15 / 100))

print('Seu salário passou de R${:.2f} para R${:.2f}.'.format(salario, bonus))
