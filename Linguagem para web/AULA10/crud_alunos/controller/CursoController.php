<?php

include_once(__DIR__."/../dao/AlunoDao.php");

class AlunoController{

    public function listar() {
        $alunoDao = new AlunoDao();
        
        $alunos = $alunoDao->list();
        return $alunos;
    }
}

?>
