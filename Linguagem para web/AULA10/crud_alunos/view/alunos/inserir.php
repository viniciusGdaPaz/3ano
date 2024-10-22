<?php
include_once(__DIR__."/../../model/Aluno.php");

include_once(__DIR__."/../../model/Curso.php");
include_once(__DIR__."/../../controller/AlunoController.php");
if(isset($_POST['nome'])){
    
    $nome = trim($_POST['nome'])? trim($_POST['nome']):null;
    $idade = is_numeric($_POST['idade'])?$_POST['idade']:null;
    $estrang = trim($_POST['estrang'])?trim($_POST['estrang']):null;
    $curso = trim($_POST['selCurso'])?$_POST['selCurso']:null;
    
    
    $aluno = new Aluno();
    $aluno->setIdade($idade);
    $aluno->setNome($nome);
    
    $aluno->setEstrangeiro($estrang);
    
    $cursoObj = new Curso();
    $cursoObj->setId($curso);
    $aluno->setCurso($cursoObj);

    $alunoCont = new AlunoController();
    $alunoCont->inserir($aluno);
    //print_r($aluno);
    header("location: listar.php");
}else
echo"Usuario ainda não informou os dados";

include("form.php");
?>
