<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 013</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 013</h1>
    </header>
    <section>
        <?php
            $valor1 = $_GET['numero1']??0;
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">

            <label for="numero1">Digite uma quantia de dinheiro:</label>
            <input type="number" name="numero1" id="inumero1" value="<?= $valor1 ?>">

            <input type="submit" value="Calcular" id="idenviar">
        </form>

        <br>

        <div id="container">
            <h1>Caixa Eletronico</h1>
            <?php
                echo "<p>A quantia $valor1 gera:</p>";

                $cem = (int) ($valor1/100);
                $valor1 = $valor1%100;

                $cinq = (int) ($valor1/50);
                $valor1 = $valor1%50;

                $vint = (int) ($valor1/20);
                $valor1 = $valor1%20;

                $dez = (int) ($valor1/10);
                $valor1 = $valor1%10;

                $cinc = (int) ($valor1/5);
                $valor1 = $valor1%5;

                $dois = (int) ($valor1/2);
                $valor1 = $valor1%2;

                echo "<p>R$100 X $cem</p>";
                echo "<p>R$50 X $cinq</p>";
                echo "<p>R$20 X $vint</p>";
                echo "<p>R$10 X $dez</p>";
                echo "<p>R$5 X $cinc</p>";
                echo "<p>R$2 X $dois</p>";
                echo "<p>R$1 X $valor1</p>";
            ?>
        </div>
    </section>

    <footer>
        <p>Site desenvolvido por Leonardo Siqueira Yamashiro</p>
    </footer>
</body>
</html>