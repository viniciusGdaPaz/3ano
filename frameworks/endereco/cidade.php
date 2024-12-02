<?php
require_once "conexao.php";
function buscaCidade($id){
    $con=Conexao::conectar();
    $sql= "SELECT * FROM cidade WHERE idEstado = ".$id;
    $query = $con->query($sql);
    $dados=$query->fetchAll(PDO::FETCH_OBJ);
    return $dados;
}
?>
