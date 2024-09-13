<?php
namespace App\Model;

class user {
    
    public function __construct($funlogar = null){
        $this->$funlogar = $funlogar;
    }
    private $verificar = [
        [
        "nickuser"=> "Apenas_Pedro",
        "senhauser"=> "Pedro",
 
        ]
        ];

public function verificarLogin() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = htmlspecialchars(trim($_POST["nickuser"]));
        $senha = htmlspecialchars(trim($_POST["senhauser"]));

        foreach ($this->verificar as $user) {
            if ($user['nickuser'] == $usuario && $user['senhauser'] == $senha) {
                if  ($user['nickuser'] == 'Admin01' && $user['senhauser'] == '123'){}
                echo "Acesso liberado!";
                header("Location: main.php");
                exit;
                return; // Interrompe o loop após encontrar o usuário
            }
            if($user['nickuser'] != $usuario && $user['senhauser'] != $senha && $user['nickuser'] != ""
             && $user['senhauser'] != ""){
                echo "Acesso negado.";
                return;
            }else{
               
            }
        }
        
    }
}
}
