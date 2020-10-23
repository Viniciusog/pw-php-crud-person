<?php
    include('conexao.php');

    if(empty($_GET['id'])){
        header('location:index.html');
    }else{
        $id = filter_var($_POst['id']);

        $sql = 'DELETE FROM pessoas where id_pessoa :id';
        $update = $conn->prepare($sql);
        $update->bindParam(':id', $id);

        $resultado = $update->execute();
    }

?>