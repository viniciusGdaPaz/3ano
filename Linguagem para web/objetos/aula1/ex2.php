<?php

class Pessoa{

  private $nome;
  private $sobrenome;

  public function nomecompleto(){
    $nc =  $this->nome ." ".$this->sobrenome;
    return $nc;
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
   * Get the value of sobrenome
   */
  public function getSobrenome()
  {
    return $this->sobrenome;
  }

  /**
   * Set the value of sobrenome
   */
  public function setSobrenome($sobrenome): self
  {
    $this->sobrenome = $sobrenome;

    return $this;
  }
}

$p1 = new Pessoa();
$p1->setNome("Erik");
$p1->setSobrenome("Dias Paulino");
echo $p1->nomecompleto();
echo "<br>";

$p2 = new Pessoa();
$p1->setNome("Miriã");
$p1->setSobrenome("Brizola");
echo $p1->nomecompleto();
echo "<br>";

$p2 = new Pessoa();
$p1->setNome("João");
$p1->setSobrenome("Arthur Gonçalves");
echo $p1->nomecompleto();









?>
