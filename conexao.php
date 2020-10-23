<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "root";
    $banco = "bancophp";

    $conn = new PDO("mysql::host=".$host.";dbname=".$banco,$usuario,$senha);
?>