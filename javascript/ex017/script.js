function tabuada() {

var num = document.getElementById('num').value
var res = document.getElementById('res')

    if( num.length == 0){
        window.alert("informe um numero")
    }else{
        let number = Number(num)
        let count = 0
        res.innerHTML = ''
            while(count <= 10){
                let aux = document.createElement('option')
                aux.text += `${number} x ${count} = ` + number*count
                res.appendChild(aux)
                count++
            }
    }
}