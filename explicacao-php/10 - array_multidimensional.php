<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lista = [];

        $lista['Frutas'] = array (1 => 'Banana',
                                  2 => 'Morango',
                                  3 => 'Uva',
                                  4 => 'Abacate');
        $lista['Pessoas'] = [1 => 'João',
                             2 => 'Maria',
                             3 => 'José'];
        
        echo '<pre>';
        print_r($lista);
        echo '<pre>';

        echo '<hr/>';

        echo $lista['Frutas'][3];
        echo '<br/>';
        echo $lista['Pessoas'][1];
    ?>
</body>
</html>