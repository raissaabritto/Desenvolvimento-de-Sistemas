<?php
include 'conexao.php';

$id = $_REQUEST['id_pessoa'];

$sql = "UPDATE tb_pessoa SET tx_nome = value1, column2 = value2, ... WHERE condition";

$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $id);
$statement->execute();

header("Location: index.php");

?>