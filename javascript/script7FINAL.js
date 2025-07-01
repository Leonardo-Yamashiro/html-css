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