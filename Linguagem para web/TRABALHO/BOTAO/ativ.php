<?php 
echo"<link rel='stylesheet' href='estilo.css'>";

function desenhaBotao($matriz, $nome){

    echo'<div class="dropdown">';
    echo'  <button class="dropbtn"> '.$nome.'</button>';
    echo'  <div class="dropText"> ';

    foreach ($matriz as $k) {
       echo'    <span><img src="'. $k["linkimg"] .'" width="20" height="20">'.$k["info"].'</span>';
    }
   
    
    echo'   </div>';
    echo'</div>';



}


$car = array("linkimg"=>"https://cdn.motor1.com/images/mgl/lEmjGg/s3/chevrolet-tracker-rs-2024.jpg",
             "info"=>"Carro");

$truck = array("linkimg"=>"https://img.freepik.com/psd-gratuitas/modelo-de-caminhao-caixa-psd_1409-3681.jpg",
               "info"=>"Caminhão");
             


              
              
$moto = array("linkimg"=>"https://cdn.awsli.com.br/600x450/1997/1997350/produto/112082508cb7eccb17b.jpg",
                "info"=>"Moto");


$automoveis=array($car,$truck,$moto);

$gre = array("linkimg"=>"https://seeklogo.com/images/G/gremio-logo-DA302F6D10-seeklogo.com.png",
             "info"=>"Grêmio");
          
$fla = array("linkimg"=>"https://upload.wikimedia.org/wikipedia/commons/9/93/Flamengo-RJ_%28BRA%29.png",
             "info"=>"Flamengo");
             
$cor = array("linkimg"=>"https://upload.wikimedia.org/wikipedia/pt/b/b4/Corinthians_simbolo.png",
             "info"=>"Corinthians");             

$times = array($gre, $fla, $cor);

$preto = array("linkimg"=>"https://static.vecteezy.com/system/resources/previews/001/209/957/original/square-png.png",
             "info"=>"Preto");

$red = array("linkimg"=>"https://w7.pngwing.com/pngs/949/579/png-transparent-rectangle-red-red-brick-pattern-background-angle-rectangle-computer-thumbnail.png",
             "info"=>"Vermelho");
             
$azul = array("linkimg"=>"https://cdn3.ecshop.com.br/mgno9rbpq/product_images/h/169/pp1304__63903.png",
             "info"=>"Azul");   
             
$cor = array($preto, $red, $azul);

$camiseta = array("linkimg"=>"https://img.freepik.com/psd-gratuitas/frente-de-camiseta-preta-isolada_125540-1167.jpg",
             "info"=>"camiseta");

$calca = array("linkimg"=>"https://png.pngtree.com/png-clipart/20210318/ourmid/pngtree-pants-clip-art-jeans-png-image_3082930.jpg",
             "info"=>"Calça");   
             
$meia = array("linkimg"=>"https://static.vecteezy.com/system/resources/previews/012/617/413/original/pair-of-winter-socks-png.png",
             "info"=>"Meia");             
             
$roupa = array($camiseta, $calca, $meia); 






desenhaBotao($automoveis, "Automoveis");
echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";

desenhaBotao($roupa, "Roupa");
echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";

desenhaBotao($cor, "Cor");
echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";

desenhaBotao($times, "Times");

?>
