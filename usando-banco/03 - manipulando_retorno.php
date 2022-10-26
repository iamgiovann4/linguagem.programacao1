<?php
    $dsn = 'mysql:host=localhost;dbname=php_escola';
    $usuario = 'root';
    $senha = '';

    try{
        $conexao = new PDO($dsn, $usuario, $senha);

        // $query = '
        //     insert into tb_alunos(
        //         nome, email, senha
        //     )values (
        //         "Fulano", "fulano@gmail.com", "123456"
        //     )
        // ';

        // $conexao -> exec($query);

        // $query = '
        //     insert into tb_alunos(
        //         nome, email, senha
        //     )values (
        //         "Sicrano", "sicrano@gmail.com", "123456"
        //     )
        // ';

        // $conexao -> exec($query);

        // $query = '
        //     insert into tb_alunos(
        //         nome, email, senha
        //     )values (
        //         "Beltrano", "beltrano@gmail.com", "123456"
        //     )
        // ';

        // $conexao -> exec($query);

        $query = '
            select * from tb_alunos
        ';

        $stmt = $conexao -> query($query);

        //fetchAll-varios elementos e fetch- um elemento só.

        $lista = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        //INDICE NÃO NUMÉRICO

        // $lista = $stmt -> fetchAll(PDO::FETCH_NUM); 
        //INDICE NUMÉRICO

        // $lista = $stmt -> fetchAll(PDO::FETCH_BOTH);
        // //INDICE NUMÉRICO E NÃO NUMÉRICO
        
        echo '<pre>';
            print_r($lista);
        echo '</pre>';

        echo $lista[5]['email'];

    } catch (PDOException $e){
        echo 'Erro ' . $e -> getCode() . "Mensagem: " . $e -> getMessage();
    }
?>