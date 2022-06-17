<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/plusSign.png">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/index_style.css">
    <title>MaisCidadania</title>
</head>
<body>

    <button id="login"><a href="login.php"><b>LOGIN</b></a></button>
    
    <main>
        <div id="header">
            <img src="images/Header.png" alt="Header.png" />
        </div>

        <h1>FORMULÁRIO</h1>

        <form name="formulario" action="enviado.php" method="POST" enctype="multipart/form-data">
            <label for="endereco">
                <span>Endereço</span>
                <input type="endereco" id="endereco" name="endereco" required="required">
            </label>

            <label for="cidade">
                <span>Cidade</span>
                <input type="text" id="cidade" name="cidade" required="required">
            </label>

            <label for="problema">
                <span>Problema</span>
                <input type="text" id="problema" name="problema" required="required">
            </label>

            <label for="nif">
                <span>NIF</span>
                <input type="text" id="NIF" name="nif" maxlength="9" required="required">
            </label>

            <label for="foto">
                <span>Foto</span>
                <input type="file" id="foto" name="foto" required="required">
            </label>

            <input type="submit" value="Enviar" id="button">
        </form>
    </main>

    <section class="images">
        <img src="images/mobile.png" alt="Mobile">
        <div class="circle"></div>
    </section>

    <!-- <footer>
        <p>Site desenvolvido por João Amgarten - Todos os direitos reservados &copy - joaoamgarten0@gmail.com</p>
    </footer> -->
</body>
</html>
