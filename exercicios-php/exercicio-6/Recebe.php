<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>
<body>
    <h1>Preencha os formulários:</h1>

    <?php
        $alunos = $_POST['alunos'];

        echo '<form action="Resultado.php" method="POST">';

        echo '<input type="hidden" name="people" value="'. $alunos .'">';

        echo '<hr>';

        for ($formulario = 1; $formulario <= $alunos ; $formulario++) { 
            echo '<h3>Formulário '. $formulario .'<h3>
            
            Nome aluno:*
            <input type="text" name="name[]" placeholder="Digite...">

            <br><br>

            Idade:*
            <input type="number" name="idade[]" placeholder="Insira...">

            <br><br>

            Média:*
            <input type="number" name="media[]" placeholder="Insira...">';

            echo '<br><br>';
            echo '<hr>';
        }
        echo '<input type="submit" name="submit" value="Enviar">
        </form>';
    ?>  
</body>
</html>