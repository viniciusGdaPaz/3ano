<?php

include_once(__DIR__."/../../controller/AlunoController.php");


if(isset($_GET['id'])){
    $id = $_GET['id'];

    $alunoCont = new AlunoController();
    $alunoCont->deletar($id);
    header("location: listar.php");
}else{
    echo"ID não informado";
}



?>
