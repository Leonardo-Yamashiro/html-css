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
    ?>
</body>
</html>