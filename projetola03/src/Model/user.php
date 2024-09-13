<?php
namespace App\Model;

class user {
    
    public function __construct($funlogar = null){
        $this->$funlogar = $funlogar;
    }
    private $verificar = [
        [
        "Usuario"=> "pablo",
        "Senha"=> "123"
        ]
        ];

public function verificarLogin() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = htmlspecialchars(trim($_POST["nickuser"]));
        $senha = htmlspecialchars(trim($_POST["senhauser"]));

        foreach ($this->verificar as $user) {
            if ($user['nickuser'] == $usuario && $user['senhauser'] == $senha) {
                echo "Acesso liberado!";
                return; // Interrompe o loop após encontrar o usuário
            }
        }
        echo "Acesso negado.";
    }
}
}
