<?php
    if(empty($_POST['nome'] || empty($_POST['cpf']))){
        header('location:index.html');
    }else{
        include('conexao.php');
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $sql = "INSERT INTO pessoa (nome_pessoa, cpf_pessoa) values (:nome, :cpf)";
        $inserir = $conn->prepare($sql);
        $inserir->bindParam(':nome', $nome);
        $inserir->bindParam(':cpf', $cpf);
        $resultado = $inserir->execute();

        if(!$resultado){
            var_dump($inserir->errorInfo());
        }
    }




?>