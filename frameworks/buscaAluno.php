<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

require_once "conexao.php";

    $conn=Conexao::conectar();
    $sql = "SELECT * FROM alunos ORDER BY nome";
    $query = $conn->query($sql);
    $dados=$query->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($dados);

?>