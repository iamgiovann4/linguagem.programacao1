<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <h2>Formulário</h2>
    <h4>Insira seus dados:</h4>

    <form action="Resultado.php" method="POST">
        Digite seu nome:*
        <input type="text" name="name" placeholder="Digite...">

        <br><br>

        Insira sua idade:*
        <input type="number" name="idade" placeholder="Sua idade é">

        <br><br>

        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>