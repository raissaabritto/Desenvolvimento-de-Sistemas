<?php
    $pdo = new PDO("mysql:host=localhost;dbname=db_chamada, "root", "); 

?>

<!--
    Para conectar ao banco de dados

$pdo = new PDO("mysql:host=localhost;dbname=enap", "root", ""); 

ou

$conn = mysqli_connect($servername, $username, $password, $database);

Para realizar uma consulta

        $sql = "SELECT * FROM tb_escola order by 1";

        try {

            $statement = $this->connectionPdo->prepare($sql);

            $statement->execute();

            if ($statement->rowCount() > 0) {

                $dados = $statement->fetchAll(PDO::FETCH_OBJ);

            }

        } catch (PDOException $e) {

            echo $e->getMessage();

        } finally {

            return $dados;

        }



Para salvar um registro usando PDO

$statement-= $pdo->prepare('INSERT INTO tb_escola (nome) VALUES(:nome)');

$statement->bindValue(':nome', $nome);

$statement->execute();

if ($statement->rowCount() > 0) {

   $dados = $statement->fetch(PDO::FETCH_OBJ);

 }

Para excluir um registro

    include 'conexao.php';

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM tb_escola WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $id);

    if($stmt->execute()){

        echo "Registro {$id} excluido com sucesso";

    }

    header("Location: index.php");

-->