# Desafio 017: le medida do cateto oposto e do adjcente e calula a hipotenusa
from math import hypot
oposto = float(input('Entre com o valor do cateto oposto:'))
adjacente = float(input('Entre com o valor do cateto adjacente:'))

hip = hypot(adjacente,oposto)

print('O valor da hipotenusa é {}'.format(hip))