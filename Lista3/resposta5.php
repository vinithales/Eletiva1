<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            
            try{
                $valor = (float) $_POST['valor'];
    
                switch($valor){
                    case 1:
                        echo "Janeiro";
                        break;
                    case 2:
                        echo "Fevereiro";
                        break;
                    case 3:
                        echo "Março";
                        break;
                    case 4:
                        echo "Abril";
                        break;
                    case 5:
                        echo "Maio";
                        break;
                    case 6:
                        echo "Junho";
                        break;
                    case 7:
                        echo "Julho";
                        break;
                    case 8:
                        echo "Agosto";
                        break;
                    case 9:
                        echo "Setembro";
                        break;
                    case 10:
                        echo "Outubro";
                        break;
                    case 11:
                        echo "Novembro";
                        break;
                    case 12:
                        echo "Dezembro";
                        break;
                    default:
                        echo "<p>Valor Inválido </p>";
                }
                
            } catch (Exception $e){
                echo "Erro" .$e->getMessage();
            }
        }
       
    ?>  
</body>
</html>