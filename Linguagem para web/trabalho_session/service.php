<?php

Class Service{

    public function criarSession() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }

        if (!isset($_SESSION["numero"])) {
            $_SESSION["numero"] = 0;
           
        } else {
            return "Sessão já iniciada";
        }
    }

    public function excluirSession(){
        session_start();
        if(isset($_SESSION['numero'])){
            
            session_unset();
            session_destroy();
           
        }else{
            $erro = "Sessão ainda não existe";
            return $erro;
        }
    }

    public function incrementarSession(){
        session_start();
        if(isset($_SESSION['numero'])){

            $_SESSION['numero'] += 1;


              
        }else{
                $erro = "Sessão ainda não foi iniciada";
                return $erro ; 
        }
    }

    public function validarSession(){
        session_start();
        if(isset($_SESSION['numero'])){
            return true;
        }else{
            return false;
        }
    }


}






?>
