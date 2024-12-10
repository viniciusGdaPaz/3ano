<?php

include_once(__DIR__ . "/../../model/Aluno.php");
include_once(__DIR__ . "/../../model/Curso.php");
include_once(__DIR__ . "/../../controller/AlunoController.php");

$msgErro = "";
$aluno = null;

$alunoCont = new AlunoController();

if(isset($_POST['nome'])) {
    //Capturando os dados do formulário
    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : null;
    $idade = is_numeric($_POST['idade']) ? $_POST['idade'] : null;
    $estrang = trim($_POST['estrang']) ? trim($_POST['estrang']) : null;;
    $curso = $_POST['curso'];
    $idAluno = $_POST['id'];

    //Criando o objeto aluno para alterar
    $aluno = new Aluno();
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrang);

    if($curso) {
        $cursoObj = new Curso();
        $cursoObj->setId($curso);
        $aluno->setCurso($cursoObj);
    } else
        $aluno->setCurso(null);

    $aluno->setId($idAluno);

    //print_r($aluno);
    //exit;

    //Chamando a rotina do controller para alterar o aluno
    $erros = $alunoCont->alterar($aluno);

    if(count($erros) <= 0) {
        //Redirecionando para a listagem
        header("location: listar.php");
    } else {
        $msgErro = implode("<br>", $erros);
        //echo $msgErro;
    }
} else {
    //Rotina para carregar os dados do aluno
    $idAluno = 0;
    if(isset($_GET['id']))
        $idAluno = $_GET['id'];

    if($idAluno) {
        //Carregar os dados e exibir o forumulário
        $aluno = $alunoCont->buscarPorId($idAluno);

    } else {
        echo "ID do usuário é inválido!<br>";
        echo "<a href='listar.php'>Voltar</a>";
        exit;
    }
}



include("form.php");
