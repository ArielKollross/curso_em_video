var age = 65
if(age >= 18 && age < 66){
    console.log('Seu voto eh obrigatorio!')
}else{
    if(age >= 16 && age < 18 || age > 66){
        console.log(`Vc pode votar, mas nao eh obrigatorio`)
    }else{
        console.log(`Voce nao pode votar ainda!`)
    }
}   

console.log('======================================================')

if(age < 16){
    console.log('nao vota')
}else if(age < 18){
    console.log('voto nao obrigatirio, mas pode votar')
}else if(age <66){
    console.log('Seu voto eh obrigatorio')
}else{
    console.log('vc atingiu a 3a idade, nao precisa votar se nao quiser')
}