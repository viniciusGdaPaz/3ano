<?php
 

 include_once(__DIR__."/../util/Connection.php");
 include_once(__DIR__."/../model/Aluno.php");
 include_once(__DIR__."/../model/Curso.php");
 class AlunoDao{

    private $conn;

    public function __construct(){
        $this->conn = Connection::getConnection();
    }

    public function list(){
        $sql = "SELECT * FROM alunos";

        $stm =$this->conn->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();

        $alunos = $this->mapAlunos($result);
        return $alunos;
    }

   
    private function mapAlunos(array $result){

        $alunos = array();

        foreach($result as $reg){
            $aluno = new Aluno();
            $aluno->setId($reg["id"]);
            $aluno->setIdade($reg["idade"]);
            $aluno->setNome($reg["nome"]);
            $aluno->setEstrangeiro($reg["estrangeiro"]);

            $curso = new Curso();
            $curso->setId($reg['id_curso']);
            $aluno->setCurso($curso);

            array_push($alunos, $aluno);
        }

        return $alunos;
    }
 }
?>
