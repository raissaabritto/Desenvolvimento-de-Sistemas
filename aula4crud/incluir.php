<?php
include 'conexao.php';

$id = $_REQUEST['id_pessoa'];
$nome = $_REQUEST['nome'];
$dt_nascimento = $_REQUEST['nascimento'];
$email = $_REQUEST['email'];

if($id != null){
    //Lógica para atualizar se não for vazio
    $sql = "UPDATE tb_pessoa SET tx_nome = :nome, dt_nascimento = :nascimento, tx_email = :email WHERE id_pessoa = :id";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(":id", $id);
}else{
    //Se for vazio ele vai inserir
    $sql = "INSERT INTO tb_pessoa (tx_nome, dt_nascimento, tx_email) VALUES (:nome, :nascimento, :email)";
    $statement = $pdo->prepare($sql);
}

$statement->bindParam(":nome", $nome);
$statement->bindParam(":nascimento", $dt_nascimento);
$statement->bindParam(":email", $email);
$statement->execute();


header("Location: index.php");

?>