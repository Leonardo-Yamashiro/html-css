<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 006</h1>
    </header>
    <section>
        <?php
            $valor1 = $_GET['numero1']??0;
            $valor2 = $_GET['numero2']??1;
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">

            <label for="numero1">Dividendo:</label>
            <input type="number" name="numero1" id="inumero1" min="0" value="<?= $valor1 ?>">

            <label for="numero2">Divisor:</label>
            <input type="number" name="numero2" id="inumero2" min="1" value="<?= $valor2 ?>">
            
            <input type="submit" value="Calcular" id="idenviar">
        </form>

        <br>

        <div id="container">
            <h1>Divisão</h1>
            <?php
            echo "<p>$valor1 / $valor2</p>";
            $result = (int) ($valor1 / $valor2);
            $resto = $valor1 % $valor2;
            echo "<p>Resultado = $result</p>";
            echo "<p>Resto = $resto</p>";
            ?>
        </div>
    </section>

    <footer>
        <p>Site desenvolvido por Leonardo Siqueira Yamashiro</p>
    </footer>
</body>
</html>