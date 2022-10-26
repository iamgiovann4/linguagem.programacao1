
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }
        button {
            background-color: green;
            color: white;
            border: 0px;
            font-size:20px;
            border-radius: 10px;
        }
        a{
            color: white;
            padding: 15px 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>
        <form action="05 - listando_com_form.php" method="POST">
            ID: <br> <input type="number" placeholder="Digite aqui..." name="id">
            <br><br>
            Nome: <br> <input type="text" placeholder="Digite aqui..." name="nome">
            <br><br>
            Email: <br> <input type="email" placeholder="Digite aqui..." name="email">
            <br><br>
            Senha: <br> <input type="password" placeholder="Digite aqui..." name="senha">
            <br><br>
            <button type="submit">Enviar</button>
            <br><br><br>
        </form>


<?php
    $dsn = 'mysql:host=localhost;dbname=php_escola';
    $usuario = 'root';
    $senha = '';

    try{
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = '
            select * from tb_alunos;
        ';

        echo '<table>

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
        </tr>';

        foreach($conexao -> query($query) as $chave => $valor){
            if (!empty($_POST["id"]))    {  //!empty diferente de vazio
                if ($_POST["id"] == $valor["id"]) {
                    // $query = "UPDATE tb_alunos SET nome='{$_POST['nome']}', email = '{$_POST['email']}', senha = '{$_POST['senha']}' WHERE id = '{$valor["id"]}'"; //atualiza os dados da tabela de acordo com o ID #UPDATE

                    $query = "DELETE FROM tb_alunos WHERE id='{$valor["id"]}'"; //apaga dados da tabela de acordo com o ID #DELETEFROM
                    $conexao -> query($query);
                }
            }
            echo 
            "<tr>
                <td>". $valor["id"] ."</td>
                <td>". $valor["nome"] ."</td>
                <td>". $valor["email"] ."</td>
                <td>". $valor["senha"] ."</td>
            </tr>";
        }

        if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
            $query = "
                insert into tb_alunos(
                    nome, email, senha
                    ) values (
                        '{$_POST['nome']}', '{$_POST['email']}', '{$_POST['senha']}')
            ";

            $conexao -> query($query);
    
        }

        echo '</table>';

    } catch (PDOException $e){
        echo 'Erro ' . $e -> getCode() . "Mensagem: " . $e -> getMessage();
    }
?>

<br>

<button><a href="05 - listando_com_form.php">Atualizar Tabela</a></button> 

</body>
</html>


