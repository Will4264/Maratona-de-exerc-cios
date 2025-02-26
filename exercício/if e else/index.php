<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício com if e else</title>
</head>
<body>
<h1>Exercício com if e else</h1>
<h2>Sorteio de número:</h2>

    <?php
        $numeroAleatorio = rand(1, 100);
        $numerousuario = 50;
        echo "O número sorteado foi: $numeroAleatorio <br>";
        echo "O número que você digitou foi: $numerousuario <br>";
        echo "<br>";
        if($numerousuario >= $numeroAleatorio){
            echo "Parabéns!, você ganhou o jogo";
        }else{
            echo "Não foi dessa vez, o número que você digitou é menor que o número sorteado";
        }
    ?>
</body>
</html>