# Desafio 007: calcular duas notas e mostrar a média

print('Calculo da média')

n1 = float(input('Nota 1:'))
if n1 > 10 :
	print('valor invalido')
else:	
	n2 = float(input('Nota 2:'))
	if n2 > 10 :
		print('valor invalido')
	else:	
		media = (n1 + n2 )/ 2.0

		print('A média do aluno é {}'.format(media))

		if media >= 7.0 :
			print('O aluno está aprovado')
		else :
			print('O aluno reproveu, possivelmente vc é um mal professor')