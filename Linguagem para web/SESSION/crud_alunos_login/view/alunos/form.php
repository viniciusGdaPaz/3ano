<?php
//inclusão da verificação
include_once(__DIR__."/../login/loginVerifica.php");
//Buscar os cursos para exibir no select

include_once(__DIR__ . "/../../controller/CursoController.php");
$cursoCont = new CursoController();
$cursos = $cursoCont->listar();
//print_r($cursos);

include_once(__DIR__ . "/../include/menu.php");
include_once(__DIR__ . "/../include/header.php");
?>

<h3>Cadastrar aluno</h3>

<div class="row">
    <div class="col-6">
        <form id="formAluno" method="POST">

            <div>
                <label class="form-label" for="txtNome">Nome:</label>
                <input class="form-control" type="text" placeholder="Informe o nome"
                    name="nome" id="txtNome" maxlength="70"
                    value="<?= $aluno != null ? $aluno->getNome() : "" ?>">
            </div>

            <div>
                <label class="form-label" for="txtIdade">Idade:</label>
                <input class="form-control" type="number" placeholder="Informe a idade"
                    name="idade" id="txtIdade"
                    value="<?= $aluno != null ? $aluno->getIdade() : "" ?>">
            </div>

            <div>
                <label class="form-label" for="selEstrang">Estrangeiro:</label>
                <select class="form-control" name="estrang" id="selEstrang">
                    <option value="">----Selecione----</option>
                    <option value="S"
                        <?= $aluno != null && $aluno->getEstrangeiro() == 'S'
                            ? 'selected' : '' ?>>Sim</option>
                    <option value="N"
                        <?= $aluno != null && $aluno->getEstrangeiro() == 'N'
                            ? 'selected' : '' ?>>Não</option>
                </select>
            </div>

            <div>
                <label class="form-label" for="selCurso">Curso:</label>
                <select class="form-control" name="curso" id="selCurso">
                    <option value="">----Selecione----</option>

                    <?php foreach ($cursos as $c): ?>
                        <option value="<?= $c->getId() ?>"
                            <?php if (
                                $aluno != null && $aluno->getCurso() != null &&
                                $aluno->getCurso()->getId() == $c->getId()
                            )
                                echo "selected"; ?>>
                            <?= $c ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <input type="hidden" name="id"
                value="<?= $aluno != null ? $aluno->getId() : "" ?>">

            <div>
                <input class="btn btn-success btn-sm mt-2" type="submit" value="Gravar" />
            </div>

        </form>
    </div>

    <div class="col-6" >
        <?php if($msgErro): ?>
            <div class="alert alert-danger">
                <?= $msgErro ?>
            </div>
        <?php endif; ?>
    </div>

</div>

<div class="mt-3">
    <a class="btn btn-outline-secondary btn-sm" href="listar.php">Voltar</a>
</div>


<?php
include_once(__DIR__ . "/../include/footer.php");
?>
