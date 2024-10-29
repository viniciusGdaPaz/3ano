<?php 

include_once(__DIR__."/../model/Aluno.php");
class AlunoService{

       public function validarDados(Aluno $Aluno){

            $erros = array();
            
            if(! $Aluno->getNome()){
                array_push($erros, "informe o nome");
            }
            if(! $Aluno->getIdade()){
                array_push($erros, "informe a idade");
            }
            if(! $Aluno->getEstrangeiro()){
                array_push($erros, "informe se é estrangeiro");
            }
            if(! $Aluno->getCurso()){
                array_push($erros, "informe o curso");
            }
            
            return $erros;
       }

       
}
?>
