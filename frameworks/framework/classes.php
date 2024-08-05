<?php

include "conexao.php";
$query = $conn->query("show tables");    /** fatch retorna um item, fatchAll retorna mais , FETCH_OBJ diz q o retorno é feito em forma de objeto */
$tabelas = $query->fetchAll(PDO::FETCH_OBJ);
$conteudo = "";
foreach($tabelas as $tabela){/**ucfisrt uper case fisrt =  transforma a primeira letra em maiuscula */
    $conteudo .= "class" . ucfirst($tabela-> Tables_in_framework). "{\n";
        $queryAttr = $conn->query("show columns from" . $tabela->Tables_in_framework);
        $atributos= $queryAttr->fetchAll(PDO::FETCH_OBJ);
        foreach($atributos as $atributo){
            $conteudo .="private $" . $atributo->field. ";\n"; 
        }
        foreach($atributos as $atributo){
            $conteudo .= "function get". ucfirst($atributo->Field) . "(){
                return $"."this->".$atributo->field.";}\n";

            $conteudo .= "function set". ucfirst($atributo->Field) . "($".$atributo->Field."){
                $"."this->".$atributo->field.";
            }\n";

        }

        file_put_contents($tabela->tables_in_root.".php",$conteudo);
        $conteudo = "";
}








?>
