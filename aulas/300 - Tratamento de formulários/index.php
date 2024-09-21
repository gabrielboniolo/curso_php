<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratamento de formulários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="login-container">
            <h2>Login</h3>
            <form action="submit.php" method="post">
                <div class="input-container">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="" placeholder="Digite seu e-mail">
                </div>
                <div class="input-container">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="" placeholder="Digite sua senha">
                </div>
                <div class="input-container">
                    <input type="submit" id="submit-btn" value="Entrar">
                </div>
        </div>
        </form>
    </div>
</body>
</html>