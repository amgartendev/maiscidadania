<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'pap';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName) or die ('Não foi possível se conectar!!');
?>
