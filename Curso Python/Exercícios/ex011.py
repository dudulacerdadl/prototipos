altura = float(input('Digite a altura da parede: '))
largura = float(input('Digite a largura da parede: '))
area = altura * largura

print('A área a ser pintada equivale a {:.3f}m², e serão gastos {:.1f}L de tinta para pintá-la.'.format(area, area / 2))
