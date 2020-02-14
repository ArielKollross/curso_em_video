var msg = window.document.getElementById('msg')
var img = window.document.getElementById('imagem')

var now = new Date()
var hour = now.getHours()
var mim = now.getMinutes()

//var hour = 6

function load() {

    if(hour >=5 && hour < 13) {
        //Bom dia!
        msg.innerHTML =`Bom dia, agora são ${hour}:${mim} `
        img.src = '_manha.png'
        document.body.style.background = 'rgb(175, 187, 224)'
    }else if(hour < 19) {
        //Boa Tarde!
        msg.innerHTML =`Boa tarde, agora são ${hour}:${mim} `
        img.src = '_tarde.png'
        document.body.style.background = 'rgb(55, 95, 228)'
    } else {
        //Boa noite!
        msg.innerHTML =`Boa noite, agora são ${hour}:${mim} `
        img.src = '_noite.png'
        document.body.style.background = 'rgb(32, 41, 70)'
    }
}