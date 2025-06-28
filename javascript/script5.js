function primos(){
    var num = document.getElementById("inumber")
    var r = document.getElementById("resp")

    if(num.value.length == 0){
        window.alert("ERRO")
    }
    else{
        var n = Number(num.value)
        if(n <= 1){
            r.innerHTML = "Numero Impossivel"
        }
        else{
            r.innerHTML = "Numeros Primos até " + n + "<br>"

            for (var i = 2; i <=n; i++){
                var j = 2

                while (j < n){
                    if(i%j == 0 && i != j){
                        break
                    }
                    j++
                }
                if( j == n){
                    r.innerHTML += i + "; "
                }
            }
        }
    }
}