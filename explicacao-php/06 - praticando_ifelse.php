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
        $usuario_possui_cartao_loja = true;
        $valor_compra = 75;

        $valor_frente = 50;
        $recebeu_desconto_frente = true;

        if($usuario_possui_cartao_loja && $valor_compra >= 400){
            $valor_frente = 0;
        }else if($usuario_possui_cartao_loja && $valor_compra >= 300){
            $valor_frente = 10;
        }else if($usuario_possui_cartao_loja && $valor_compra >= 100){
            $valor_frente = 25;
        }else {
            $recebeu_desconto_frente = false;
        }

        echo '<br/>';
        echo '<br/>';
    ?>

    <h1>Detalhes do Pedido</h1>

    <p>Possui cartão loja?
        <?php
            if ($usuario_possui_cartao_loja){
                echo 'SIM';
            }else {
                echo 'NÃO';
            }
        ?>
    </p>

    <p>Valor da Compra: <?= $valor_compra ?></p>
    
    <p>Recebeu desconto no frete?
        <?php
            if ($recebeu_desconto_frente){
                echo 'SIM';
            }else{
                echo 'NÃO';
            }
        ?>
    </p>
        
    <p>Valor do Frete: <?= $valor_frente ?></p>
</body>
</html>