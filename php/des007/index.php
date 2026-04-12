<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 007</h1>
    </header>
    <section>
        <?php
            $valor = $_GET['numero']??0;
            $salmin = 1518.60;
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">

            <label for="numero">Digite seu salario:</label>
            <input type="number" name="numero" id="inumero" value="<?= $valor ?>" step="0.01">

            <p>O slario minimo atual é <strong>R$ <?= number_format($salmin,2,",",".") ?></strong>.</p>
            <input type="submit" value="Calcular" id="idenviar">
        </form>

        <br>

        <div id="container">
            <h1>Analise do Salario</h1>
            <?php
                $result = (int)($valor/$salmin);
                $resto = $valor - ($result*$salmin);

                if ($result >= 1 && $resto > 0){
                    echo "Voce recebe $result salario minimo + " . number_format($resto,2);
                }
                elseif ($result >= 1 && $resto == 0){
                    echo "Voce recebe $result salario minimo";
                }
                else{
                    echo "Voce NAO recebe salario minimo";
                }
            ?>
        </div>
    </section>

    <footer>
        <p>Site desenvolvido por Leonardo Siqueira Yamashiro</p>
    </footer>
</body>
</html>