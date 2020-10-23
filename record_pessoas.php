<?php
    include('conexao.php');

    $sql = "SELECT * from pessoa";
    $consulta = $conn->prepare($sql);
    $consulta->execute();

    $registros = $consulta->fetchAll(PDO::FETCH_OBJ);
?>