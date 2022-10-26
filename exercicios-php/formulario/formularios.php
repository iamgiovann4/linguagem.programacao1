<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h3>Envie seus dados:</h3>
    <!-- <form action="valida-formularios.php" method="GET"> -->
    <form action="valida-formularios.php" method="POST">
        Nome:*
        <br>
        <input type="text" name="nome" placeholder="Digite aqui..."><br><br>

        E-mail:*
        <br>
        <input type="text" name="email" placeholder="Digite aqui..."><br><br>

        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>