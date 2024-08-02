<?php

include "conexao.php";
$dados = $conn->query('SELECT * FROM tds');

echo"<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
    <link href='https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap' rel='stylesheet'>
   ";

echo "<style>";
echo "
      body{
           background-color: #ADD8E6;   
         }
    
      table {
        width: 100%;
        table-layout: fixed; /* Garante que todas as colunas tenham o mesmo tamanho */
    }

    th, td {
        text-align: center;
        padding: 10px;
    }

    td {
        font-size: 20px;
    }

    .ano-1 {
        background-color: lightgreen;
    }
    .ano-2 {
        background-color: lightblue;
    }
    .ano-3 {
        background-color: lightcoral;
    }
    .ano-4 {
        background-color: grey;
    }
    .ano {
        background-color: blue;
    }";
echo "</style>";


echo" <div class='container mt-5 '>";
echo "<table border = '10px'>";
echo "<thead class='thead-dark' >";
echo "<tr style='background-color: white;'>";
echo "<th>ID</th>";
echo "<th>NOME</th>";
echo "<th>IDADE</th>";
echo "<th>ANO</th>";
echo "</tr>";
echo "</thead>";

$als1 = array();
$als2 = array();
$als3 = array();
$als4 = array();
$als = array();
foreach ($dados as $alu) {
    // Defina uma classe com base no valor do ano

    
    switch ($alu["ano"]) {
        case 1:
            $als1[] = $alu;
            break;
        case 2:
            $als2[] = $alu;
            break;
        case 3:
             $als3[] = $alu;
            break;
            case 4:
            $als4 []= $alu;
                break;
        
        default:
        $als[] = $alu;
    }

}
   $alunospa = array($als1,$als2,$als3,$als4,$als);

foreach($alunospa as $alunos){
    foreach ($alunos as $aluno) {
    // Defina uma classe com base no valor do ano

    $classe = "";
    switch ($aluno["ano"]) {
        case 1:
            $classe = "ano-1";
            break;
        case 2:
            $classe = "ano-2";
            break;
        case 3:
            $classe = "ano-3";
            break;
            case 4:
                $classe = "ano-4";
                break;
        
        default:
            $classe = "ano";
    }
    

    
    
    echo "<tr class='$classe'>";
    echo"<td>";
    print_r($aluno["id"]);
    echo"</td>";

    echo"<td>";
    print_r($aluno["nome"]);
    echo"</td>";
    
    echo"<td>";
    print_r($aluno["idade"]);
    echo"</td>";
    

    echo"<td>";
   print_r($aluno["ano"]);
    echo"</td>";
    echo "</tr>";
}
}

echo "</table>";
echo"</div>";

?>
