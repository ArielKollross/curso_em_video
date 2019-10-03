# Interactive calculator, by Ariel Kollross

from math import sqrt

print('Escolha o numéro correspondente da operação que deseja realizar')

print('Soma entre dois numéros: 1')
print('Subtração ente dois numéros: 2')
print('Multiplicação ente dois numeros 3')
print('Divisão entre dois numéros: 4')
print('Potenciação entre dois numeros: 5')
print('Raiz quadrada de um numero: 6')

ope =int(input('Selecione o numéro da operação correspondente:'))

if ope == 6 :
	var1 = float(input('entre com o primeiro numéro:'))
	raiz = sqrt(var1)
	print('A raiz quadrada de {} é {}'.format(var1,raiz))
else :

	var1 = float(input('entre com o primeiro numéro:'))
	var2 = float(input('entre com o segundo numéro:'))

	if ope == 1 :
		sum = var1 + var2
		print('A soma entre {} e {}, vale: {}'.format(var1,var2,sum))

	if ope == 2 :
		sub = var1 - var2
		print('A subtração entre {} e {}, vale: {}'.format(var1,var2,sub))

	if ope == 3 :
		mult = var1 * var2
		print('A Multiplicação entre {} e {}, vale: {}'.format(var1,var2,mult))

	if ope == 4 :
		if var2 == 0 :
			print('Divisão por zero é impossivel')
		else :
			div = var1/var2
			print('A Divisão entre {} e {}, vale: {}'.format(var1,var2,div))

	if ope == 5 :
		pot = pow(var1,var2)
		print('{} elevado a {}, vale: {}'.format(var1,var2,pot))
