<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 008</h1>
    </header>
    <section>
        <?php
            $valor1 = $_GET['numero1']??0;
            $valor2 = $_GET['numero2']??0;
            
            $inicio = date("m-d-Y",strtotime("-7 days"));
            $fim = date("m-d-Y");
            
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            
            $cota = $dados["value"][0]["cotacaoCompra"];
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="numero1">Coloque Valor em Reais:</label>
            <input type="number" name="numero1" id="inumero1" value="<?= $valor1 ?>" step="0.01">
            <label for="numero2">Coloque Valor Desejado em Dolares:</label>
            <input type="number" name="numero2" id="inumero2" value="<?= $valor2 ?>" step="0.01">
            
            <input type="submit" value="Calcular" id="idenviar">

            <?php
                $real = $valor1/$cota;
                $dolar = $valor2*$cota;
                echo "<p>Valor dolar: " . number_format($cota,2) . ".</p>";
                echo "<p>Valor obtido " . number_format($real,2) . " com $valor1 reais.</p>";
                echo "<p>Valor necessario " . number_format($dolar,2) . " para $valor2 dolares.</p>";
            ?>
        </form>
    </section>

    <footer>
        <p>Site desenvolvido por Leonardo Siqueira Yamashiro</p>
    </footer>
</body>
</html>