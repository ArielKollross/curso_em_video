# Desafio 019 : leia o nome de 4 alunos e faça o sorteio entre eles
from random import choice

alu1 = input('Entre com o 1o aluno:')
alu2 = input('Entre com o 2o aluno:')
alu3 = input('Entre com o 3o aluno:')
alu4 = input('Entre com o 4o aluno:')

escolinho = [alu1, alu2, alu3, alu4] #lista 

print('O sorteado foi {}'.format(choice(escolinho)))