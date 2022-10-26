<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>
<body>
    <h2>Resultado:</h2>
    <?php
        $intervalo = $_POST['intervalo'];
        $resultado = 0;
        
        for ($numeros = 1; $numeros <= $intervalo; $numeros++) { 
           echo "$numeros";
           if ($numeros != $intervalo) {
               echo ', ';
           }else {
               echo '.';
           }
           $resultado = $resultado + $numeros;
        }

        echo '<hr>';
        echo 'A soma do intervalo é: ' . $resultado;
    ?>
</body>
</html>