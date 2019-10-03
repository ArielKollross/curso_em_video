# Desafio 011: Calcule a area de uma parede e verifique o consumo de tinta por m**2, 1L pint 2m**2

print('Consumo de tinta para pintar uma parede')

base   = float(input('Informe a medida da base:'))
altura = float(input('Informe a medida da altura:'))

area = base * altura

print('o consumo de tinta para pintar a parede de {}m² será de {}L'.format(area,area/2))