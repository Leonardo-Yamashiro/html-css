function primos(){
    var num = document.getElementById("inumber")
    var r = document.getElementById("resp")

    if(num.value.length == 0){
        window.alert("ERRO")
    }
    else{
        var n = Number(num.value)
        if(n<=1){
            r.innerHTML = "Impossivel"
        }
        else{
            var vetor =[]
            for(var i=0;i<n;i++){
                vetor.push(i)
            }
            r.innerHTML = "Lista = ["
            for(var n = 0; n < vetor.length; n++){
                if(n == vetor.length - 1){
                    r.innerHTML += vetor[n]
                    break
                }
                r.innerHTML += vetor[n] + "; "
            }
            r.innerHTML += "]"
        }
    }
}

function fatorial(){
    var num = document.getElementById("inumber")
    var r = document.getElementById("resp")

    if(num.value.length == 0){
        window.alert("ERRO")
    }
    else{
        var n = Number(num.value)
        if(n < 1){
            r.innerHTML = "Impossivel"
        }
        else if(n == 1){
            r.innerHTML = "1! = 1"
        }
        else{
            var resp = 0
            r.innerHTML = n + "! = "
            for(var x = 1; x <= n; x++){
                resp = resp + x
                if(x == n){
                    r.innerHTML += x + " = "
                    break
                }
                r.innerHTML += x + " + "
            }
            r.innerHTML += resp
        }
    }
}


function bincalc(){
    var num = document.getElementById("inumber")
    var r = document.getElementById("resp")

    if(num.value.length == 0){
        window.alert("ERRO")
    }
    else{
        var n = Number(num.value)
        if(n < 0){
            r.innerHTML = "Impossivel"
            window.alert("ERRO")
        }
        else if(n == 0){
            r.innerHTML = "2^0 = 1"
        }
        else{
            var soma = 0
            var pot = 1
            r.innerHTML = "2^" + n + " = "
            for(var x = 1; x <= n; x++){
                soma = soma + pot
                if(x == n){
                    r.innerHTML +=pot + "<br>"
                    break
                }
                r.innerHTML += pot + ", "
                pot = pot * 2
            }
            r.innerHTML += "SOMA = " + soma
        }
    }
}