<?php
    
$cor = $_POST['cor'];

if($cor == null){
    echo"<h1>cor não foi passada</h1>  ";
} else{echo" <style>
     body{
         background-color:$cor;
     }

   
</style>";


}
echo"<br><a href='cor.php'><h1>Informe a cor</h1></a>";

?>

