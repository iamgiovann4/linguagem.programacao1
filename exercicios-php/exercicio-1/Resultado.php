<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <h3>Resultado das operações</h3>

    <?php
        $num1 = $_POST['number1'];
        $num2 = $_POST['number2'];
        $soma = $num1 + $num2;

        echo 'A soma é = ' . $soma;

        echo '<hr>';

        $sub = $num1 - $num2;
        echo 'A subtração é = ' . $sub;

        echo '<hr>';

        $mult = $num1 * $num2;
        echo 'A multiplicação é = ' . $mult;

        echo '<hr>';

        $div = $num1 / $num2;
        echo 'A divisão é = ' . $div;

        echo '<hr>';
    ?>
</body>
</html>