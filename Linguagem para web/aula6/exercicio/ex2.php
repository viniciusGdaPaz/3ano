<?php

$n1 = $_GET["numero1"];
$n2 = $_GET["numero2"];
$equacao =  $_GET["equacao"];

echo"informe os valores 1 e 2";
echo"opções de equção :";
echo"<br> soma:1 ";
echo"<br> subtração:2 ";
echo"<br> divisão:3 ";
echo"<br> multiplicação:4 ";
echo"<br> resto:5 ";


if( $n1 == null ){
    echo" valor numero1 não foi informado";
}
else if( $n2 == null ){
    echo" valor numero2 não foi informado";
}
else{



if($equacao == 1){

    echo"soma dos valores numero 1 e numero 2 :".$n1 + $n2;

}else if($equacao == 2){
    echo"subtração dos valores numero 1 e numero 2 :".$n1 - $n2;

}else if($equacao == 3){
    echo"divisão dos valores numero 1 pelo numero 2 :".$n1 / $n2;

}else if($equacao == 4){
    echo"multiplicaçõa dos valores numero 1 pelo numero 2 :".$n1 * $n2;

}else if($equacao == 5){
    echo"resto dos valores numero 1 dividido pelo numero 2 :".$n1 % $n2;

}else if ($equacao == null){
    echo"<br>valor  informado invalido";
}


}







?>
