<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobais</title>
    <style>
        *{
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            padding: 0px;
            box-sizing: border-box;
        }
        body{
            height: 100dvh;
            background-color: greenyellow;
        }
        main{
            margin: 10px;
            padding: 10px;
            border-radius: 20px;
            background-color: whitesmoke;
        }
        h1{
            text-align: center;
        }
        button{
            width: 100%;
            background-color: red;
            color: white;
            border: none;
            text-align: center;
            text-decoration: none;
            padding: 5px;
            font-size: larger;
            border-radius: 10px;
        }
        button:hover{
            background-color: yellow;
            color: black;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <main>
        <pre>
            <?php
                setcookie("dia-da-semana","SEGUNDA", time()+3600);
                session_start();
                $_SESSION["teste"] = "Funcionou";

                echo "<h1>SuperGlobal GET</h1>";
                var_dump($_GET);
                echo "<h1>SuperGlobal POST</h1>";
                var_dump($_POST);
                echo "<h1>SuperGlobal REQUEST</h1>";
                var_dump($_REQUEST);
                
                echo "<h1>SuperGlobal COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>SuperGlobal SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>SuperGlobal ENV</h1>";
                var_dump($_ENV);

                echo "<h1>SuperGlobal SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>SuperGlobal GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>