valor = float(input('Digite o valor do produto desejado: '))
desconto = valor - (valor * (5 / 100))

print('O produto com desconto saiu de R${:.2f} por R${:.2f}.'.format(valor, desconto))
