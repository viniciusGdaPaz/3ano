<?php
class Retangulo{
      
    private $base;
    private $altura;

    public function area(){
        $a = $this->base * $this->altura;
        return $a;
    }

    public function perimetro(){
        $a = $this->altura *2;
        $b = $this->base * 2;
        return $a + $b;
    }

    
    public function __construct($altura = 0 , $base = 0){
         $this->base = $base;
         $this->altura = $altura;
    }


    /**
     * Get the value of base
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set the value of base
     */
    public function setBase($base): self
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}

$ret1 = new Retangulo(5 , 7);

echo "Retangulo 1:";
echo"<br>";
echo "Area:".$ret1->area();
echo"<br>";
echo "Perimetro".$ret1->perimetro();
echo"<br>";

$ret2 = new Retangulo(4 , 5);
echo"<br>";
echo "Retangulo 2:";
echo"<br>";
echo "Area:".$ret2->area();
echo"<br>";
echo "Perimetro".$ret2->perimetro();
echo"<br>";

$ret3 = new Retangulo(8 , 3);
echo"<br>";
echo "Retangulo 3:";
echo"<br>";
echo "Area:".$ret3->area();
echo"<br>";
echo "Perimetro".$ret3->perimetro();


?>
