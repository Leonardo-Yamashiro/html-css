function verificar(){
    var data = new Date()
    var ano = data.getFullYear();

    var fanoA = document.getElementById('txtano')
    var fanoB = Number.parseInt(fanoA)

    var resposta = document.getElementById('resp')

    if(fanoA.value.length == 0){
        window.alert('ERRO, digite ano')
    }
    else{
    }
}