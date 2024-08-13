<?php

$n1 = $_GET["numero1"];
$n2 = $_GET["numero2"];
/**$equacao =  $_GET["equacao"];*/

echo"informe os valores 1 e 2";
/**echo" <br>opções de equção :";
echo"<br> soma:1 ";
echo"<br> subtração:2 ";
echo"<br> divisão:3 ";
echo"<br> multiplicação:4 ";
echo"<br> resto:5 <br>";*/


if( $n1 == null ){
    echo" <br>valor numero1 não foi informado";
}
else if( $n2 == null ){
    echo"<br> valor numero2 não foi informado";
}
else if ($n1 != null & $n2 !=null){



/**if($equacao == 1){

    echo"soma dos valores numero 1 e numero 2 : ".$n1 + $n2;

}else if($equacao == 2){
    echo"subtração dos valores numero 1 e numero 2 : ".$n1 - $n2;

}else if($equacao == 3){
    echo"divisão dos valores numero 1 pelo numero 2 : ".$n1 / $n2;

}else if($equacao == 4){
    echo"multiplicaçõa dos valores numero 1 pelo numero 2 : ".$n1 * $n2;

}else if($equacao == 5){
    echo"resto dos valores numero 1 dividido pelo numero 2 : ".$n1 % $n2;

}else if ($equacao == null){
    echo"<br>valor  informado invalido";
}*/
echo"<br>numero 1 = ".$n1."      numero 2 = ".$n2     ;
echo"<br>soma dos valores numero 1 e numero 2 : ".$n1 + $n2;
echo"<br>subtração dos valores numero 1 e numero 2 : ".$n1 - $n2;
echo"<br>divisão dos valores numero 1 pelo numero 2 : ".$n1 / $n2;
echo"<br>multiplicaçõa dos valores numero 1 pelo numero 2 : ".$n1 * $n2;
echo"<br>resto dos valores numero 1 dividido pelo numero 2 : ".$n1 % $n2;
}







?>
