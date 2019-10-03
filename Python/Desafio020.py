# Desafio 020: sortear oredem de apresentação entre 4 alunos
from  random import	shuffle 

alu1 = input('Nome do 1o aluno:')
alu2 = input('Nome do 2o aluno:')
alu3 = input('Nome do 3o aluno:')
alu4 = input('Nome do 4o aluno:')

lista = [alu1, alu2, alu3, alu4]
shuffle(lista)

print('A ordem de sorteio será {}'.format(lista))