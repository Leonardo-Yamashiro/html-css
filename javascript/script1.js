
function carregar(){
    var mensagem = window.document.getElementById('mensagem')
    var imagem = window.document.getElementById('imagem')
    var fundo = window.document.getElementById('bd')
    var data = new Date()
    var hora = data.getHours()
    mensagem.innerText = `Agora são ${hora} horas.`
    if (hora>0 && hora<=12){
        imagem.src = 'imagens/manha.png'
        fundo.style.background = 'orange'
    }
    else if (hora>12 && hora<=18){
        imagem.src = 'imagens/tarde.png'
        fundo.style.background = 'lightblue'
    }
    else{
        imagem.src = 'imagens/noite.png'
        fundo.style.background = 'purple'
    }
}