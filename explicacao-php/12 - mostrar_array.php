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
        $lista_carro = ['Ford', 'Chevrolet', 'Renault', 'Nissan', 'Fiat'];

        echo '<pre>';
            print_r($lista_carro);
        echo '</pre>';

        echo '<br>';
        echo '<br>';

        echo '<pre>';
            var_dump($lista_carro);
        echo '</pre>';

        echo '<br>';
        echo '<br>';

        echo '<h3>' . 'Mostrando o vetor/array com o FOR' . '</h3>';
        for ($idx = 0; $idx < count($lista_carro); $idx++){
            echo $lista_carro[$idx];                                    
            echo '<hr/>';
        }

        echo '<br>';
        echo '<br>';

        echo '<h3>' . 'Mostrando o vetor com WHILE' . '</h3>';
        $idx = 0;
        while($idx < count($lista_carro)){
            echo $lista_carro[$idx];
            $idx = $idx + 1;
            echo '<hr/>';
        }

        echo '<h3>' . 'Mostrando o vetor com DO WHILE' . '</h3>';
        $idx = 0;
        do{
            echo $lista_carro[$idx];
            $idx = $idx + 1;
            echo '<br>';
            echo '<br>';
        } while($idx < count($lista_carro));

        echo '<h3>' . 'Mostrando o vetor com FOREACH' . '</h3>';
               //array   //chave   //valor
        foreach ($lista_carro as $idx => $carro){
            echo $carro . '<br>';
        }
    ?>
</body>
</html>