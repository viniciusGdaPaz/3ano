<?php
    
    class Conexao{
        private static $conn = null;

        public static function getConexao(){
            if(self::$conn ==null ){
                //criar a conexão com on banco
                $opcoes = array(
                    //Define o charset da conexão
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    //Define o tipo do erro como exceção
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                   //Definir o retorno das consultas ao banco
                 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC );


                $endereco = "mysql:host=localhost;dbname=db_livros";
                $usuario="root";
                $senha="bancodedados";

                self::$conn = new PDO($endereco, $usuario, $senha, $opcoes);
            }

           

            return self::$conn;
        }
    }
?>
