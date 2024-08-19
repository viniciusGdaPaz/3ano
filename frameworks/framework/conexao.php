<?php
    try{
    /** $usuario = "root";
    $senha = "bancodedados";  */    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $banco = $_POST['banco'];
    $servidor = $_POST['servidor'];



    $conn = new PDO("mysql:host=".$servidor.";dbname=$banco","$usuario","$senha");
    /**echo"<br>Conexão estabelecida com sucesso";
     echo"<br>Servidor: " . $_POST['servidor'];
     echo"<br>Banco: ".$_POST['banco'];
     echo"<br>Usuario: ".$_POST['usuario'];
     echo"<br>Senha: ".$_POST['senha']; */
     header("Location:frameworkMVC.php?msg=0");
    }
    catch(PDOException $e){
    
    /**echo "Falha na conexão com o banco de dados";
    echo "ERRO: $e->getMessage()";
 */    header("Location:frameworkMVC.php?msg=1");
    }
?>
