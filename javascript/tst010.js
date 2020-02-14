function parImpar(n){
    if(n%2==0){
        return "Par"
    }else{
        return "Impar"
    }
}

var teste = parImpar(12354654)
console.log(`O parâmetro passado é ${teste}!`)