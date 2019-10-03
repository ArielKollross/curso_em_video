# Desafio 019 : leia o nome de 4 alunos e faça o sorteio entre eles
from random import choice

alu = [0,1,2,3]
i=0
while i < 4 :
	alu[i] = input('Digite o nome do aluno:') # atribuindo str a cada posição da lista
	i = i + 1
escolhido = choice(alu)

print('O escolhido foi: {}'.format(escolhido))