<?php
    $driver = "mysql";
    $host = "localhost";
    $dbname = "wissen";
    $username = "root";
    $senha = '';
    $mysqli = new mysqli($host, $username, $senha, $dbname);

    if($mysqli->error){
        die("Falha ao tentar conectar: ". $mysqli->error);
    }

?>