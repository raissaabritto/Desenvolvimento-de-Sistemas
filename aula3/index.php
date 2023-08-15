<?php
echo "Olá mundo\n";
define("N_DIAS", 365);

//declaração de variáveis 
$a = 1;
$b = 2;
$c = $a+$b;

echo "$c";
?>
<br>
<?php
//função que apresenta uma mensagem
function apresentaMensagem(){
    echo "Olá Mundo na função";
}

apresentaMensagem();

?>
<br>
<?php

function apresentaMsg($msg){
    echo $msg;
}

apresentaMsg("Olá por parametro");
?>

<br>
<?php
//função com retorno
function apresentaMsg2($msg2){
    return $msg2;
}

$texto = apresentaMsg2("Ola");
echo $texto;
?>