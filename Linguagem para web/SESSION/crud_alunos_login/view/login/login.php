<?php
#Página com o formulário de login

include_once(__DIR__."/../../controller/UsuarioController.php");
$msgErro = "";
$login = "";
$senha = "";

if(isset($_POST["login"])){//ja clicou  me logar
    
    $login = trim($_POST["login"]);
    $senha = $_POST["senha"];
    
    $usuarioCont = new UsuarioController();
    $erros = $usuarioCont->logar($login, $senha); 
    if(!$erros){
        header("location:". BASE_URL);
    }
    $msgErro = implode("<br>", $erros);

}

//Inclusão do HTML do header
include_once(__DIR__ . "/../include/header.php");
?>

<div class="container">
    <div class="row mt-5">
        <h3 class="col-12">Sistema de cadastro de alunos</h3>
    </div>

    <div class="row">
        <div class="col-6 alert alert-info">
            <form name="frmLogin" method="POST">
                
                <div>
                    <label class="form-label" for="txtLogin">Login:</label>
                    <input class="form-control" type="text" id="txtLogin" name="login"
                        maxlength="15" value="<?= $login ?>"/>
                </div>

                <div>
                    <label class="form-label" for="txtSenha">Senha:</label>
                    <input class="form-control" type="password" id="txtSenha" name="senha"
                        maxlength="15" value="<?= $senha ?>" />
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-success">Logar</button>
                </div>
            </form>
        </div>

        <div class="col-6">
            <?php if ($msgErro): ?>
                <div id="msgErro" class="alert alert-danger"><?= $msgErro ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
    include_once(__DIR__ . "/../include/footer.php");
?>
