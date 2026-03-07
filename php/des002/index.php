<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 002</h1>
    </header>
    <main>
        <div>
            <p style="margin: auto; font-size:1.5em;"><strong>Gerador de numeros aleatorios</strong></p>
            <p>Gerar um numero entre 0 e 100...</p>
            <?php
                $num = rand(0,100);
                echo "<p>Metodo Rand = $num</p>";

                $num = mt_rand(0,100);
                echo "<p>Metodo MT_Rand = $num</p>";

                $num = random_int(0,100);
                echo "<p>Metodo Random_INT = $num</p>";
            ?>
            <button id="idenviar" ondblclick="javascript:document.location.reload()">Gerar numeros novos</button>
        </div>
    </main>
    <footer>
        <p>Site desenvolvido por Leonardo Siqueira Yamashiro</p>
    </footer>
</body>
</html>