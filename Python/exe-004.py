#03 - Crie um script Python que leia dois números e tente mostrar a soma entre eles. 
var1 = input('Digite o 1º número:')
var2 = input('Digite o 2º número:')

var1 = int(var1)
var2 = int(var2)

soma = var1+var2

print('sua soma de {} + {}, é igual a: {}'.format(var1, var2 , soma))
