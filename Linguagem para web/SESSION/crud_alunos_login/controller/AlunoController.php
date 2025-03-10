<?php

include_once(__DIR__ . "/../dao/AlunoDao.php");
include_once(__DIR__ . "/../service/AlunoService.php");

class AlunoController {

    public function listar() {
        $alunoDao = new AlunoDao();
        
        $alunos = $alunoDao->list();
        return $alunos;
    }

    public function buscarPorId($idAluno) {
        $alunoDao = new AlunoDao();

        $aluno = $alunoDao->findById($idAluno);
        return $aluno;
    }

    public function inserir($aluno) {
        $alunoService = new AlunoService();
        $erros = $alunoService->validarDados($aluno);

        if(count($erros) > 0)
            return $erros;

        $alunoDao = new AlunoDao();
        $alunoDao->insert($aluno);
        return array();
    }

    public function alterar($aluno) {
        $alunoService = new AlunoService();
        $erros = $alunoService->validarDados($aluno);

        if(count($erros) > 0)
            return $erros;

        $alunoDao = new AlunoDao();
        $alunoDao->update($aluno);
        return array();
    }

    public function excluir($id) {
        $alunoDao = new AlunoDao();

        $alunoDao->delete($id);
    }

}
