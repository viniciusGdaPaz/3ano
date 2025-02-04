<?php

class Conexao{
    public static function conectar(){
        try{
            $conn = new PDO("mysql:host=localhost;dbname=BDIFPR", "root", "bancodedados");
        }catch(Exception $e){
            echo "erro:". $e->getMessage();
        }
        return $conn;
    }
}
Conexao::conectar();
?>