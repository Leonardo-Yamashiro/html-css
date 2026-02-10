function tabuada(){
    var num = document.getElementById("inumber")
    var r = document.getElementById("resp")

    if(num.value.length == 0){
        window.alert("ERRO")
    }
    else{
        var n = Number(num.value)
        r.innerHTML = "TABUADA DO " + n + "<br>"
        for (var i=1; i<=10; i++){
            r.innerHTML += n + " X " + i + " = " + n*i +"<br>"
        }
    }
}