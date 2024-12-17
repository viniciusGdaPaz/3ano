<?php

require_once(__DIR__ . "/../dao/UsuarioDao.php");
require_once(__DIR__ . "/../service/UsuarioService.php");

class UsuarioController {

    private UsuarioDAO $usuarioDAO;
    private UsuarioService $usuarioService;

    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO();    
        $this->usuarioService = new UsuarioService();        
    }

    public function logar(string $login, string $senha) {
        $erros = $this->usuarioService->validarDadosLogin($login, $senha);

        if(! empty($erros))
            return $erros;

        //TO DO - Implementar validação de login
        $usuario = $this->usuarioDAO->findByLoginSenha($login, $senha);
        if(!$usuario){
            return(array("Login ou senha invalidos!"));
        }

        $this->usuarioService->salvarSessao($usuario);
        
        //Retorna um array vazio para indicar que tudo deu certo
        return array();
    }

    public function deslogar(){
        $this->usuarioService->removerSessao();



    }


    public function estaLogado(){
       return $this->usuarioService->usuarioExisteSessao();
    }

    public function getNomeUsuarioLogado(){
        
        return $this->usuarioService->getNomeUsuarioLogado();


    }

}
