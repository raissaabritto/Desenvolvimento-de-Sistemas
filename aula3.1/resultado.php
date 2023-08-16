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
        $resultado = $valor1 / $valor2;
        break;

}


echo "Resultado: " .$resultado;
?>

