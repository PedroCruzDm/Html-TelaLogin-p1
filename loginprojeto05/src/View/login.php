<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--<link rel="stylesheet" href="/css/padrao.css" >-->
</head>
<body>

    <main>
        <form action="" method="post">
            <center>
                <h1 style="font-size: larger; font-style:italic;">Login</h1>
            <br>
            <label>NickUser:</label> <br>
            <input class="form-input" type="text" name="nickuser" id="nickuser" require placeholder="Digite seu nome de usuario"> <br>

            <label>Senha:</label> <br>
            <input class="form-input" type="password" name="senhauser" id="senhauser" require placeholder="Digite a senha"> <br>
            <div style="margin-top:30px;"></div>

          
            <input type="submit" value="submit">
            <a href="cadastro.php">Cadastrar-se</a>
            
            
            </center>
        </form>
    </main>
    <footer>
       <?php 
        include("./padraoView/footer.php");
       ?>
    </footer>
    <?php 
 include(__DIR__ . '/../Model/user.php');
use App\Model\User;


    $verificar = new User();
    $verificar-> verificarLogin();

    ?>
</body>
</html>