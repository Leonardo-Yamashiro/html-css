<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <style>
        @charset "UTF-8";
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            transition: 0.7s;
        }
        :root{
        --fundo-principal: #efefef;
        --texto: #222222;
        --texto-inverso:#ffffff;
        --destaque: #008000;
        --destaque-inverso: #9acd32;
        --fundo-card: #ffffff;
        }
        body{
        height: 100dvh;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        line-height: 1.5em;
        background-color: var(--fundo-principal);
        color: var(--texto);

        display: grid;
        grid-template-rows: 100px 1fr 100px;
        }

        header , footer{
        background-image: linear-gradient(to bottom, var(--destaque-inverso), var(--destaque));
        display: flex;
        align-items: center;
        justify-content: center;
        }
        header h1 , footer p, footer a{
        font-variant: small-caps;
        color: var(--fundo-card);
        text-shadow: 2px 1px 0px black;
        text-decoration: none;
        }
        footer a:hover{
        color: var(--destaque);
        }

        section , main{
        margin: auto;
        }
        form , div{
        width: 500px;
        background-color: var(--fundo-card);
        padding: 10px;
        border-radius: 20px;
        box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.493);

        display: flex;
        flex-flow: column nowrap;
        gap: 5px;
        justify-content: space-around;
        }
        form label , div p{
        font-variant: small-caps;
        color: var(--texto);
        }
        form #idnome, form #idsobrenome{
        padding: 5px;
        border-radius: 5px;
        }
        form #idenviar , main div a{
        padding: 5px;
        background-color: var(--destaque);
        color: var(--fundo-card);
        border: none;
        font-weight: bolder;
        font-size: 1.1em;
        font-variant: small-caps;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        }
        form #idenviar:hover , main div a:hover{
        background-color: var(--destaque-inverso);
        color: var(--texto);
        cursor: pointer;
        }
    </style>
</head>
<body>
    
    <header>
        <h1>Apresentação</h1>
    </header>

    <main>
        <div>
            <?php
                $numero = $_REQUEST["numero"] ?? 0;
                $ante = $numero - 1;//pode gerar erro
                echo "<p>O numero escolhido é <strong>$numero</strong>.</p>";
                echo "<p>O antecessor de $numero é <strong>$ante</strong>.</p>";
                echo "<p>O sucessor de $numero é <strong>" . ($numero + 1) . "</strong>.</p>";
            ?>
             <a href="index.html">Voltar</a>
        </div>
    </main>

    <footer>
        <p>Site criando por Leonardo Siqueira Yamashiro</p>
    </foot>
</body>
</html>