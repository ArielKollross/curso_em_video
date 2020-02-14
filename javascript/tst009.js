var Clientes = ["Bob", "Alice", "Peter", "Kelvin"]
var numb = [0,2,4,65,1,6]

console.log(Clientes)
console.log(`Tamanho do array: ${Clientes.length}`)
// add elementro dentro do array
Clientes.push("Rock Lee")
console.log(Clientes)
Clientes.push(13)
console.log(Clientes)
console.log(numb.sort())

// print
console.log("================FOR================")
for (let i=0; i<Clientes.length;i++){
    console.log(`A posição ${i}, corresponde ao elemento ${Clientes[i]}`)
}
console.log('===============FOR-in=================')
for(let i in Clientes){
    console.log(`A posição ${i} = elemento[${Clientes[i]}]`)
}

console.log("===============INDEX================")
console.log(`${Clientes.indexOf(1)}, se apareser -1, isso corresponde a elemento não encontrado`) // não esxiste este elemento, reporta -1
console.log(Clientes.indexOf(13))
console.log(Clientes.indexOf("Bob"))