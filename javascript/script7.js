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