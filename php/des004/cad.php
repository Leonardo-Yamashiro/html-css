<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 004</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 004</h1>
    </header>

    <main>
        <div>
            <?php 
                $inicio = date("m-d-Y",strtotime("-7 days"));
                $fim = date("m-d-Y");
                
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                $dados = json_decode(file_get_contents($url), true);

                $cota = $dados["value"][0]["cotacaoCompra"];
                $real = $_GET["numero"];
                $dolar = $real / $cota;
                echo "Seus R\$" . number_format($real,2) . " equivalem à US\$" . number_format($dolar,2);
            ?>
            <button id="idenviar" onclick="javascript:history.go(-1)">Voltar</button>
        </div>
    </main>

    <footer>
        <p>Site desenvolvido por Leonardo Siqueira Yamashiro</p>
    </footer>
</body>
</html>