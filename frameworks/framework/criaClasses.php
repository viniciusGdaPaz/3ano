<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
class criaClasses
    {
    static function criar($conn,$banco, $usuario, $senha)
    {
       $tbanco="Tables_in_".$banco;
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
            $conteudo .= "<?php\nclass " . ucfirst($tabela->$tbanco) . "{\n";
            $queryAttr = $conn->query("show columns from " . $tabela->$tbanco);
            $atributos = $queryAttr->fetchAll(PDO::FETCH_OBJ);
            foreach ($atributos as $atributo) {
                $conteudo .= "private $" . $atributo->Field . ";\n";
            }

            foreach ($atributos as $atributo) {
                $conteudo .= "function get" . ucfirst($atributo->Field) . "(){
              return $" . "this->" . $atributo->Field . ";\n}\n";
                $conteudo .= "function set" . ucfirst($atributo->Field) . "($" . $atributo->Field . "){
             $" . "this->" . $atributo->Field . "=$" . $atributo->Field . ";
         }\n";
            }
            $conteudo .="}\n?>";
            file_put_contents("sistema/model/" . $tabela->$tbanco . ".php", $conteudo);
            $conteudo = "";
        }
         //Criação de classes da camada DAO
         foreach ($tabelas as $tabela) {
            $conteudo = "<?php\ninclude 'conexao.php';\n\n";
            $conteudo .= "class " . ucfirst($tabela->$tbanco) . "DAO {\n";
            $conteudo .= "\tprivate \$con;\n\n";
            $conteudo .= "\tpublic function __construct() {\n";
            $conteudo .= "\t\t\$this->con = Conexao::conectar();\n";
            $conteudo .= "\t}\n\n";

            $conteudo .= "\tpublic function inserir(" . '$obj' . ") {\n";
            $conteudo .= "\t\t\$sql = \"INSERT INTO " . $tabela->$tbanco . " (";


            $query = $conn->query("show columns from " . $tabela->$tbanco);
            $atributo = $query->fetchAll(PDO::FETCH_OBJ);
            $atributo_sql = [];
            foreach ($atributos as $atributo) {
                if (strpos($atributo->Extra, 'auto_increment') === false) {
                    $atributo_sql[] = $atributo->Field;
                }
            }
            $conteudo .= implode(", ", $atributo_sql) . ") VALUES (";
            
            // Loop para colocar  os placeholders nos atributos
            $placeholders = array_fill(0, count($atributos)-1, "?");
            $conteudo .= implode(", ", $placeholders) . ")\";\n";
            
            $conteudo .= "\t\t\$stmt = \$this->con->prepare(\$sql);\n";
            $conteudo .= "\t\t\$stmt->execute([\n";
            
            $valores = [];
            foreach ($atributos as $atributo) {
                if (strpos($atributo->Extra, 'auto_increment') === false) {
                    $valores[] = '$obj->get' . ucfirst($atributo->Field) . '()';
                }
            }
            $conteudo .= "\t\t\t" . implode(",\n\t\t\t", $valores) . "\n";
            $conteudo .= "\t\t]);\n";
            $conteudo .= "\t}\n\n";
            
            $conteudo .= "\tpublic function excluir() {}\n\n";
            $conteudo .= "\tpublic function buscar() {}\n\n";
            $conteudo .= "\tpublic function alterar() {}\n";
            $conteudo .= "}\n?>";
            
            file_put_contents("sistema/dao/" . $tabela->$tbanco . "DAO.php", $conteudo);
        }





          //Criação do arquivo de conexão da camada DAO
		$conteudo="<?php\nclass Conexao{\n";
        $conteudo .= "\tprivate static $". "con;\n";
        $conteudo .= "\tstatic function conectar() {\n";
		$conteudo .= "\t\ttry{\n";
		$conteudo .= "\t\t\tself::$"."con = new PDO('mysql:host=localhost;dbname=$banco','$usuario','$senha');\n";
        $conteudo .= "\t\treturn self::$"."con;\n";
		$conteudo.= "\t\t}catch(PDOException $"."e){\n";
		$conteudo.= "\t\t\techo $"."e"."->getMessage();";
		$conteudo .= "\n\t\t}\n\t}\n}\n?>";
		file_put_contents("sistema/dao/" . "conexao.php", $conteudo);
        
         
    

         //Criação de Classes da camada control
         $conteudo = "";
         foreach($tabelas as $tabela){
             $conteudo = "include'../dao/". $tabela->$tbanco."DAO.php';\n";
             $conteudo .= "class" . ucfirst($tabela->tbanco). "Control{\n";
             file_put_contents("sistema/control/".$tabela->banco. "Control.php", $conteudo);
          
         }
        return 1;

    }
}
 ?>
 
