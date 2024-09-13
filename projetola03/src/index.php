<?php 



    
 
    // Inclui o autoload do Composer
    require __DIR__ . "/../../vendor/autoload.php";
     
    // Usa a classe Login do namespace MeuProjeto\Login
    use App\Model\user;
     
    // Cria uma instância da classe Login
    $user = new user();
     
    // Verifica o login (se o formulário foi enviado)
    $user->verificarLogin();

