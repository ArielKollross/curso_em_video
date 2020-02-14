//calculo do fatorial

function fatorial(i){
    if(i==0 || i==1){
        return 1
    }else{
        let aux = 1
        for(let k=i;k>1;k--){
            aux *=k // aux= aux*k
        } 
        return aux
    }
    
}

console.log(`fatorial: ${fatorial(4)}`)