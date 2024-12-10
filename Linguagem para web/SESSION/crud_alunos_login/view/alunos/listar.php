<?php 
//Teste de conexão com a base de dados
/*
include_once(__DIR__ . "/../../util/Connection.php");
$conn = Connection::getConnection();
print_r($conn);
*/

//Carregando a lista de alunos
include_once(__DIR__ . "/../../controller/AlunoController.php");

$alunoCont = new AlunoController();
$alunos = $alunoCont->listar();
//print_r($alunos);

//Inclusão do HTML do header
include_once(__DIR__ . "/../include/header.php");
?>

<h2>Listagem de Alunos</h2>

<a href="inserir.php" class="btn btn-primary btn-sm">Inserir</a>

<table class="table table-striped table-bordered mt-2">
    <!-- Cabeçalho da tabela -->
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Estrangeiro</th>
        <th>Curso</th>
        <th></th>
        <th></th>
    </tr> 

    <!-- Dados da tabela -->
    <?php foreach($alunos as $a): ?> 
        <tr>
            <td><?= $a->getId(); ?></td>
            <td><?= $a->getNome(); ?></td>
            <td><?= $a->getIdade(); ?></td>
            <td><?= $a->getEstrangeiroTexto(); ?></td>
            <td><?= $a->getCurso(); ?></td>
            <td>
                <a href="alterar.php?id=<?= $a->getId(); ?>" >
                    <img src="../../img/btn_editar.png">
                </a>
            </td>
            <td>
                <a href="excluir.php?id=<?= $a->getId(); ?>"
                    onclick="return confirm('Confirma a exclusão do aluno?');">
                    <img src="../../img/btn_excluir.png">
                </a>
            </td>
        </tr>
    <?php endforeach; ?> 

</table>

<?php
    include_once(__DIR__ . "/../include/footer.php");
?>
    

