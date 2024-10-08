<?php
    
    $host = "localhost";
    $db = "banco_php";
    $user = "root";
    $senha = "";
   
    try{
        $pdo = new PDO("mysql:host=$host;port=;dbname=$db;", $user, $senha);

        if($pdo){
            echo "Conexão realizada com sucesso";
        }

    }catch(Exception $e){
        echo "Erro: " .$e->getMessage();
    }

    