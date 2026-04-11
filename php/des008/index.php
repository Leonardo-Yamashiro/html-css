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
            $valor = $_GET['numero']??0;
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">

            <label for="numero">Digite um numero:</label>
            <input type="number" name="numero" id="inumero" value="<?= $valor ?>">
            <input type="submit" value="Calcular" id="idenviar">
        </form>

        <br>

        <div id="container">
            <h1>Analise Final</h1>
            <?php
                $rquad = pow($valor,1/2);
                $rcub = pow($valor,1/3);

                echo "<p>Analisando o numero $valor temos: </p>";
                echo " <p>Raiz Quadrado: $rquad</p><p>Raiz Cubica: $rcub</p>";
            ?>
        </div>
    </section>

    <footer>
        <p>Site desenvolvido por Leonardo Siqueira Yamashiro</p>
    </footer>
</body>
</html>