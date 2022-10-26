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
    /*
    Operadores Relacionais:
    ==
    ===
    != ou <>
    !==
    <
    >
    <=
    >=

    Operadores Lógicos:
    E: && ou AND
    OU: || ou OR
    OU EXCLUSIVO: XOR
    NEGAÇÃO: !
    */

    if(true){
        echo 'verdadeiro';
    }else {
        echo 'falso';
    }

    echo '<br/>';
    echo '<br/>';

    if(4 === '4'){
        echo 'Verdadeiro';
    }else {
        echo 'Falso';
    }

    echo '<br/>';
    echo '<br/>';

    if (3 == 3 && 10 > 3){
        echo 'Verdadeiro';
    }else {
        echo 'Falso';
    }

    echo '<br/>';
    echo '<br/>';

    if(!('a' == 'b')){
        echo 'Verdadeiro';
    }else {
        echo 'Falso';
    }

    echo '<br/>';
    echo '<br/>';

    $parametro = 3;

    switch ($parametro){
         case 1:
            echo 'Entrou no case 1';
            break;
        case 2: 
            echo 'Entrou no case 2';
            break;
        case 3:
            echo 'Entrou no case 3';
            break;
        default:
            echo 'Entrou no case default';
            break;
    }
    ?>
</body>
</html>