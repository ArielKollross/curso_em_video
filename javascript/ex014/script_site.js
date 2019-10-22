var msg = window.document.getElementById('msg')
var img = window.document.getElementById('imagem')

var now = new Date()
var hour = now.getHours()
var mim = now.getMinutes()

//var hour = 6

function load() {
    msg.innerHTML =`Agora são ${hour}:${mim} `

    if(hour >=5 && hour < 13) {
        //Bom dia!
        img.src = '_manha.png'
        document.body.style.background = 'rgb(175, 187, 224)'
    }else if(hour < 19) {
        //Boa Tarde!
        img.src = '_tarde.png'
        document.body.style.background = 'rgb(55, 95, 228)'
    } else {
        //Boa noite!
        img.src = '_noite.png'
        document.body.style.background = 'rgb(32, 41, 70)'
    }
}