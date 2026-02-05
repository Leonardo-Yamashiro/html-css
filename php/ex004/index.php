<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Testes de Tipos Primitivos</h1>
    <?php 
        $num = 300;
        echo "O valor de num é $num.  ";
        var_dump($num);
        echo "<p><br></p>";

        $num = 0x1A;
        echo "O valor de num é $num.  ";
        var_dump($num);
        echo "<p><br></p>";

        $num = 3e2;
        echo "O valor de num é $num.  ";
        var_dump($num);
        echo "<p><br></p>";

        $num = (int) 3e2;
        echo "O valor de num é $num.  ";
        var_dump($num);
        echo "<p><br></p>";

        $num = "950";
        echo "O valor de num é $num.  ";
        var_dump($num);
        echo "<p><br></p>";

        $num = (int) "950";
        echo "O valor de num é $num.  ";
        var_dump($num);
        echo "<p><br></p>";

        $vet = [2 , 6.5 , 7 , 5 , "palavra"];
        echo "O valor da posição 1 é $vet[1].  ";
        var_dump($vet);
        echo "<p><br></p>";

        class Pessoa{
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);

        $var = "teste";
        const X2 = "Teste";
        echo '$var ';
        echo "$var ";
        echo "$var " . X2;
        echo "texto \"$var\" texto";
        echo "\n $var";
    ?>
</body>
</html>