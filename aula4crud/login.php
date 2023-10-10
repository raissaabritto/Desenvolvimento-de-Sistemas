<?php
#Essa parte será substituida por uma consulta da tabela de usuario do banco do sistema

    include 'conexao.php';
    session_start();

    $sql= "select * from tb_usuario
            where tx_email = :email and
                    tx_senha = :senha";


    $email = $_REQUEST['email'];
    $senha = md5($_REQUEST['senha']);

    $statementEdit = $pdo->prepare($sql);
    $statementEdit->bindParam(":email", $email);
    $statementEdit->bindParam(":senha", $senha);
    $statementEdit->execute();
    $usuario = $statementEdit->fetch(PDO::FETCH_OBJ);

    if($usuario){
        $_SESSION['usuario'] = $usuario; #informação que fica salva para usar em todas as paginas
        header("Location: pesquisar.php");#redireciona para pesquisar se as senhas forem iguais
    }else{
        header("Location: index.php?mensagem= 'Usuário ou Senha inválidos'");#redireciona para index se a senha não bater
    }

?>