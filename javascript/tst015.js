// Objeto

let amigo = {
    nome: "Ariel",
    sexo: 'M',
    peso: 62,
    engordar(p=0){
        console.log('Engordou')
        this.peso += p
    }
}

amigo.engordar(0.5)
console.log('Peso: '+amigo.peso )