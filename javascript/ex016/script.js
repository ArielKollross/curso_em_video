var res = document.getElementById('res')

function contar() {
    // variais, let -> só usa dentro do bloco
    let start = document.getElementById('start').value
    let end = document.getElementById('end').value
    let loop = document.getElementById('loop').value

    if(start.length == 0 || end.length == 0 || loop.length ==0){
        window.alert('Complete os campos')
    }else if(loop == 0 || loop < 0){
        window.alert('[ERRO] - Passo deve ser != || > 0')
    }else {
        let inicio = Number(start)
        let fim = Number(end)
        let passo = Number(loop)
        res.innerHTML = "Contando:<br> "

        if(inicio < fim){
            for(inicio; inicio<=fim; inicio+=passo){
                res.innerHTML += `${inicio}  \u{1F449}` 
            }
        }else{
            for(inicio; inicio>=fim; inicio-=passo){
                res.innerHTML += `${inicio} \u{1F449}`
            }
        }    
        res.innerHTML += " :() The End"
    }
}