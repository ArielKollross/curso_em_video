# Desafio 014 : Conversor de temperatura

Celcius = float(input('Informe a temperatura em graus Celcius:'))

Fahrehaint = (Cel * 9)/5 + 32
Kelvin = 273.15 + Cel

print('A temperatura {} equivale à {}ºF e à {}K'.format(Celcius,Fahrehaint,Kelvin))