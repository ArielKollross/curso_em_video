# Desafio 015: leia quantidade de dias e Km rodado, o custo R$ 60/dia além do custo de R$ 0.15/km

dias = int(input('Numero de dias utilizados: '))
km = float(input('Numero de Km rodados: '))

alugel = 60*dias + km*0.15

print('O valor total a ser pago é de: {:.2f}'.format(alugel))