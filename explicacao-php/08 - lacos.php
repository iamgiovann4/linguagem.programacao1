<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- while, do while, for -->
    <?php 
        $num = 1;

        while ($num < 50){
            echo "$num <br/>";
            $num += 5;
        }

        echo '<br/>';
        echo '<br/>';
        echo '<br/>';

        $num2 = 1;
        while (true){
            echo "$num2 <br/>";
            $num2 += 5;

            if ($num2 > 100){
                break;
            }
        }

        echo '<br/>';
        echo '<br/>';
        echo '<br/>';

        //DO WHILE
        $x = 10;
        
        do {
            echo 'Entrou no do while';
        } while ($x < 9);

        echo '<br/>';
        echo '<br/>';
        echo '<br/>';

        //FOR
        /* 
        For (variável; condição; incremento){
            #codigo...
        }
        */

        for ($x = 10; $x > 0; $x--){
            echo "$x <br/>";
        }
    ?>
</body>
</html>