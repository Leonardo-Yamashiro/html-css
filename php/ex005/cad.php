<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="shortcut icon" href="imagens/icone.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado PHP</h1>
    </header>

    <main>
        <div>
            <?php
                //var_dump($_GET);
                $nome = $_GET["nome"] ?? "sem nome";
                $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
                echo "<p>Bom dia, $nome $sobrenome.</p>";
            ?>
        </div>
    </main>

    <footer>
        <p>Resultado criado por PHP do Leonardo. <a href="javascript:history.go(-1)">Voltar.</a></p>
    </footer>
</body>
</html>