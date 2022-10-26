<?php
    $dsn = 'mysql:host=localhost;dbname=php_escola';
    $usuario = 'root';
    $senha = '';

    try{
        $conexao = new PDO($dsn, $usuario, $senha);
        // echo "Conectado com sucesso!!!";

        //ADD Tabela:
        // $query = ' 
        //     create table tb_alunos(
        //         id int not null primary key auto_increment,
        //         nome varchar (50) not null,
        //         email varchar (100) not null,
        //         senha varchar (32) not null
        //     )
        // ';

        // $retorno = $conexao ->exec($query);
        // echo $retorno;

        //ADD PESSOAS:
        $query = '
            insert into tb_alunos(
                nome, email, senha
            )values (
                "Fulano", "fulano@gmail.com", "123456"
            )
        ';

        // $query = '
        //     delete from tb_alunos
        // ';

        $retorno = $conexao ->exec($query);
        echo $retorno;

    } catch (PDOException $e){
        echo 'Erro ' . $e -> getCode() . "Mensagem: " . $e -> getMessage();
    }
?>