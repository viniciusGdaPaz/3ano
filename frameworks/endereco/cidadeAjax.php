<?php
require_once "conexao.php";
function buscaCidade($id){
    $con = Conexao::conectar();
    $sql = "select * from cidade where idEstado =". $id;
    $query = $con->query($sql);
    $dados=$query->fetchAll(PDO::FETCH_OBJ);
    foreach($dados as $dado){
        echo"  <option value=' ".$dado->id."'>".$dado->nomeCidade."</option>";
      
    }
}
buscaCidade($_GET["id"]);

?>
