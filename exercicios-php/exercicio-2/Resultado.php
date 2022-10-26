<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <h2>Dados inseridos:</h2>

    <?php
        $nome = $_POST['name'];
        $idade = $_POST['idade'];

        echo '<hr>';
        
        echo 'Nome: ' . $nome;

        echo '<hr>';

        echo 'Idade: ' . $idade;

        echo '<hr>';
    ?>
</body>
</html>