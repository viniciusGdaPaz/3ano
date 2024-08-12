<?php

$tipo = $_GET["tipo"];
$nome = $_POST["nome"];
$sobrenome = $_Post["sobrenome"];
$idade = $_Post["idade"];


if($tipo == "A"||$tipo == "a"){

    $pessoa = array("nome"=> $nome,
                    "sobrenome" => $sobrenome,
                    "idade"=> $idade);
    
    echo"Nome:".$pessoa['nome'];
    echo"  ".$pessoa['sobrenome'];
    echo"<br> idade:".$pessoa['idade'];


}else if( $tipo == "C"||$tipo == "c"){

    Class Pessoa{
      private $nomeP;
      private $sobrenomeP;
      private $idadeP;

      public function __construct($n = "", $s="",$i = "")
      {
        $this->nomeP = $n;
        $this->sobrenomeP = $s;
        $this->idadeP = $i;
      }

      /**
       * Get the value of nomeP
       */
      public function getNomeP()
      {
            return $this->nomeP;
      }

      /**
       * Set the value of nomeP
       */
      public function setNomeP($nomeP): self
      {
            $this->nomeP = $nomeP;

            return $this;
      }

      /**
       * Get the value of sobrenomeP
       */
      public function getSobrenomeP()
      {
            return $this->sobrenomeP;
      }

      /**
       * Set the value of sobrenomeP
       */
      public function setSobrenomeP($sobrenomeP): self
      {
            $this->sobrenomeP = $sobrenomeP;

            return $this;
      }

      /**
       * Get the value of idadeP
       */
      public function getIdadeP()
      {
            return $this->idadeP;
      }

      /**
       * Set the value of idadeP
       */
      public function setIdadeP($idadeP): self
      {
            $this->idadeP = $idadeP;

            return $this;
      }
    }
    $pessoa = new Pessoa($nome,$sobrenome,$idade);

    echo"Nome completo: ". $pessoa->getNomeP() . " " . $pessoa->getSobrenomeP();
    echo"Idade: " . $pessoa->getIdadeP();

}else{
    echo"ERRO, INFORMADO PARAMETRO DIFERENTE DE A E C";

      
}





?>
