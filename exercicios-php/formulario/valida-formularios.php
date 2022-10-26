<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Resultados</h3>
    <hr>

    <p>
        <?php print_r($_POST)?>
    </p>

    <br><br>

    <pre>
        <?php print_r($_POST)?>
    </pre>

    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        echo 'O nome digitado foi ' . $nome . ' e o email foi ' . $email;
    ?>
</body>
</html>