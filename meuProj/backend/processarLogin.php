<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');

    try {
        $data = json_decode(file_get_contents('php://input'), true);

        if (isset($data['email']) && isset($data['password'])) {
            $email = htmlspecialchars($data['email']) ?? "";
            $password = htmlspecialchars($data['password'])?? "";

         
            if ($email === "adm@adm.com" && $password === "123") {
           
                $_SESSION['usuario'] = "Administrador";
                $_SESSION['acesso'] = true;

             
                echo json_encode([
                    "success" => true,
                    "redirect" => "/action/dashboard.php"
                ]);
                exit;
            } else {
             
                echo json_encode([
                    "success" => false,
                    "message" => "Credenciais inválidas!"
                ]);
                exit;
            }
        } else {
            
            echo json_encode([
                "success" => false,
                "message" => "Dados incompletos!"
            ]);
            exit;
        }

    } catch (Exception $e) {
        echo json_encode([
            "success" => false,
            "message" => "Erro: " . $e->getMessage()
        ]);
        exit;
    }
}
