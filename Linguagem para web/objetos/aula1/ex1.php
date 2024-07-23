<?php
//declaração de classe
class Computador{

    //atributos
    private $preco;
    private $marca;




    //construtor
    public function __construct($preco = 0, $marca = ""){
        $this->preco = $preco;
        $this->marca = "$marca";

    }
    //metodos
    public function ligar(){
        echo"Computador ligando";
    }

    public function getDados(){
        $dados = $this->preco;
    }



    

    /**
     * Get the value of preco
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     */
    public function setPreco($preco): self
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }
}//fima da clase

//progama principal
$comp = new Computador();
$comp->setPreco(2000);
$comp->setMarca("Dell");
$comp->ligar();
echo "<br>";
echo $comp->getPreco() ."-". $comp->getMarca();
?>
