<?php

include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Curso.php");

class CursoDao {

    private $conn;

    public function __construct() {
        $this->conn = Connection::getConnection();        
    }

    public function list() {
        $sql = "SELECT * FROM cursos";

        $stm = $this->conn->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();

        return $this->mapCursos($result);
    }

    private function mapCursos(array $result) {
        $cursos = array();

        foreach($result as $reg) {
            $curso = new Curso();
            $curso->setId($reg['id']);
            $curso->setNome($reg['nome']);
            $curso->setTurno($reg['turno']);

            array_push($cursos, $curso);
        }

        return $cursos;
    }

}
