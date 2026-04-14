<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 012</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 012</h1>
    </header>
    <section>
        <?php
            $valor1 = $_GET['numero1']??0;
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">

            <label for="numero1">Digite um valor de segundos:</label>
            <input type="number" name="numero1" id="inumero1" value="<?= $valor1 ?>">

            <input type="submit" value="Calcular" id="idenviar">
        </form>

        <br>

        <div id="container">
            <h1>Calculador de Segundos</h1>
            <?php
                $sem = (int) ($valor1/604800);
                $resto = $valor1%604800;

                $dia = (int) ($resto/86400);
                $resto = $resto%86400;

                $hora = (int) ($resto/3600);
                $resto = $resto%3600;

                $min = (int) (($dia%$hora)/60);
                $resto = $resto%60;

                $seg = (int) ($resto);

                echo "<p>Semanas: $sem;</p>";
                echo "<p>Dias: $dia;</p>";
                echo "<p>Horas: $hora;</p>";
                echo "<p>Minutos: $min;</p>";
                echo "<p>Segundo: $seg;</p>";
            ?>
        </div>
    </section>

    <footer>
        <p>Site desenvolvido por Leonardo Siqueira Yamashiro</p>
    </footer>
</body>
</html>