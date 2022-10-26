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
        //string
        $nome = 'Giovanna Siqueira Nicolau';

        //int (inteiro)
        $idade = 15;

        //float
        $peso = 55.4;

        //boolean
        $fumante_sn = true;

        $idade = 18;
    ?>

    <h1>Ficha Cadastral</h1>
    <br>
    <p>Nome: <?php echo $nome?></p>
    <p>Idade: <?php print $idade?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>
</body>
</html>