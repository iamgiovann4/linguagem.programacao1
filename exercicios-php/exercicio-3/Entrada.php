<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <h3>Informações sobre o produto</h3>

    <form action="Resultado.php" method="POST">
        Nome do produto:*
        <input type="text" name="name" placeholder="Digite...">

        <br><br>

        Descrição do produto:*
        <br>
        <textarea name="description" id="description" cols="30" rows="5" placeholder="Digite a descrição aqui..."></textarea>
        
        <br><br>

        Quantidade em estoque:*
        <input type="number" name="qtd_estoque" placeholder="Insira aqui...">

        <br><br>

        Valor unitário:*
        <input type="number" name="valor_unitario" placeholder="Insira o valor aqui...">

        <br><br>
        
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>