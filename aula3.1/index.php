<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <!-- Estrutura de metodo get/post que liga com resultado.php (leva pra outra pag) 
        Se n quiser que leve pra outra pag usa #-->

<form method = "post" action="resultado.php">

Valor 1: 
<input type="text" name="valor1">
<br>
Valor 2: 
<input type="text" name="valor2">
<br>
<input type="submit" name="operacao" value="soma">
<input type="submit" name="operacao" value="subtracao">
<input type="submit" name="operacao" value="multiplicacao">
<input type="submit" name="operacao" value="divisao">

</form>

</body>
</html>