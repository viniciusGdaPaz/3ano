 <?php
  $marca = $_POST["marca"];
  $modelo = $_POST["modelo"];
  $combustivel = $_POST["combustivel"];



  Class Carro{

    private $marcaC;
    private $modeloC;
    private $combustivelC;

    public function __construct($m = "", $mo = "", $c="")
    {
        $this->marcaC = $m;
        $this->modeloC = $mo;
        $this->combustivelC = $c;

    }

    public function get_combustivel(){
        
       if($this->combustivelC == "A"){
        $tc = "Alcool";

       } else if($this->combustivelC == "G"){
        $tc = "Gasolina";
       }else if ($this->combustivelC == "F"){
        $tc = "Flex";
       }else{
        $tc = "Outro/não informado";
       }

      return $tc;

    }


     


    /**
     * Get the value of marcaC
     */
    public function getMarcaC()
    {
        return $this->marcaC;
    }

    /**
     * Set the value of marcaC
     */
    public function setMarcaC($marcaC): self
    {
        $this->marcaC = $marcaC;

        return $this;
    }

    /**
     * Get the value of modeloC
     */
    public function getModeloC()
    {
        return $this->modeloC;
    }

    /**
     * Set the value of modeloC
     */
    public function setModeloC($modeloC): self
    {
        $this->modeloC = $modeloC;

        return $this;
    }

    /**
     * Get the value of combustivelC
     */
    public function getCombustivelC()
    {
        return $this->combustivelC;
    }

    /**
     * Set the value of combustivelC
     */
    public function setCombustivelC($combustivelC): self
    {
        $this->combustivelC = $combustivelC;

        return $this;
    }
  }

echo"<h1>Carro Cadastrado</h1>";

  $carro = new Carro($marca , $modelo, $combustivel);

  echo"<br> Marca: ".$carro->getMarcaC();
  echo"<br> Modelo: ".$carro->getModeloC();
  echo"<br> Combustivel: ". $carro->get_combustivel();


  echo"<br><br><a href='form.php'>CADASTRAR CARRO</a>";
  
 
 ?>

 
