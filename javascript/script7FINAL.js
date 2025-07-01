var vet = []
var valor = document.getElementById("inumber")
var lista = document.getElementById("ilista")
var resposta = document.getElementById("iresposta")

function inLista(n,l){
    if(l.indexOf(n) == -1){
        return true
    }
    else{
        return false
    }
}

function add(){
    if(valor.value.length == 0){
        window.alert("ERRO: valor nao foi inserido.")
    }
    else{
        var num = Number(valor.value)
        if(num < 1 || num > 100){
            window.alert("ERRO: valor invalido")
        }
        else{
            if(vet.length == 0){
                vet.push(num)
                lista.innerHTML += "<option value=" + " " + "> Adicionado " + num +"</option>"
            }
            else{
                if(inLista(num,vet)){
                    vet.push(num)
                    lista.innerHTML += "<option value=" + " " + "> Adicionado " + num +"</option>"
                }
                else{
                    window.alert("ERRO: valor ja existe")
                }
            }
        }
    }
}

function media(){
    if(vet.length != 0){
        var maior = 0
        var menor = 101
        var media = 0
        var tamanho = vet.length
        for(var i = 0; i < tamanho ;i++){
            media += vet[i]
            if(maior < vet[i]){
                maior = vet[i]
            }
            if(menor > vet[i]){
                menor = vet[i]
            }
        }
        var resultado = media / tamanho
        resposta.innerHTML = "Media = " + resultado + "<br>"
        resposta.innerHTML += "Maior = " + maior + "<br>"
        resposta.innerHTML += "Menor = " + menor + "<br>"
    }
    else{
        window.alert("ERRO: lista vazia")
    }
}