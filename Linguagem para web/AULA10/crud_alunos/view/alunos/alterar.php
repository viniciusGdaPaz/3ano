<?php
include_once(__DIR__."/../../model/Aluno.php");

include_once(__DIR__."/../../model/Curso.php");
include_once(__DIR__."/../../controller/AlunoController.php");
$msgErro = "";
$aluno = null;
$alunoControl = new AlunoController();
if(isset($_POST['nome'])){
    
    $nome = trim($_POST['nome'])? trim($_POST['nome']):null;
    $idade = is_numeric($_POST['idade'])?$_POST['idade']:null;
    $estrang = trim($_POST['estrang'])?trim($_POST['estrang']):null;
    $curso = trim($_POST['selCurso'])?$_POST['selCurso']:null;
    $idAluno = $_POST['id'];
    
    
    $aluno = new Aluno();
    $aluno->setIdade($idade);
    $aluno->setNome($nome);
    
    $aluno->setEstrangeiro($estrang);
    
    if($curso){
        
        $cursoObj = new Curso();
        $cursoObj->setId($curso);
        $aluno->setCurso($cursoObj);
    }else{
        
        $aluno->setCurso(null);
    }
        $aluno->setId($idAluno);
       //print_r($aluno);
        //exit;
   
    
    $alunoCont = new AlunoController();
    $erros=$alunoCont->alterar($aluno);
    if(count($erros)<= 0){
        
        header("location: listar.php");
        
        
    }else{
        $msgErro = implode("<br>",$erros);
        //echo "<p style='color: red;'>".implode("<br>",$erros)."</p>";
    }
    
}else{
    //Rotina para carregar os dados do usuario
    $idAluno = 0;
    if(isset($_GET['id'])){

        $idAluno = $_GET['id'];
    }

    if($idAluno){
        //Carregar os dados e exibir o Formulario
         $aluno = $alunoControl->buscarID($idAluno);
   

    } else {
        echo"ID do úsuario é invalido!<br>";
        echo"<a href='listar.php'>VOLTAR</a>";
        exit;
    }
}

include("form.php");
?>
