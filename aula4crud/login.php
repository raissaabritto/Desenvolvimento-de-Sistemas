<?php
#Essa parte será substituida por uma consulta da tabela de usuario do banco do sistema
    session_start();
    $usuarioBd = "raissa.abate";
    $senhaBd = md5("123456");

    $usuario = $_REQUEST['usuario'];
    $senha = $_REQUEST['senha'];

    if($senhaBd == $senha){
        $_SESSION['usuario'] = $usuarioBd; #informação que fica salva para usar em todas as paginas
        header("Location: pesquisar.php");#redireciona para pesquisar se as senhas forem iguais
    }else{
        header("Location: index.php");#redireciona para index se a senha não bater
    }


?>