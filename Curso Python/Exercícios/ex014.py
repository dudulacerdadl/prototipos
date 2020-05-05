cel = float(input('Digite a temperatura em °C: '))
far = (cel * 9 / 5) + 32 
kel = cel + 273.15

print('A temperatura de {}°C pode ser convertida em {}°F e {}°K.'.format(cel, far, kel))
