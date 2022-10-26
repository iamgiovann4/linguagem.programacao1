<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Dados do produto:</h3>

    <?php
        $nome = $_POST['name'];
        $descrição = $_POST['description'];
        $qtd = $_POST['qtd_estoque'];
        $preco = $_POST['valor_unitario'];
        $mult = $qtd * $preco;

        echo '<hr>';
        echo 'Nome do produto: ' . $nome;
        echo '<hr>';
        echo 'Descrição: ' . $descrição;
        echo '<hr>';
        echo 'Quantidade em estoque: ' . $qtd;
        echo '<hr>';
        echo 'Valor unitário: ' . $preco;
        echo '<hr>';
        echo ("Valor total: $mult");
        echo '<hr>';
    ?>
</body>
</html>