# aula08a
#import math # gasta mais memoria para impotar tudo
from math import sqrt, floor 
#floor = arredondamento para baixo
import random

num = float(input('Escreva um nuumero:'))
num1 = random.random()
num2 =random.randint(1,100)
# raiz = math.sqrt(num) #notação quando se é importado toda math (import math)
raiz = sqrt(num) # notação para quando chamo funções específicas

print('a raiz quadrada é {:.4f}'.format(floor(raiz)))

print('Numero aleatório float entre 0 e 1{} e o outro entre a range desejada é {} '.format(num1,num2))