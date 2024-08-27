<?php


//Configuração para mostrar os erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

//conecta o arquivo conexao com o forumulario
include_once("conexao.php");
 
  
    $conn = Conexao::getConexao();
    print_r($conn)
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livro</title>
</head>
<body>
    
     
       <fieldset><h3>Formulário do livro</h3>

        <form  method="post">

            <label for="titulo">Título </label>
            <input type="text" name="titulo" placeholder="informe o titulo do livro" required>
            <br><br>

            <label for="genero">Gênero do Livro</label>
            <select name="genero" required>
                <option value="">---Selecione o Gênero---</option>
                <option value="A">Aventura</option>
                <option value="D">Drama</option>
                <option value="F">Ficção</option>
                <option value="R">Romance</option>
                <option value="O">Outros</option>
            </select>
            <br> <br>


            <label for="qtdPaginas">Numero de Páginas</label>
            <input type="number" name="qtdPaginas" placeholder="informe a quantidade de páginas" required>
            <br><br>

            <input type="submit" value="Gravar"> &nbsp;
            <input type="reset" value="Limpar">
        </form>
       </fieldset>


     <h3>Listagem do livros</h3>


</body>
</html>
