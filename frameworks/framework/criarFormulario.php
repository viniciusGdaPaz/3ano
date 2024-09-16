<?php
include "sistema/dao/conexao.php";
$conn=Conexao::conectar();
$banco="Tables_in_".$_GET["bd"];
$query = $conn->query("show tables");
$tabelas = $query->fetchALL(PDO::FETCH_OBJ); 
$tb="Tables_in_".$_GET["bd"];
echo "<form method='post' action='#'>";
echo "<select name=\"tabelas\">";
foreach ($tabelas as $tabela) {
    echo "<option>".$tabela->$tb."</option>";
}
echo "</select>";
echo "<button type='submit'>Criar</button>";
if($_POST){
    $queryAttr = $conn->query("show columns from " . $_POST["tabelas"]);
    $atributos = $queryAttr->fetchAll(PDO::FETCH_OBJ);
    $conteudo = "<html> \n \t<head>\n\t<title>Cadastro</title>\n<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>";
    $conteudo .="<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>\n<link rel='stylesheet' href='../../estilo.css'> \n</head>\n<body>\n";
    $conteudo.="\t<div class='card mx-auto mt-5'>\n\t<div class='card-body'>\n\t<form method='post' action ='#'>\n";
    foreach ($atributos as $atributo) {
        if(strpos($atributo->Extra, 'auto_increment') === false){                                                                                                                                                                
            if(strpos($atributo->Extra, 'primary_key') === false){

            $conteudo.="\t<p>".$atributo->Field . ": </p> <div class='mb-3' >\n\t<input type = 'text' name = ". $atributo->Field ."><br>\n\t</div>\n";

            }
        }
    }
    $conteudo.="\n\t<button type = 'submit'>Enviar Dados</button>\n\t<button type = 'reset'>Limpar Dados</button>\n";
    $conteudo.="\t</form>\n\t</div>\n\t</div>\n";
    $conteudo.="</body>\n</html>";
    file_put_contents("sistema/view/" . "Cadastro".$_POST["tabelas"].".php", $conteudo);
}

?>

