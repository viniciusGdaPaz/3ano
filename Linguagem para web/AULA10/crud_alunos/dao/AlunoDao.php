<?php
 

 include_once(__DIR__."/../util/Connection.php");
 include_once(__DIR__."/../model/Aluno.php");
 include_once(__DIR__."/../model/Curso.php");
 class AlunoDao{

    private $conn;

    public function __construct(){
        $this->conn = Connection::getConnection();
    }

    public function delete($id){
       $sql = "DELETE FROM alunos WHERE id=?";
       $stm=$this->conn->prepare($sql);
       $stm->execute(array($id));
    }

    public function insert(Aluno $alunos){
        $sql = "INSERT INTO alunos(nome, idade, estrangeiro, id_curso)
                VALUES (?,?,?,?)";
        $stm=$this->conn->prepare($sql);
        $stm->execute(array($alunos->getNome(),
                            $alunos->getIdade(),
                            $alunos->getEstrangeiro(),
                            $alunos->getCurso()->getId()));
    }

    public function list(){
        $sql = "SELECT a.*, c.nome curso_nome, c.turno curso_turno 
        FROM alunos a 
        JOIN cursos c ON (c.id= a.id_curso)";

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
            $curso->setNome(($reg['curso_nome']));
            $curso->setTurno($reg['curso_turno']);
            $aluno->setCurso($curso);

            array_push($alunos, $aluno);
        }

        return $alunos;
    }
 }
?>
