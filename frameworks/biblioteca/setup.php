<?php
// URL do arwuuivo ZIP
$url = 'http://localhost/fwk/FwkSis.zip'; //Altera para o link correto

//Caminho onde o arquivo sera salvo
$localFile = getcwd().'/fwkTamp.zip';
//Baixa o arquivo ZIP
$content = file_get_contents($url);
if($content === FALSE){
    die('Erro ao baixar o arquivo ZIP');
}

//Salvar o arquivo ZIP localmente
file_put_contents($localFile, $content);

//Descompacta o arquivo ZIP
$zip = new ZipArchive;
//echo $localFile ."<br>";
if($zip->open($localFile)=== TRUE) {
    //Define o diretorio de destino para a extração
    $dir=dirname(__FILE__);
    mkdir($dir.'/fwkSis');
    $extractPath = $dir.'/fwkSis';

    //Extrai os arquivos
    $zip->extractTo($extractPath);
    $zip->close();

    echo"Arquivo ZIP baixado e descompactado com  sucesso";
} else{
    die("Erro ao descompactar o arquivo ZIP.");
}

header("Location: fwkiSis/configBD.html")

?>
