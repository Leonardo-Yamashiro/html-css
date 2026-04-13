<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 011</h1>
    </header>
    <section>
        <?php
            $valor1 = $_GET['numero1']??0;
            $valor2 = $_GET['numero2']??0;
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">

            <label for="numero1">Digite um preço:</label>
            <input type="number" name="numero1" id="inumero1" value="<?= $valor1 ?>" min="0" step="0.01">

            <label for="numero2">Reajuste de <span id="por">?</span>%</label>
            <input type="range" name="numero2" id="numero2" min="0" max="100" value="<?= $valor2 ?>" step="1" onclick="mudaValor()">

            <input type="submit" value="Calcular" id="idenviar">
        </form>

        <br>

        <div id="container">
            <h1>Reajuste de preço</h1>
            <?php
                $reaj = $valor1+($valor1*$valor2)/100;

                echo "O valor de R$" . number_format($valor1,2) . " com reajuste de $valor2% é " . number_format($reaj,2);
            ?>
        </div>
    </section>

    <footer>
        <p>Site desenvolvido por Leonardo Siqueira Yamashiro</p>
    </footer>

    <script>
        mudaValor()

        function mudaValor(){
            por.innerText = numero2.value
        }
    </script>
</body>
</html>