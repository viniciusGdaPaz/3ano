<?php


//Configuração para mostrar os erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

//conecta o arquivo conexao com o forumulario
include_once("conexao.php");
 
  
    $conn = Conexao::getConexao();

   // print_r($conn);

  //verifica se o usuario ja clicou no gravar
    if(isset($_POST['titulo'])){
         $titulo = $_POST['titulo'];
        $genero = $_POST['genero'];
        $qtdPaginas = $_POST['qtdPaginas'];


    $msgErro = '';
    // validar os dados
    if($titulo ==''){
      $msgErro = "Informe o titulo do livro";
    }else if($genero == ""){
     $msgErro = "Informe o genero";
    }
    else if($qtdPaginas >=0){
     $msgErro = "Numero de paginas minimas não alcançado :)";
    }
    else{

        $sql = "INSERT INTO livros (titulo,genero,qtd_paginas)
                VALUES(?,?,?)";
  
         $stm = $conn->prepare($sql);
         $stm->execute([$titulo, $genero, $qtdPaginas]);


         //redirecionar para a pagina desiguinada
         header("Location: livro.php");
    }





       
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livro</title>
 
</head>
<body>
    
     
       <fieldset style="border-radius: 10px;"><h3>Formulário do livro</h3>
          <!--<form  method="post" onsubmit="return validarCampos()"> -->
        
        <form  method="post" >

            <label for="titulo">Título </label>
            <input type="text" name="titulo"  id="titulo"  placeholder="informe o titulo do livro" required  value="<? echo $titulo?>">
            <br><br>

            <label for="genero">Gênero do Livro</label>
            <select name="genero" id="genero" required>
                <option value="">---Selecione o Gênero---</option>
                <option value="A">Aventura</option>
                <option value="D">Drama</option>
                <option value="F">Ficção</option>
                <option value="R">Romance</option>
                <option value="O">Outros</option>
            </select>
            <br> <br>


            <label for="qtdPaginas">Numero de Páginas</label>
            <input type="number" name="qtdPaginas" id="qtdPaginas" placeholder="informe a quantidade de páginas" required>
            <br><br>

            <input type="submit" value="Gravar"> &nbsp;
            <input type="reset" value="Limpar">
        </form>
        <br>
         <span id="msg" style="color: red;"><? echo $msgErro ;?></span>
       </fieldset>

      


     <h3>Listagem do livros</h3>
 
     <?php
         
       $sql = "SELECT * FROM livros";
       $stm = $conn->prepare($sql);
       $stm->execute();
       $livros = $stm->fetchAll();


     ?>

<table border = "5">
        <tr>
           
            <th>Título</th>
            <th>Gênero</th>
            <th>Páginas</th>
            <th>Excluir</th>
        </tr>   
        
        <?php foreach($livros as $l):  ?>
        <tr>
            <td><?php echo $l["id"]; ?></td>
            <td><?php echo $l["titulo"]; ?></td>
            <td>
                <?php
             
                    $var = $l["genero"];
                    
                    switch ($var) {
                        case 'A':
                            echo"Aventura";
                            break;

                        case 'D':
                            echo"Drama";
                            break;
                            
                        case 'F':
                            echo"Ficção";
                            break;
                        
                        case 'R':
                            echo"Romance";
                            break;
                        
                        case 'O':
                            echo"Outro";
                            break;
                        
                       
                    }
             
             
                ?>
            </td>
            <td><?= $l["qtd_paginas"]; ?></td>
            <td>
                <a href="livros_del.php?id=<?=$l['id']?>" onclick="return confirm('Confirma a Exclusão do livro')"> Excluir </a>    
            </td>
        </tr>
    
        <?php endforeach; ?>
    </table>



<!--  <script src="validar.js"></script> -->
   
</body>
</html>
