<?php
include_once('conexao.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    if($id){
        $conn = Conexao::getConexao();
        $sql = "DELETE FROM jogos WHERE id=?";
        $stm = $conn->prepare($sql);
        $stm->execute([$id]);
        header("Location: jogos.php");
    }else{
        echo "O ID informado é invalido";
        echo '<a href="jogos.php">Voltar</a>';
    }
}

?>
