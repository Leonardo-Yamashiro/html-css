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
                    resposta.innerHTML = ""
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
        var menor = vet[0]
        var media = vet[0]
        var tamanho = vet.length
        var par = 0
        var impar = 0

        for(var i = 0; i < tamanho ;i++){
            media += vet[i]
            if(maior < vet[i]){
                maior = vet[i]
            }
            if(menor > vet[i]){
                menor = vet[i]
            }
            if(vet[i]%2 == 0){
                par++
            }
            else{
                impar++
            }
        }

        resposta.innerHTML = "Media = " + (media/tamanho) + "<br>"
        resposta.innerHTML += "Maior = " + maior + "<br>"
        resposta.innerHTML += "Menor = " + menor + "<br>"
        resposta.innerHTML += "Tamanho = " + tamanho + "<br>"
        resposta.innerHTML += "Numeros Pares = " + par + "<br>"
        resposta.innerHTML += "Numeros Impares = " + impar + "<br>"
        resposta.innerHTML += "Total = " + media + "<br>"
    }
    else{
        window.alert("ERRO: lista vazia")
    }
}