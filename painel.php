<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/plusSign.png">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/painel_style.css">
    <title>MaisCidadania - PAINEL</title>
</head>
<body>
    <img src="images/Header.png" />

    <button id="voltar"><a href="index.php">Voltar</a></button>
    <br><br>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Problema</th>
            <th>NIF</th>
            <th>Data</th>
            <th>Foto</th>
            <th>Status</th>
        </tr>
        <?php
        $conexao = new mysqli("localhost", "root", "", "pap");
        $sql = "SELECT * FROM ocorrencias";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["endereco"] . "</td><td>" . $row["cidade"] . "</td><td>" . $row["problema"] . "</td><td>" . $row["nif"] . "</td><td>" . $row["dia"] . "</td><td>" . "ocorrencias_imagens/" . $row["foto"] . "</td><td>" . $row["status"] . "</td></tr>";
            }
        } 
        else {
            echo "Sem resultado!!";
        }
        $conexao->close();
        ?>
    </table>

    <form id="status" name="status" method="POST">
        <h3>EDITAR STATUS</h3>
        <label for="status_id">
            <span>ID</span>
            <input type="text" id="status_id" name="status_id" placeholder="Insira o ID" required="required">
        </label>

        <label for="status_obs">
            <span>STATUS</span>
            <input type="text" id="status_obs" name="status_obs" placeholder="Insira a observação" required="required">
        </label>

        <input type="submit" value="EDITAR" id="button">
    </form>
    <?php
        if (!empty($_POST)) {
            $conexao = new mysqli("localhost", "root", "", "pap");
            $sql = "SELECT * FROM ocorrencias WHERE id={$_POST['status_id']}";
            $result = $conexao->query($sql);
            
            if ($result->num_rows > 0) {
                $sql = "UPDATE ocorrencias SET status='{$_POST['status_obs']}' WHERE id={$_POST['status_id']}";
                $result = $conexao->query($sql);
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo 'ID ' . $_POST["status_id"] . ' NÃO ENCONTRADO NA DATABASE';
            }
    
            $conexao->close();
        }
    ?>

    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href);
        }
    </script>
</body>
</html>