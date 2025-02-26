<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios com And ou Or</title>
</head>
<body>
    <h1>Exercícios com And ou Or</h1>
    <?php 
       $hora = 00;
       if($hora >= 6 && $hora < 12){
           echo "Bom dia!"; 
         }else if($hora >= 12 && $hora < 18){
             echo "Boa tarde!"; 
            }else{
                echo "Boa noite!";
            }   
    ?>    
</body>
</html>