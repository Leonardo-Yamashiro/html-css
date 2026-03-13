<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 005</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 005</h1>
    </header>

    <main>
        <div>
            <?php
                $num = $_REQUEST["numero"] ?? 0;
                echo "<p>Seu numero é <strong>$num</strong> informado pelo usuario.</p>";

                $int = (int) $num;
                $fra = $num - $int;
                echo "<p>A parte inteira é <strong>$int</strong>.</p>";
                echo "<p>A parte fracionaria é <strong>" . number_format($fra,3) . "</strong>.</p>";
            ?>
            <button id="idenviar" onclick="javascript:history.go(-1)">Voltar</button>
        </div>
    </main>

    <footer>
        <p>Site desenvolvido por Leonardo Siqueira Yamashiro</p>
    </footer>
</body>
</html>