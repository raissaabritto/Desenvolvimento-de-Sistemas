<?php
    include 'conexao.php';


    //var_dump($pdo);
    //A LISTAGEM

    $sql = "SELECT * FROM tb_pessoa";

        $statement = $pdo->prepare($sql);
        $statement->execute();

        $dados = $statement->fetchAll(PDO::FETCH_OBJ); //retorna uma lista de acordo com o registro do banco de dados já no formato de objeto(FETCH_OBJ)

    //var_dump($dados);

    //TRECHO DE EDIÇÃO - ao clicar em editar os dados vao aparecer nos campos de edição
    $dadosEdit = null;
    if(isset($_REQUEST['id_pessoa'])){
        $id = $_REQUEST['id_pessoa'];
        $sqlEdit = "SELECT * FROM tb_pessoa WHERE id_pessoa = :id";
        $statementEdit = $pdo->prepare($sqlEdit);
        $statementEdit->bindParam(":id", $id);
        $statementEdit->execute();
        $dadosEdit = $statementEdit->fetch(PDO::FETCH_OBJ);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Exemplo de tabela com dados de PHP</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

    <form method = "post" action="incluir.php"> 
        <!-- esse nome tem que ser igual ao banco de dados (id_pessoa) para atualizar-->
       <input type = "hidden" name = "id_pessoa"   
        value = "<?php echo  $dadosEdit != null ?
                             $dadosEdit->id_pessoa : '' ?>">
        Nome: <input type="text" name="nome" 
        value = "<?php echo  $dadosEdit != null ?
                             $dadosEdit->tx_nome : '' ?>">
        Data de Nascimento: <input type="date" name="nascimento" 
        value = "<?php echo  $dadosEdit != null ? 
                             $dadosEdit->dt_nascimento : '' ?>">
        Email: <input type="text" name="email" 
        value = "<?php echo  $dadosEdit != null ? 
                             $dadosEdit->tx_email : '' ?>">

        <input type="submit" name="Salvar">
        <input type="reset" name="Apagar">
        

        <br>
        <br>
    </form>

  <table width = "100%" border="1px solid">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>E-mail</th>
        <th>Ação</th>
      </tr>
      <?php

        foreach($dados as $linha){ ?>
           <tr>
                <td><?php echo $linha->id_pessoa ?></td>
                
                <td><?php echo $linha->tx_nome ?></td>
                
                <td><?php echo $linha->dt_nascimento ?></td>
                
                <td><?php echo $linha->tx_email ?></td>
                <td>
                    <a href="index.php?id_pessoa=<?php echo $linha->id_pessoa?>">Editar</a> | <!--Toda vez queeu clicar em editar, volta com os dados da pessoa que eu cliquei na aba de edição -->
                    <a href="excluir.php?id_pessoa=<?php echo $linha->id_pessoa ?>">Excluir</a> </td>
           </tr> 
        <?php } ?>

  </table>

</body>
</html>



<!--
    Para conectar ao banco de dados, o host é definido onde a gnt vai armazenar (amazon, ip do servidor...)

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