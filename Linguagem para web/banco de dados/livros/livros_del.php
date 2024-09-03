<?php

    $id = $_GET["id"];
    

    include_once("conexao.php");

        $id = 0;
        if(isset( $_GET["id"])){
            $id = $_GET["id"];
        }
        
 
    if($id){
        $conn = Conexao::getConexao();

    $sql = "DELETE FROM livros  WHERE id = ?";


  
         $stm = $conn->prepare($sql);
         $stm->execute([$id]);

         //redireciona de volta
         header("location: livros.php");
    }else{
        echo"id do livro invalido.tente novamente";
        echo'<a href="livro.php">Voltar</a>';
    }
  
    

       

       
?>
