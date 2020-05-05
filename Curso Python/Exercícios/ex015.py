km = float(input('Digite o número de Km percorridos: '))
dias = int(input('Digite o número de dias usados: '))
custo = (60 * dias) + (km * 0.15)

print('Por ter andado {}Km por {} dias, você terá um custo de R${:.2f}.'.format(km, dias, custo))
