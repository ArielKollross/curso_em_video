#02 - Crie um script Python que leia o dia, o mês e o ano de nascimento de uma pessoa e mostre uma mensagem com a data formatada.

#Resolução

#Entrada do usuário
ans1 = input('Qual o dia do seu aniversário? ')
ans2 = input('Qual o mês do seu aniversário? Somente números ')
ans3 = input('Qual o ano do seu aniversário ')

#Impressão
#print('Sua data de nascimento é:', ans1+'/'+ans2+'/'+ans3)

#impressão2
print('Sua data de nascimento é: {}/{}/{}'.format(ans1, ans2, ans3))
