<?php

class Conexao{
    public static function conectar(){
    try{
            $conn = new PDO("mysql:host=localhost;dbname=endereco","root","bancodedados");
            
        }
        catch (Exception $e){
            echo"Erro:". $e->getMessage();
        }
        
        return $conn;

    }
    
}
?>
