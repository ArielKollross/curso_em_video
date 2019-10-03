# Desafio 018: leio um angulo e mostre, sin, cos, tg
from math import cos, sin, tan

rad = float(input('Entre com valor em radianos:'))

print('cos = {}, sin = {}, tg = {}'.format(cos(rad), sin(rad), tan(rad)))