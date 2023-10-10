<?php
  $mensagem = isset($_REQUEST['mensagem']) ? $_REQUEST['mensagem'] :'';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/loginStyle.css">
</head>
<body>

<div class="login-box">
  <h2>Login</h2>
  <!--
  <form method="post" action="login.php">
    <div class="user-box">
      <input type="text" name="" required="">
      <label>Usuário</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Senha</label>
    </div>
    <div class="enviar">
      <input type="submit" name="Entrar">
    </div>
  </form>
</div>
--> 
    <form style="color:#ffff" method="post" action="login.php">
        Usuário: <input type="text" name="email">
        <br>
        Senha: <input type="password" name="senha">
        <input type="submit" name="Entrar">
    </form>

    <div style="color: red">
    <?php
    echo $mensagem;
    ?>
    </div>

</div>
    
</body>
</html>