<?php

include_once(__DIR__."/../dao/AlunoDao.php");

class AlunoController{

    public function listar() {
        $alunoDao = new AlunoDao();
        
        $alunos = $alunoDao->list();
        return $alunos;
    }

    public function inserir($aluno){
     $alunoDao = new AlunoDao();
     $alunoDao->insert($aluno);  
    }

    public function deletar($id){
       $alunoDao = new AlunoDao();
       $alunoDao->delete($id);
    }
}

?>
