var1=input(('digite algo:'))
print('tipo',type(var1))
print('é numérico?',var1.isnumeric())
print('é letra?',var1.isalpha())
print('é alfanumérico?',var1.isalnum())
print('Só tem letras minusculas?',var1.islower())
print('Só tem letras mauisculas?',var1.isupper())
print('Esta capitalizada?',var1.istitle()) # se tem letra MAIUSCULAS + minusculas
print('é espaço?',var1.isspace())
print('é decimal?',var1.isdecimal())
print('é um identificador valido? {}'.format(var1.isidentifier()) # se pode ser utilizado para ser um identificador válido 
