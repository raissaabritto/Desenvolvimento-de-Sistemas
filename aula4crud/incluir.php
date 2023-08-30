<?php
include 'conexao.php';

$nome = $_REQUEST['nome'];
$dt_nascimento = $_REQUEST['nascimento'];
$email = $_REQUEST['email'];

$sql = "INSERT INTO tb_pessoa (tx_nome, dt_nascimento, tx_email) VALUES (:nome, :nascimento, :email)";

$statement = $pdo->prepare($sql);
$statement->bindParam(":nome", $nome);
$statement->bindParam(":nascimento", $dt_nascimento);
$statement->bindParam(":email", $email);
$statement->execute();

header("Location: index.php");

?>