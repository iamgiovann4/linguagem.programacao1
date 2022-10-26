<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>
<body>
    <h2>Resultado:</h2>

    <?php
        $num1 = $_POST['numero_1'];
        $num2 = $_POST['numero_2'];
        $sub = $num1 - $num2;
        $mult = $sub ** 2;

        echo '<hr>';
        echo 'Primeiro valor: ' . $num1;
        echo '<hr>';
        echo 'Segundo valor: ' . $num2;
        echo '<hr>';
        echo 'Diferença do primeiro valor pelo segundo: ' . $sub;
        echo '<hr>';
        echo 'O resultado do quadrado da diferença do primeiro valor pelo segundo é: ' . $mult;
        echo '<hr>';
    ?>
</body>
</html>