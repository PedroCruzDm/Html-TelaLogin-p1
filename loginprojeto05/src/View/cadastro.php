<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
</head>
<body>
    <header>
        <?php
            include("./padraoView/header.php");
        ?>
    </header>
    <main>
        <div class="caixa-conteudo">
            <div class="caixa-info">
                <form action="" method="post">
                    <h1>Cadastrar-se</h1> <br>
                    <hr>
                    <label class="label-cadastro">Nome:</label><br>
                    <input type="text" name="NickUser" id="NickUser" required><br>

                    <label class="label-cadastro">E-mail:</label><br>
                    <input type="email" name="email" id="email" required><br>

                    <label class="label-cadastro">Senha:</label><br>
                    <input type="password" name="senha01" id="senha01" required><br>
                    <label class="label-cadastro">Confirmar senha:</label><br>
                    <input type="password" name="senha02" id="senha02" required><br>

                    <input type="submit" value="Enviar">

                </form>
            </div>
        </div>
    </main>
    <footer>
        <?php
        include("./padraoView/footer.php");
        ?>
    </footer>
</body>
</html>