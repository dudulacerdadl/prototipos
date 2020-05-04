carteira = float(input('Digite o valor encontrado na sua carteira: '))
dolar = carteira / 3.27

print('Você apresentou um total de R${:.2f} em sua carteira, que equivalem a US${:.2f}.'.format(carteira, dolar))
