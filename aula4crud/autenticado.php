<?php
#include autenticado nas paginas que quero proteger
    session_start();
    
    if(!isset($_SESSION['usuario'])){
        header("Location: index.php");
    }
?>

