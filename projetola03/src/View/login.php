<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--<link rel="stylesheet" href="/css/padrao.css" >-->
</head>
<body>
    <header>
    </header>
    <main>
        <div class="conteudo">
            <div class="caixa-info">
            </div>
        </div>
        <form action="" method="_POST">
            <center>
                <h1 style="font-size: larger; font-style:italic;">Login</h1>
            <br>
            <label>NickUser:</label> <br>
            <input class="form-input" type="text" name="nickuser" id="nickuser" require placeholder="Digite seu nome de usuario"> <br>

            <label>Senha:</label> <br>
            <input class="form-input" type="password" name="senhauser" id="senhauser" require placeholder="Digite a senha"> <br>
            <div style="margin-top:30px;"></div>

          
            <input type="submit" value="submit">
            
            
            </center>
        </form>
    </main>
    <footer>
        &copyApenas Pedro
    </footer>
    <?php 
 include(__DIR__ . '/../Model/user.php');
use App\Model\User;


    $verificar = new User();
    $verificar-> verificarLogin();


   /* if(!empty($NickUser) && !empty(Senha)){
      
      
        if($NickUser == 'Admin01' && $Senha == '123'/* || $NickUser == 'Apenas_Pedro' && $Senha == 'Aquilo'|| $NickUser == 'aquilo' && $Senha == '1'){
            echo("<h3><b>Acessou com sucesso</b></h3>");
    
        }else{
            echo("<h3><b>Acessou nada não</b></h3>");
        }
    }else{

    }


   // echo("<html><script>alert('deu ruim')</script></html>");*/

    ?>
</body>
</html>