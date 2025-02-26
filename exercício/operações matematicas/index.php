<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios com Operações Matemáticas</title>
</head>
<body>
    <h1>Exercícios com Operações Matemáticas</h1>
    <h2>Valor do Combustível:</h2>

    <?php
    $distancia = 100;
    $consumo = 10;
    $peco = 5;
    $calcularCombustivel= ($distancia / $consumo) * $peco;
        echo "O valor gasto do combustível foi de: R$ " . number_format($calcularCombustivel, 2, ",", ".");
    
    
    
    
    
    ?>
</body>
</html>