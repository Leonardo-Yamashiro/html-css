<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 003</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 003</h1>
    </header>

    <main>
        <div>
            <?php 
                //$padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
                $cota = 5.17;
                $real = $_GET["numero"] ?? "0";
                $dolar = $real / $cota;
                //echo "Seus R\$" . numfmt_format_currency($padrao, $real,"BRL") . " equivalem à US\$" . number_format($dolar,2);
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