<?php
    declare(strict_types=1);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function verificar(string $frase, string $palavra) : void{
        if (strpos($frase, $palavra) !== false) {
            echo "A palavra '{$palavra}' está presente em '{$frase}'";
        } else {
            echo "A palavra '{$palavra}' não está contida em '{$frase}'";
        }
    }
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            
            try{
                $fraseA = (string) $_POST['fraseA'];
                $fraseB = (string) $_POST['fraseB'];

                verificar($fraseA, $fraseB);

            } catch (Exception $e){
                echo "Erro" .$e->getMessage();
            }
        }
       
    ?>  
</body>
</html>