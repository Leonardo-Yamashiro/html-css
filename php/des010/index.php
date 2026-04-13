<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 010</h1>
    </header>
    <section>
        <?php
            $ano = $_GET['ano']??date("Y");
            $valor1 = $_GET['numero1']??2000;
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">

            <label for="numero1">Digite o seu ano de nascimento:</label>
            <input type="number" name="numero1" id="inumero1" value="<?= $valor1 ?>" max="<?= $ano ?>" min="1900">

            <label for="ano">Ano atual:</label>
            <input type="number" name="ano" id="iano" value="<?= $ano ?>">

            <input type="submit" value="Calcular" id="idenviar">
        </form>

        <br>

        <div id="container">
            <h1>Maquina do tempo</h1>
            <?php
                $idade = $ano-$valor1;

                echo "<p>Quem nasceu em $valor1 no ano de $ano, vai ter $idade anos.</p>";
            ?>
        </div>
    </section>

    <footer>
        <p>Site desenvolvido por Leonardo Siqueira Yamashiro</p>
    </footer>
</body>
</html>