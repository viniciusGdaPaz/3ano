<?php

include_once(__DIR__."/../include/header.php");
include_once(__DIR__."/../../controller/CursoController.php");
$cursoCont = new CursoController();
$cursos = $cursoCont->listar();
//print_r($cursos);
?>

<h3>Cadastrar Aluno</h3>
<form id="formAluno" methood="POST">

    <div>
        <label for="txtNome">Nome</label>
        <input type="text" placeholder="Informe o nome" name="nome" id="textNome" maxlength="70">
    </div>

    <div>
        <label for="txtIdade">Nome</label>
        <input type="number" placeholder="Informe a idade" name="nome" id="textIdade" >
    </div>

    <div>
        <label for="selEstrange">Estrangeiro</label>
        <select name="estrang" id="selEstrange">
        <option value="">------Selecione------ </option>
        <option value="S">Sim</option>
        <option value="N">Não</option>
        </select>
    </div>

    <div>
        <label for="selCurso">Estrangeiro</label>
        <select name="selCurso" id="selCurso">
            <option value="">------Selecione------ </option>
            <?php foreach($cursos as $curso):?>
                <option value="<?= $curso->getId()?>"><?= $curso?></option>
            <?php endforeach?>   
        
       
        </select>
    </div>

    <div>
        <input type="submit" value="Gravar">
    </div>


</form>

<div>
    <a href="listar.php"><-----</a>
</div>





<?php

include_once(__DIR__."/../include/footer.php");




?>
