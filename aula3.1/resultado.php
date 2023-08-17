<!--
    //função get ou post para pegar nome no atributo name - ligando php com html
    //função php para usar tanto get como post $_REQUEST
    $nome = $_REQUEST['nome'];
    echo "Meu nome é: " . $nome;
-->

<?php
$valor1 = $_REQUEST['valor1'];
$valor2 = $_REQUEST['valor2'];
$operacao = $_REQUEST['operacao'];

switch($operacao){
    case "soma":
        $resultado = $valor1 + $valor2;
        break;
    case "subtracao":
        $resultado = $valor1 - $valor2;
        break;
    case "multiplicacao":
        $resultado = $valor1 * $valor2;
        break;
    case "divisao":
        if ($valor2 == 0 && $operacao == 'divisao'){
            $resultado = "Inválido! Insira um valor diferente de 0.";
        }else{
            $resultado = $valor1 / $valor2;
            break;
        }
}

echo "Resultado: " .$resultado;
?>

<form method = "post" action="index.php">
<input type="submit" name="voltar" value="Retornar" style="background-color: #000; color: #fff; border: none; cursor: pointer; padding: 10px 20px;">
</form>