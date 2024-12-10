<?php
//Pagina para deslogar do sistema

include_once(__DIR__."/../../controller/UsuarioController.php");

$usuarioCon = new UsuarioController();
$usuarioCon->deslogar();

header("location:". BASE_URL."/view/login/login.php");

?>
