<?php
include_once(__DIR__."/../../model/Aluno.php");

include_once(__DIR__."/../../model/Curso.php");
include_once(__DIR__."/../../controller/AlunoController.php");
$msgErro = "";
$aluno = null;
if(isset($_POST['nome'])){
    
    $nome = trim($_POST['nome'])? trim($_POST['nome']):null;
    $idade = is_numeric($_POST['idade'])?$_POST['idade']:null;
    $estrang = trim($_POST['estrang'])?trim($_POST['estrang']):null;
    $curso = trim($_POST['selCurso'])?$_POST['selCurso']:null;
    
    
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
    
    $alunoCont = new AlunoController();
    $erros=$alunoCont->inserir($aluno);
    if(count($erros)<= 0){
        
        header("location: listar.php");
        
        
    }else{
        $msgErro = implode("<br>",$erros);
        //echo "<p style='color: red;'>".implode("<br>",$erros)."</p>";
    }
    
}

include("form.php");
?>
