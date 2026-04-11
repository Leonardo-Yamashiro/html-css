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
            $valor2 = $_GET['numero2']??1;
            $valor3 = $_GET['numero3']??0;
            $valor4 = $_GET['numero4']??1;
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">

            <label for="numero1">Digite um numero A:</label>
            <input type="number" name="numero1" id="inumero1" value="<?= $valor1 ?>">

            <label for="numero2">Digite o peso A:</label>
            <input type="number" name="numero2" id="inumero2" value="<?= $valor2 ?>">

            <label for="numero3">Digite um numero B:</label>
            <input type="number" name="numero3" id="inumero3" value="<?= $valor3 ?>">

            <label for="numero4">Digite o peso B:</label>
            <input type="number" name="numero4" id="inumero4" value="<?= $valor4 ?>">

            <input type="submit" value="Calcular" id="idenviar">
        </form>

        <br>

        <div id="container">
            <h1>Media</h1>
            <?php
                $msimples = ($valor1+$valor3)/2;
                $mponderada = (($valor1*$valor2)+($valor3*$valor4))/($valor2+$valor4);

                echo "<p>Analisando os valores $valor1 e $valor3 temos:</p>";
                echo "<p>Media Aritmetica Simples: $msimples;</p>";
                echo "<p>Media Aritmetica Ponderada: $mponderada;</p>";
            ?>
        </div>
    </section>

    <footer>
        <p>Site desenvolvido por Leonardo Siqueira Yamashiro</p>
    </footer>
</body>
</html>