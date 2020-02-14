// Definindo data atual
var present_date = new Date()
var present_year = present_date.getFullYear()
// Input do usuário
var userInputYear = document.getElementById('ano_nasc').value
var msg = document.querySelector('div#msg')
var genderAux = document.getElementsByName('gender')
var genderUser = ''
// Inserindo uma imagem 
var img = document.createElement('img')
img.setAttribute('id','image') // setendo um id=image

function check() {
    
    if ( userInputYear > present_year || userInputYear.length == 0 || userInputYear < 1900){
        window.alert('Erro, ano de nascimento inválido!')
    }else {
    
        var userAge = present_year - userInputYear
        console.log(`Age: ${userAge}`)
            //verificando sexo do usuário
            if ( genderAux[0].checked){
                genderUser = "Homem"
                var prefixo = "um"
                        if(userAge > 0 && userAge < 11){
                            // criança
                            img.setAttribute('src','Img/foto-bebe-m.png')
                        }else if(userAge < 24){
                            //jovem
                            img.setAttribute('src','Img/foto-jovem-m.png')
                        }else if(userAge < 55){
                            //Adulto
                            img.setAttribute('src','Img/foto-adulto-m.png')
                        }else{
                            //idoso
                            img.setAttribute('src','Img/foto-idoso-m.png')
                        }         
            }else{
                genderUser = "Mulher"
                var prefixo = "uma"
                    if(userAge > 0 && userAge < 11){
                        // criança
                        img.setAttribute('src','Img/foto-bebe-f.png')
                    }else if(userAge < 24){
                        //jovem
                        img.setAttribute('src','Img/foto-jovem-f.png')
                    }else if(userAge < 55){
                        //Adulto
                        img.setAttribute('src','Img/foto-adulto-f.png')
                    }else{
                        //idoso
                        img.setAttribute('src','Img/foto-idoso-f.png')
                     }
            }        
        msg.innerHTML  = `Você é ${prefixo} ${genderUser}, com ${userAge} anos!`
        msg.appendChild(img)
    }

}