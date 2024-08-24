<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
class criaClasses
    {
    static function criar($conn,$banco)
    {
       $banco="Tables_in_".$banco;
       $query = $conn->query("show tables");
        $tabelas = $query->fetchALL(PDO::FETCH_OBJ);
        $conteudo = "";
        umask(000);
        if (!file_exists("sistema"))
            mkdir("sistema");
        if (!file_exists("sistema/model"))
            mkdir("sistema/model");
        if (!file_exists("sistema/view"))
            mkdir("sistema/view");
        if (!file_exists("sistema/control"))
            mkdir("sistema/control");
        if (!file_exists("sistema/dao"))
            mkdir("sistema/dao");
        file_put_contents("sistema/index.php", "");
        foreach ($tabelas as $tabela) {
            $conteudo .= "class " . ucfirst($tabela->$banco) . "{\n";
            $queryAttr = $conn->query("show columns from " . $tabela->$banco);
            $atributos = $queryAttr->fetchAll(PDO::FETCH_OBJ);
            foreach ($atributos as $atributo) {
                $conteudo .= "private $" . $atributo->Field . ";\n";
            }

            foreach ($atributos as $atributo) {
                $conteudo .= "function get" . ucfirst($atributo->Field) . "(){
              return $" . "this->" . $atributo->Field . ";\n}\n";
                $conteudo .= "function set" . ucfirst($atributo->Field) . "($" . $atributo->Field . "){
             $" . "this->" . $atributo->Field . "=" . $atributo->Field . ";
         }\n";
            }
            file_put_contents("sistema/model/" . $tabela->$banco . ".php", $conteudo);
            $conteudo = "";
        }
         //Criação de classes da camada DAO
         foreach ($tabelas as $tabela) {
             $conteudo = "class " . ucfirst($tabela->$banco) . "DAO{\n";
             $conteudo .= "\tpublic __construct() {\n}\n";
             $conteudo .= "\tfunction inserir() {\n}\n";
             $conteudo .= "\tfunction excluir() {\n}\n";
             $conteudo .= "\tfunction buscar() {\n}\n";
             $conteudo .= "\tfunction alterar() {\n}\n}";
             file_put_contents("sistema/dao/" . $tabela->$banco . "DAO.php", $conteudo);
             $conteudo = "";
         }
         //Criação de Classes da camada control
         $conteudo = "";
         foreach($tabelas as $tabela){
             $conteudo = "include'../dao/". $tabela->$banco."DAO.php';\n";
             $conteudo .= "class" . ucfirst($tabela->banco). "Control{\n";
             file_put_contents("sistema/control/".$tabela->banco. "Control.php", $conteudo);
          
         }
        return 1;

    }
}
 ?>
 
