<?php

include_once(__DIR__ . "/../../model/Aluno.php");
include_once(__DIR__ . "/../../model/Curso.php");
include_once(__DIR__ . "/../../controller/AlunoController.php");

$msgErro = "";
$aluno = null;

if(isset($_POST['nome'])) {
    //Capturando os dados do formulário
    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : null;
    $idade = is_numeric($_POST['idade']) ? $_POST['idade'] : null;
    $estrang = trim($_POST['estrang']) ? trim($_POST['estrang']) : null;;
    $curso = $_POST['curso'];

    //Criando o objeto aluno para inserir
    $aluno = new Aluno();
    $aluno->setId(0);
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrang);

    if($curso) {
        $cursoObj = new Curso();
        $cursoObj->setId($curso);
        $aluno->setCurso($cursoObj);
    } else
        $aluno->setCurso(null);

    //print_r($aluno);

    //Chamando a rotina do controller para inserir o aluno
    $alunoCont = new AlunoController();
    $erros = $alunoCont->inserir($aluno);

    if(count($erros) <= 0) {
        //Redirecionando para a listagem
        header("location: listar.php");
    } else {
        $msgErro = implode("<br>", $erros);
        //echo $msgErro;
    }

} 

include("form.php");
