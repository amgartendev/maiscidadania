<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/plusSign.png">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/enviado_style.css">
    <title>MaisCidadania - ENVIADO</title>
</head>
<body>
    <main>

        <h1>MENSAGEM ENVIADA COM SUCESSO !!</h1>
        <h3>A Freguesia de Águas Livres agradece pela colaboração</h3>

        <a id="voltar" href="index.php"><p>Voltar</p></a>
    </main>

    <section class="images">
        <img src="images/mobile.png" alt="Mobile">
        <div class="circle"></div>
    </section>
    
    <!-- JS SCRIPT -->
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href);
        }
    </script>
    
    <!-- PHP SCRIPT -->
    <script>
        <?php
            $endereco = $_POST['endereco'];
            $cidade = $_POST['cidade'];
            $problema = $_POST['problema'];
            $nif = $_POST['nif'];
            $dia = date("Y-m-d H:i:s", strtotime('-1 hours'));
            $status = "Não Concluído";

            $foto = $_FILES['foto']['name'];
            $tmpnome = $_FILES['foto']['tmp_name'];
            $dir = 'ocorrencias_imagens/';
            move_uploaded_file($tmpnome, $dir.$foto);

            $conn = new mysqli('localhost', 'root', '', 'pap');

            if ($conn->connect_error) {
                die('Connection Failed: ' . $conn->connect_error);
            } else {
                $stmt = $conn->prepare("INSERT INTO ocorrencias(endereco, cidade, problema, nif, foto, dia, status) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sssisss", $endereco, $cidade, $problema, $nif, $foto, $dia, $status);
                $stmt->execute();
                $stmt->close();
                $conn->close();
            }
        ?>
    </script>
</body>
</html>
