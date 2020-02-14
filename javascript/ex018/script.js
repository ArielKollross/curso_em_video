/* add numero na memoria de um array
não pode repitir valor incluido
valir se tem entrada de dados 

Ao chamar a função:
1 -quantidade de numeros cadastraos
2- mostrar qual foi o maior valor informado
3- mostrar qual foi o menor valor informado
4 - Somar todos e fazer a média entre eles
*/
let numb = document.getElementById('numb')
let res = document.getElementById('res')
let msg = document.getElementById('msg')
let numberList = []
numb.focus()
function add(){
    //Validações
    if(numb.value.length == 0){
        window.alert("Adicione um valor ")
    }else if(numb.value < 1 || numb.value > 200){
        window.alert("numero não permitido para este intervalo")
    }else{
        var numbAux = Number(numb.value)
        res.innerHTML = ''
        if(numberList.indexOf(numbAux) === -1){
            numberList.push(numbAux)
            console.log(numberList)

            for(let i in numberList){
                let auxTxt = document.createElement('option')
                auxTxt.text = `valor adicionado: ${numberList[i]}`
                res.appendChild (auxTxt)
                msg.innerHTML = ''
            }
        }else{
            window.alert('Elemento do array repetido, mude o valor')
        }
    }
    numb.value = ''
    numb.focus()
}

function calcular(){
    if(numberList.length == 0){
        window.alert('Não foram adicionaos nenhum valor ainda!')   
    }else{
        let maior = numberList[0]
        let menor = numberList[0]
        let soma = 0
    
        for(let i in numberList){
            soma += numberList[i]
            if(numberList[i] >= maior){
                maior = numberList[i]
            if(numberList[i] <= menor )
                menor = numberList[i]
            }
        }
        //media
        let med = soma / Number(numberList.length)

        msg.innerHTML = `O array tem ${numberList.length} elementos </br>` 
        msg.innerHTML += `O maior número é: ${maior} </br>`
        msg.innerHTML += `O menor número é: ${menor} </br>`
        msg.innerHTML += `A soma de todos os elementos é: ${soma} </br>`
        msg.innerHTML += `A média entre os elementos é: ${med} </br>`
    }
    numb.value = ''
    numb.focus()
}