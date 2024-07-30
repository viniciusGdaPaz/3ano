<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

class Estado{
    private $nome;
    private $sigla;

    
    public function __construct($nome = "", $sigla="")
    {
        $this->nome = $nome;
        $this->sigla = $sigla;
    }
    
    public function getDados(){
        $d = $this->nome . "-". $this -> sigla;
        return $d;
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
    private $estado;

    public function __construct($n = "",$qdh = "", $at = 0 , $al = "", $st = null)
    {
        $this->nome = $n;
        $this->qtdhabitantes = $qdh;
        $this->areaterritorial = $at;
        $this->altitude =$al;
        if($st)
            $this->estado = $st;
        else
            $this->estado = new Estado();
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
     * Get the value of qtdhabitantes
     */
    public function getQtdhabitantes()
    {
        return $this->qtdhabitantes;
    }

    /**
     * Set the value of qtdhabitantes
     */
    public function setQtdhabitantes($qtdhabitantes): self
    {
        $this->qtdhabitantes = $qtdhabitantes;

        return $this;
    }

    /**
     * Get the value of areaterritorial
     */
    public function getAreaterritorial()
    {
        return $this->areaterritorial;
    }

    /**
     * Set the value of areaterritorial
     */
    public function setAreaterritorial($areaterritorial): self
    {
        $this->areaterritorial = $areaterritorial;

        return $this;
    }

    /**
     * Get the value of altitude
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set the value of altitude
     */
    public function setAltitude($altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado($estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}

$pr = new Estado("Paraná","PR");
$sc = new Estado("Santa Catarina","SC");

$fi = new Cidade("Foz do Iguaçu",250.00,"500Km²","145m",$pr);
$ca = new Cidade("Cascavel",300.000 ,"420km² ","320m ",$pr);
$ch = new Cidade("Chapecó ",240.000 ,"120km²","620m ",$sc);
$bl = new Cidade("Blumenau",330.000 ,"200km²","85m",$sc);
$cu = new Cidade("Curitiba",1.500000,"300km² ","850m",$pr);

$cidades = array($fi, $ca, $ch, $bl, $cu);


echo"<table border='1px'>";
echo"<thead>";
echo"<th>Nome </th>";
echo"<th>Habitantes</th>";
echo"<th>Área</th>";
echo"<th>Altitude</th>";
echo"<th>Estado</th>";
echo"</thead>";
foreach($cidades as $c){
    linha($c);

}


echo"</table>";


 function linha($c){
    echo"<tr>";
    echo"<td>". $c->getNome()."</td>";
    echo"<td>". $c->getQtdhabitantes()."</td>";
    echo"<td>". $c->getAreaterritorial()."</td>";
    echo"<td>". $c->getAltitude()."</td>";
    echo"<td>". $c->getEstado()->getDados()."</td>";
    echo"</tr>";
}


?>
