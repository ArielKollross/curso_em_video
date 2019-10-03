var1 = float(input('escreva um numero:'))
var2 = float(input('escreva um numero:'))
var3 = float(input('escreva um numero:'))

print('vamos ver qual destes numeros é o maior')

if var3 > var2 :
	numb1 = var3
	numb2 = var2
else :
	numb1 = var2
	numb2 = var3
if numb1 > var1 :
	print('{} é maior que {} e {}'.format(numb1,var1,numb2))
else :
	print('{} é maior que {} e {}'.format(var1,numb1,numb2))
