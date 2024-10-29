<?php

include_once(__DIR__."/../dao/CursoDao.php");
class CursoController{


    

     public function listar(){
        
        $cursoDao = new CursoDao();

        $lista = $cursoDao->list();
        return $lista;
     }


}


?>
