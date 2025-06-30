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
            r.innerHTML = vetor
        }
    }
}