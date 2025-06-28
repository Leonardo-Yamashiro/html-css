function contar(){
    var ini = document.getElementById("iinicio")
    var fim = document.getElementById("ifim")
    var passo = document.getElementById("ipasso")
    var resp = document.getElementById("resp")

    if(ini.value.length == 0 || fim.value.length == 0){
        window.alert("ERRO, faltam dados!")
    }
    else{
        resp.innerHTML = "Contando... "

        var i = Number(ini.value)
        var f = Number(fim.value)

        if (passo.value.length == 0 ){
            var p = 1
        }
        else{
            var p = Number(passo.value)
        }

        if(i > f){
            for(var c = i; c >= f; c -= p){
                resp.innerHTML += c + " > "
            }
        }
        else if (i == f){
            resp.innerHTML += c 
        }
        else{
            for(var c = i; c <= f; c += p){
                resp.innerHTML += c + " > "
            }
        }
        resp.innerHTML += "FIM \u{1F600}"
    }
}