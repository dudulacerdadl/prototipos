n1 = int(input('Digite um valor: '))
n2 = int(input('Digite outro número: '))
soma = n1 + n2
subi = n1 - n2
multi = n1 * n2
divi = n1 / n2
diviinte = n1 // n2
divirest = n1 % n2
expo = n1 ** n2

print('A soma entre {} e {} equivale a {}, \n Equanto a subtração tem o valor de {}, \n A multiplicação de {}, \n A divisão de {:.3f}, sendo a divisão inteira {} e o resto de divisão {}, \n E a exponenciação {}.'.format(n1, n2, soma, subi, multi, divi, diviinte, divirest, expo))

'''
nome = input('Digite seu nome: ')
print('Prazer em te conhecer, {:=^20}!'.format(nome))
'''