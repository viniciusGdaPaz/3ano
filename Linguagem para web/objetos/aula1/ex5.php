<?php

class Estado{
    private $nome;
    private $sigla;

    
    public function __construct($nome = "", $sigla="")
    {
        $this->nome = $nome;
        $this->nome = $sigla;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sigla
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set the value of sigla
     */
    public function setSigla($sigla): self
    {
        $this->sigla = $sigla;

        return $this;
    }
}


class Cidade{
    private $nome;
    private $qtdhabitantes;
    private $areaterritorial;
    private $altitude;
    private $estado = new estado();

    public function __construct($n = "",$qdh = "", $at = 0 , $al = 0, $st = 0)
    {
        $this->nome = $n;
        $this->qtdhabitantes = $qdh;
        $this->areaterritorial = $at;
        $this->altitude =$al;
        $this->estado = $st;
    }
}

$pr = new Estado("Párana","PR");
$sc = new Estado("Santa Catarina","SC");

$fi = new Cidade("Foz do Iguaçu",250.00,"500Km²");


?>
