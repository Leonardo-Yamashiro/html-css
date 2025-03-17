function verificar(){
    var data = new Date()
    var ano = data.getFullYear();

    var fano = document.getElementById('txtano')

    var resposta = document.getElementById('resp')

    if(fano.value.length == 0){
        window.alert('ERRO, digite ano')
    }
    else{
        var sex = document.getElementsByName('radsex')
        var idade = ano - Number(fano.value)

        var imagem = document.createElement('img')
        imagem.setAttribute('id','foto')

        if (sex[0].checked){
            if(idade <= 3){
                imagem.setAttribute('src','imagens/bebe.jpg')
            }
            else if (idade <= 12){}
            else if(idade <= 21){}
            else if(idade <= 60){}
            else{}
            resposta.innerHTML = `Homem de ${idade} anos`
            resposta.appendChild(imagem)
        }
        else{
            resposta.innerHTML = `Mulher de ${idade} anos`
        }
    }
}