<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/plusSign.png">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
    <title>MaisCidadania - LOGIN</title>
</head>
<body>
    <img src="images/background_lisbon.png" alt="background_lisbon.png"/>

    <div class="tela-login">
        <div class="error" data-error="CREDENCIAIS INVÁLIDAS">
            <p id="error-msg"></p>
        </div>
        <form method="POST" action="validacao.php">
                <h1>LOGIN</h1>
                <input name="usuario" type="text" placeholder="Usuário" required="required">
                <br><br>
                <input name="senha" type="password" placeholder="Senha" required="required">
                <br><br>
                <button><b>LOGIN</b></button>
        </form>
    </div>
</body>
</html>