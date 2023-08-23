<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
<!-- Estrutura de metodo get/post que liga com resultado.php (leva pra outra pag) 
        Se n quiser que leve pra outra pag usa #
-->

<form action="resultado.php" method="post">
<!-- 
Alterou o type de submit para button
-->
Valor 1: 
<input type="text" name="valor1" required>
<br>
Valor 2: 
<input type="text" name="valor2" required>
<br>
<input type="button" onclick = "somar" id = "somar" value="Soma">
<input type="button" onclick = "subtrair" id = "subtrair" value="Subtracao">
<br>
<input type="button" onclick = "multiplicar" id = "multiplicar" value="Multiplicacao">
<input type="button" onclick = "dividir" id = "dividir" value="Divisao">
<input type="reset" value="Limpar">

<div id="resultado"></div>

</form>

<!-- 
Criando funções para cada operação
-->
<script lang="javascript">
    function somar(){
        let valor1 = document.getElementById("valor1").value;
        let valor2 = document.getElementById("valor2").value;
        let resultado = parseInt(valor1) + parseInt(valor2);

        document.getElementById("resultado").innerHTML = resultado;

        console.log(valor1);
        console.log(valor2);
    }

    function subtrair(){
        let valor1 = document.getElementById("valor1").value;
        let valor2 = document.getElementById("valor2").value;
        let resultado = parseInt(valor1) - parseInt(valor2);

        document.getElementById("resultado").innerHTML = resultado;

        console.log(valor1);
        console.log(valor2);
    }

    function multiplicar(){
        let valor1 = document.getElementById("valor1").value;
        let valor2 = document.getElementById("valor2").value;
        let resultado = parseInt(valor1) * parseInt(valor2);

        document.getElementById("resultado").innerHTML = resultado;

        console.log(valor1);
        console.log(valor2);
    }
    function dividir(){
        let valor1 = document.getElementById("valor1").value;
        let valor2 = document.getElementById("valor2").value;
        let resultado = parseInt(valor1) / parseInt(valor2);

        document.getElementById("resultado").innerHTML = resultado;

        console.log(valor1);
        console.log(valor2);
    }

    console.log(resultado);

</body>
</html>