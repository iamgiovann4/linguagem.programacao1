                        <!--Duas formas de fazer-->
<?php

    // $conexao = new PDO('mysql:host=localhost;dbname=php_escola', 'root', '');

    $dsn = 'mysql:host=localhost;dbname=php_escola';
    $usuario = 'root';
    $senha = '';

    try{
        $conexao = new PDO($dsn, $usuario, $senha);
        echo "Conectado com sucesso!!!";
    } catch (PDOException $e){
        // echo '<pre>';
        // print_r($e);
        // echo '<pre>';

        echo 'Erro ' . $e -> getCode() . "Mensagem: " . $e -> getMessage();
    }
?>

<!-- 1º parâmetro é o local e o nome da base de dados, o 2º parâmetro é o nome do usuário que está acessando o banco e o 3° parâmetro é a senha do banco -->