<?php
require_once"../fwkSis/FWK.php";
require_once "Conexao.php";
class LivroDao{
    private $con;
    private $fwk;
    public function __construct(){
        $this->con=Conexao::conectar();
        $this->fwk = new FWK();
    }
    function inserir($obj){
          
          $this->fwk->salvar($obj);
    }
}
