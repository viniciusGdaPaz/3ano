
<?php
include_once(__DIR__."/../../controller/UsuarioController.php");
$nomeUsuario = "não Logado";
$usuarioController = new UsuarioController();

$usuarioLogado = $usuarioController->getNomeUsuarioLogado();
if($usuarioLogado){
    $nomeUsuario = $usuarioLogado;
}

?>
<nav class="navbar navbar-expand-md bg-success px-3">
    <a class="navbar-brand" href="<?= BASE_URL?>">Alunos</a>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL?>">Home</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#"
                id="navDropDown" data-bs-toggle="dropdown">Cadastros</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?= BASE_URL?>/view/alunos/listar.php">Alunos</a>
                <a class="dropdown-item" href="#">Turmas</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#"
                id="navDropDown2" data-bs-toggle="dropdown"><?= $nomeUsuario?></a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?= BASE_URL?>/view/login/loginSair.php">Sair</a>
               
            </div>
        </li>


    </ul>
</nav>
