function verificar(){
    var data = new Date()
    var ano = data.getFullYear();

    var fano = document.getElementById('txtano')

    var resposta = document.getElementById('resp')

    if(fano.value.length == 0){
        window.alert('ERRO, digite ano')
    }
    else{
        var fundo = document.getElementById('bd')
        fundo.style.background = `blue`

        var sex = document.getElementsByName('radsex')
        var idade = ano - Number(fano.value)

        var imagem = document.createElement('img')
        imagem.setAttribute('id','foto')

        
        if (sex[0].checked){
            if(idade <= 3){
                imagem.setAttribute('src','imagens/bebe.jpg')
            }
            else if (idade <= 12){
                imagem.setAttribute('src','imagens/criança.jpg')
            }
            else if(idade <= 21){
                imagem.setAttribute('src','imagens/jovem.jpg')
            }
            else if(idade <= 60){
                imagem.setAttribute('src','imagens/adulto.jpg')
            }
            else{
                imagem.setAttribute('src','imagens/idoso.jpg')
            }
            resposta.innerHTML = `Homem de ${idade} anos`
            resposta.appendChild(imagem)
        }
        else{

            var fundo = document.getElementById('bd')
            fundo.style.background = `pink`

            if(idade <= 3){
                imagem.setAttribute('src','imagens/bebe.jpg')
            }
            else if (idade <= 12){
                imagem.setAttribute('src','imagens/criança.jpg')
            }
            else if(idade <= 21){
                imagem.setAttribute('src','imagens/jovem.jpg')
            }
            else if(idade <= 60){
                imagem.setAttribute('src','imagens/adulto.jpg')
            }
            else{
                imagem.setAttribute('src','imagens/idoso.jpg')
            }
            resposta.innerHTML = `Mulher de ${idade} anos`
            resposta.appendChild(imagem)
        }
    }
}