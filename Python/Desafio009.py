# Desafio 009 : calculo da tabuada de um nuemero

print('Vamos calcular a tabuada')
n = int(input('calcular a tabuado do:'))

print('='*14)
i = 0 
while i < 11:
 	print('{:2} x {:2} = {:2}'.format(n,i,n*i))
 	i = i + 1
print('='*14)

# ou da fomra mais 'basica'
#print('{} x {} = {}'.format(1,n,n*1))
#print('{} x {} = {}'.format(2,n,n*2))
#print('{} x {} = {}'.format(3,n,n*3))
#print('{} x {} = {}'.format(4,n,n*4))
#print('{} x {} = {}'.format(5,n,n*5))
#print('{} x {} = {}'.format(6,n,n*6))
#print('{} x {} = {}'.format(7,n,n*7))
#print('{} x {} = {}'.format(8,n,n*8))
#print('{} x {} = {}'.format(9,n,n*9))
#print('{} x {} = {}'.format(10,n,n*10))