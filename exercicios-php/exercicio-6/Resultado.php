<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>
<body>

    <h1>Dados dos alunos:</h1>
        
    <?php
        $qtd_alunos = $_POST['people'];
        $nome = $_POST['name'];
        $idade = $_POST['idade'];
        $media = $_POST['media'];  
        $aluno = 0;
        echo '<hr>';
    
        for($resultado = 0; $resultado < count($nome); $resultado++){
            do {
                $aluno++;
                echo '<h3>Aluno ' . $aluno . '</h3>';
                echo 'Nome: '. $nome[$resultado];
                echo '<br>';
                echo '<br>';
                echo 'Idade: '. $idade[$resultado];
                echo '<br>';
                echo '<br>';
                echo 'Media: '. $media[$resultado];
                echo '<br>';
                echo '<br>';
                echo '<hr>';
            } while ($aluno <= $resultado);  
        };
    ?>
</body>
</html>