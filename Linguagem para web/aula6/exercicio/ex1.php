<?php

$tipo = $_GET["tipo"];
$nome = $_POST["nome"];
$sobrenome = $_Post["sobrenome"];
$idade = $_Post["idade"];


if($tipo == "A"||$tipo == "a"){

    $pessoa = array("nome"=> $nome,
                    "sobrenome" => $sobrenome,
                    "idade"=> $idade);
    
    echo"Nome:".$pessoa['nome'];
    echo"  ".$pessoa['sobrenome'];
    echo"<br> idade:".$pessoa['idade'];


}else if( $tipo == "C"||$tipo == "c"){

}else{
    echo"";
}





?>
