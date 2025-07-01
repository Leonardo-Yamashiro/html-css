function add(){
    var valor = document.getElementById("inumber")
    var lista = document.getElementById("ilista")

    if(valor.value.length == 0){
        window.alert("ERRO: valor nao foi inserido.")
    }
    else{
        var vet = []
        var num = Number(valor.value)
        if(num < 1 || num > 100){
            window.alert("ERRO: valor invalido")
        }
        else{
            if(vet.length == 0){
                vet.push(num)
                lista.innerHTML += "Adicionado: " + num + "<br>"
            }
            else{
                window.alert("ERRO: valor ja esta presente na lista")
            }
        }
    }
}