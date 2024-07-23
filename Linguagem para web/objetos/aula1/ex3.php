<?php

class Livro{

    private $titulo;
    private $autor;
    private $genero;
    private $qdp;

    public function __construct($titulo="" , $autor="", $genero="", $qdp=0){
          $this->titulo = $titulo;
          $this->autor = $autor;
          $this->genero = $genero;
          $this->qdp= $qdp;
         
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of qdp
     */
    public function getQdp()
    {
        return $this->qdp;
    }

    /**
     * Set the value of qdp
     */
    public function setQdp($qdp): self
    {
        $this->qdp = $qdp;

        return $this;
    }
}

$liv1 = new Livro("A Cidade dos Sonhos","Carlos Mendes","Ficção Científica",320);
$liv2 = new Livro("Entre Dois Mundos","Maria Santos","Fantasia",280);
$liv3 = new Livro("Segredos do Passado","Pedro Almeida","Suspense", 350);

$livros = array($liv1,$liv2,$liv3);

function criarTabela($p){
echo"<table border='1'>";
echo"<tr>";
echo"<td>Título:". $p->getTitulo()." </td>";
echo"</tr>";
echo"<tr>";
echo"<td>Autor:".$p->getAutor()."</td>";
echo"</tr>";
echo"<tr>";
echo"<td>Geneêro:".$p->getGenero()."</td>";
echo"</tr>";
echo"<tr>";
echo"<td>Quantidade de paginas:".$p->getQdp()."</td>";
echo"</tr>";
echo"</table>";
echo"<br>";
}

foreach($livros as $l){
    criarTabela($l);

}


?>
