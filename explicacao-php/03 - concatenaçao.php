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
    $nome = 'Naruto';
    $tempo = 'inicial';
    $caracteristica = 'simples ';

    echo 'Ao criar Naruto na parte inicial da série, Kishimoto manteve o personagem simples e estupido.';

    echo '<br/>';
    echo '<br/>';

    echo 'Ao criar ' . $nome . ' na parte ' . $tempo . ' da serie, Kishimoto  manteve o personagem ' . $caracteristica . 'e estupido.';

    echo '<br/>';
    echo '<br/>';

    echo "Ao criar $nome na parte $tempo da seire, kishimoto manteve o personagem $caracteristica e estupido.";

    echo '<br/>';
    echo '<br/>';

    echo 'Ao criar $nome na parte $tempo da serie, kishimoto manteve o personagem $caracteristica e estupido.';
    ?>
</body>
</html>