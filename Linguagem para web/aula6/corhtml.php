<?php

$cor = $_GET["cor"];

if($cor == null){
     echo"valor nulo passado";
}else if ( ctype_alpha($cor)){
    echo"<style>
     body{
        background-color:$cor;
     }
</style>"; 
} else {
    echo"ERRO , TENTE NOVAMENTE";
}






?>
