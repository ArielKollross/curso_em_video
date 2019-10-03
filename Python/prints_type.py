# usando a função print
n = input('Escreva algo:')

# print normal
print('Você escreveu {}!'.format(n))

# print para a esquerda usando 20 caracteres
print('Você escreveu {:>20}!'.format(n), end=' ') #end=' ' para nao ter quebra de linha

# print para a direita e usando o espaço de 20 caracteres
print('Você \n escreveu \n {:<20}!'.format(n)) # \n para qeubrar a linha

# print para centralizado e usando o espaço de 20 caracteres
print('Você escreveu {:^20}!'.format(n))

# print centralizado e preenchendo com caracteres *
print('Você escreveu {:*^20}!'.format(n))

# print centralizado e preenchendo com caracteres #
print('Você escreveu {:#^20}!'.format(n))

# print centralizado e preenchendo com caracteres =
print('Você escreveu {:=^20}!'.format(n))


v1 = 1
v2 = 3
div =v1/v2
# 2 casas depois da virgula
print('Escolehndo quantidade de casas decimias: {:.2f}'.format(v1/v2))